<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Competition</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #121212;
    color: white;
    text-align: center;
}

header {
    background: #1e1e1e;
    padding: 20px;
}

header h1 {
    margin: 0;
    font-size: 28px;
    color: #f39c12;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 10px 0 0;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
}

nav ul li a:hover {
    color: #f39c12;
}

/* Hero Section */
.hero {
    background: linear-gradient(to right, #1e1e1e, #333);
    padding: 60px 20px;
}

.hero h2 {
    font-size: 36px;
}

.hero p {
    font-size: 20px;
    margin: 15px 0;
}

.btn {
    display: inline-block;
    background: #f39c12;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 18px;
    margin-top: 15px;
}

.btn:hover {
    background: #d68910;
}

/* About Section */
.about, .problems, .register {
    padding: 50px 20px;
    background: #222;
    margin: 20px 0;
}

/* Problems Section */
.problem-list {
    margin-top: 10px;
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.problem {
    background: #333;
    padding: 20px;
    border-radius: 8px;
    width: 80%;
    text-align: left;
}

.problem h3 {
    color: #f39c12;
}

.problem pre {
    background: black;
    padding: 10px;
    border-radius: 5px;
    color: #0f0;
}

/* Register Section */
.register form {
    max-width: 400px;
    margin: auto;
}

.register input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: none;
    border-radius: 5px;
}

.register button {
    width: 100%;
}

/* Footer */
footer {
    background: #1e1e1e;
    padding: 15px;
    margin-top: 20px;
}

</style>
<body>
    <header>
        <h1>CodeGrow Competition</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#problems">Problems</a></li>
                <li><a href="dashboard.php">Admin</a></li>
                <li><a href="#logut.php">logout</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="home" class="hero">
        <h2>Welcome to CodeGrow Competition</h2>
        <p>Test your coding skills and compete with the best!</p>
    </section>

    <section id="problems" class="problems">
        <h2>Practice Problems</h2>
        <div class="problem-list">
            <div class="problem">
                <h3>Problem 1: Variable Declaration</h3>
                <pre><code>int age = 25;</code></pre>
                <a href="codingbox.php" class="btn">Try It</a>
            </div>
        </div>
        <div class="problem-list">
            <div class="problem">
                <h3>Problem 1: Variable Declaration</h3>
                <pre><code>int age = 25;</code></pre>
                <a href="codingbox.php" class="btn">Try It</a>
            </div>
        </div>
        <div class="problem-list">
            <div class="problem">
                <h3>Problem 1: Variable Declaration</h3>
                <pre><code>int age = 25;</code></pre>
                <a href="codingbox.php" class="btn">Try It</a>
            </div>
        </div>
        <div class="problem-list">
            <div class="problem">
                <h3>Problem 1: Variable Declaration</h3>
                <pre><code>int age = 25;</code></pre>
                <a href="codingbox.php" class="btn">Try It</a>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <h2>About the Competition</h2>
        <p>CodeMaster is an annual coding competition where programmers solve challenging problems and compete for exciting prizes.</p>
    </section>

    <section id="register1" class="register1">
        <!-- <iframe id src="https://www.programiz.com/java-programming/online-compiler/" frameborder="0"></iframe> -->
    </section>
    
    <footer>
        <p>&copy; 2025 CodeGrow Competition. All rights reserved.</p>
    </footer>
</body>
</html>
