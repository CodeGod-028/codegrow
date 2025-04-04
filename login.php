<?php
include("db.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["role"] = $user["role"];
        header("Location: dashboard.php");
    } else {
        echo "Invalid email or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    


<header>
        <h1>Code Grow</h1>
    </header>
    <section id="home" class="hero">
        <h2>Welcome to CodeGrow Competition</h2>
        <p>Test your coding skills and compete with the best!</p>
        <a href="#register" class="btn">Register Now</a>
    </section>
<section id="register" class="register">
        <h2>Login Now</h2>
        <form>
            <input type="text" placeholder="Full Name" required>
            <input type="email" placeholder="Email" required>
            <a href="index.php" class="btn">Login</a>
            </form>
    </section>
    <footer>
        <p>&copy; 2025 Code Grow. All rights reserved.</p>
    </footer>

    </body>
</html>
