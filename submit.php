<?php
include("db.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION["user_id"];
    $problem_id = $_POST["problem_id"];
    $code = $_POST["code"];
    $language = $_POST["language"];

    $sql = "INSERT INTO submissions (user_id, problem_id, code, language) 
            VALUES ('$user_id', '$problem_id', '$code', '$language')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Submission Successful";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="POST">
    <select name="problem_id">
        <?php
        $problems = $conn->query("SELECT * FROM problems");
        while ($row = $problems->fetch_assoc()) {
            echo "<option value='" . $row["id"] . "'>" . $row["title"] . "</option>";
        }
        ?>
    </select>
    <textarea name="code" placeholder="Write your code here" required></textarea>
    <select name="language">
        <option value="C">C</option>
        <option value="C++">C++</option>
        <option value="Java">Java</option>
        <option value="Python">Python</option>
        <option value="JavaScript">JavaScript</option>
        <option value="PHP">PHP</option>
    </select>
    <button type="submit">Submit Code</button>
</form>
