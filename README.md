<!DOCTYPE html>
<html>
<body>

  <h1>Integrating API in Wordpress Project</h1>

  <h2>Overview</h2>

  <p>In this project, I integrated a Flask API into a WordPress site, enabling sentiment analysis. Users submit text through WordPress, which is sent to the Flask API for analysis, returning sentiment and confidence scores in real-time.</p>

  <h2>Introduction</h2>

  <p>This project integrates a Flask API into a WordPress site to perform sentiment analysis. Users can input text through the WordPress interface, which is then sent to the Flask API. The API processes the text to determine sentiment—whether it’s positive or negative—along with a confidence score. This integration enhances WordPress with dynamic data analysis capabilities, offering users immediate insights into the sentiment of their content or reviews.</p>

  <h2>Features</h2>

  <ol>
    <li><strong>RAG Architecture:</strong> Integration of the RAG architecture for improved language generation based on local data.</li>
    <li><strong>Ingestor Component:</strong> The ingestor component ingests the documents' information into the chromaDB vector database.</li>
    <li><strong>Data Security:</strong> No data is sent or leaked to the internet, ensuring the privacy and security of locally available datasets.</li>
    <li><strong>Retriever Component:</strong> The retriever component efficiently retrieves relevant information from the local dataset.</li>
    <li><strong>Generator Component:</strong> The generator component utilizes the retrieved information to generate contextually relevant language.</li>
  </ol>

  <h2>Getting Started</h2>

  <p>Follow these steps to set up the RAG-based Local Language Model:</p>

  <ol>
    <li><strong>Clone the Repository:</strong></li>
    <pre><code>git clone https://github.com/Addika1630/RAG_chat_docs.git</code></pre>
    <li><strong>Install Dependencies:</strong></li>
    <pre><code>cd RAG-LLM
pip install -r requirements.txt</code></pre>
    <li><p>Save the documents that need to be used to the <code>SOURCE_DOCUMENTS</code> folder.</p></li>
    <li><strong>Run the Ingestor:</strong></li>
    <pre><code>python ingest.py</code></pre>
    <li><strong>Run the Model:</strong></li>
    <pre><code>streamlit run app.py</code></pre>
    <li>Access the application in your web browser at <code>http://localhost:8501</code>)</li>
  </ol>

  <h2>Usage</h2>

  <p>The RAG-based Local Language Model can be used for various natural language processing tasks, such as text completion, question answering, and content generation. Customize the <code>app.py</code> script according to your specific use case.</p>

  <h2>User Interface</h2>

  <p>The user interface (UI) for this project is based on Streamlit, providing a simple and interactive way to interact with the RAG-based Local Language Model.</p>

  <h2>License</h2>

  <p>This project is licensed under the <a href="LICENSE">MIT License</a>.</p>

  

</body>

</html>

