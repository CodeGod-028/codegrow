<?php
include("db.php");
session_start();
if ($_SESSION["role"] !== "admin") {
    die("Access Denied");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $sample_input = $_POST["sample_input"];
    $sample_output = $_POST["sample_output"];
    $difficulty = $_POST["difficulty"];

    $sql = "INSERT INTO problems (title, description, sample_input, sample_output, difficulty) 
            VALUES ('$title', '$description', '$sample_input', '$sample_output', '$difficulty')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Problem Added Successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="POST">
    <input type="text" name="title" placeholder="Problem Title" required>
    <textarea name="description" placeholder="Problem Description" required></textarea>
    <textarea name="sample_input" placeholder="Sample Input"></textarea>
    <textarea name="sample_output" placeholder="Sample Output"></textarea>
    <select name="difficulty">
        <option value="easy">Easy</option>
        <option value="medium">Medium</option>
        <option value="hard">Hard</option>
    </select>
    <button type="submit">Add Problem</button>
</form>
