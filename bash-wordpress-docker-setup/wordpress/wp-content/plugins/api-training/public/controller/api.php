<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @package    Api_Training
 * @subpackage Api_Training/public
 * @author     Khalid <khalinoid@gmail.com>
 */
class Api_Training_APIs {

    public function __construct()
    {
        add_shortcode('my_shortcode', [$this, 'api_training_shortcodes']);
    }

    function api_training_shortcodes(){
        ob_start();

        // Display the input form
        ?>
        <form method="post">
            <label for="text">Enter text for sentiment analysis:</label><br>
            <input type="text" name="text" id="text" required>
            <br><br>
            <input type="submit" value="Analyze Sentiment">
        </form>
        <?php
    
        // Check if form was submitted
        if ( isset($_POST['text']) ) {
            // Retrieve text from form input
            $text_input = sanitize_text_field($_POST['text']);
    
            // Prepare the data to be sent in the POST request
            $data = json_encode([
                'text' => $text_input  // Use user input text
            ]);

            // Define the Flask API URL
            $url = 'http://flask-service:5000/predict';
    
            // Send POST request to the Flask API
            $response = wp_remote_post($url, [
                'method'    => 'POST',
                'body'      => $data,
                'headers'   => [
                    'Content-Type' => 'application/json',
                ],
            ]);
    
            // Check for errors
            if ( is_wp_error( $response ) ) 
            {
                echo "Error occurred: " . $response->get_error_message();
            } 
            else 
            {
                // Retrieve the API response body
                $body = wp_remote_retrieve_body( $response );
    
                // Decode JSON response from API
                $result = json_decode($body, true);
    
                // Check if the response has the expected fields
                if (isset($result['sentiment']) && isset($result['confidence'])) 
                {
                    $sentiment = $result['sentiment'];
                    $confidence = number_format($result['confidence'] * 100, 2); // Convert to percentage
                    echo "<p>Sentiment: <strong>$sentiment</strong></p>";
                    echo "<p>Confidence: <strong>$confidence%</strong></p>";
                } 
                else 
                {
                    echo "<p>Unexpected API response format.</p>";
                }
            }
        }
    

        return ob_get_clean();
    }
    
    
}


