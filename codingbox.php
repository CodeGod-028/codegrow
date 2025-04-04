<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Challenge</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<style>
    /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #121212;
    color: white;
    text-align: center;
}

/* Header */
header {
    background: #1e1e1e;
    padding: 15px;
    font-size: 24px;
    color: #f39c12;
}

/* Main Container */
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

/* Problem Statement */
.problem-statement {
    background: #222;
    padding: 20px;
    border-radius: 8px;
    width: 80%;
    text-align: left;
}

.problem-statement h2 {
    color: #f39c12;
}

.problem-statement ul {
    list-style-type: none;
    padding: 0;
}

.problem-statement li {
    margin-bottom: 10px;
}

/* Code Editor */
.code-editor {
    margin-top: 20px;
    width: 80%;
}

.editor-header {
    background: #1e1e1e;
    padding: 10px;
    text-align: left;
}

textarea {
    width: 100%;
    height: 150px;
    background: black;
    color: #0f0;
    border: none;
    padding: 10px;
    font-size: 14px;
}

/* Buttons */
.buttons {
    margin-top: 20px;
}

button {
    background: #f39c12;
    border: none;
    padding: 10px 20px;
    margin: 10px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

button:hover {
    background: #d68910;
}

</style>
<body>
    <header>
        <h1>Code Challenge</h1>
    </header>
    
    <main class="container">
        <section class="problem-statement">
            <h2>Divide Two Variables</h2>
            <ul>
                <li>Declare two integer variables <code>x</code> and <code>y</code>, and assign <b>20</b> to <code>x</code> and <b>6</b> to <code>y</code>.</li>
                <li>Divide <code>x</code> by <code>y</code> (i.e., perform integer division <code>x / y</code>) and print the result.</li>
            </ul>
        </section>
        
        <section class="code-editor">
            <div class="editor-header">
                <span>Java</span>
            </div>
            <textarea id="codeArea">public class Main {
    public static void main(String[] args) {
        // Write your code here
    }
}</textarea>
        </section>
        
        <div class="buttons">
            <button class="submit-btn">Submit</button>
            <button class="next-btn">Next</button>
        </div>
    </main>

    <script src="script.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".next-btn").addEventListener("click", function () {
        alert("Navigating to the next problem...");
    });

    document.querySelector(".submit-btn").addEventListener("click", function () {
        alert("Code submitted successfully!");
    });
});

</script>
<script>
$(document).ready(function () {
    // Ensure the click event is correctly attached
    // $('#savebtn').on('click', function () {
    //     var code = $('#codeArea').val();
    //    $('#code').val(code);
    // });
    document.addEventListener("visibilitychange", function() {
  if (document.hidden) {
    alert("Tab is inactive");
    $('#codeArea').val('');
    
  }
});
});
</script>
</body>
</html>
