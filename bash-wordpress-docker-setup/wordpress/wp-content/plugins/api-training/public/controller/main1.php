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

        echo "Hello World \n";
        echo "Python is cool";

        return ob_get_clean();
    }
}


