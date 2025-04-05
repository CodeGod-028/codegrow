<?php
// dashboard.php
include("header.php");
?>


  <main class="main-content">
    <?php
      $page = $_GET['page'] ?? 'dashboard';

      $allowed_pages = ['dashboard', 'add_question', 'view_questions', 'view_submissions', 'manage_users'];

    //   if (in_array($page, $allowed_pages)) {
    //       include $page . '.php';
    //   } else {
    //       echo "<h2>Page not found.</h2>";
    //   }
    ?>

    <!-- dashboard.php content -->
<h2>Welcome, Admin</h2>
<div class="dashboard-boxes">
  <div class="box">
    <h3>Total Questions</h3>
    <p>12</p>
  </div>
  <div class="box">
    <h3>Total Users</h3>
    <p>35</p>
  </div>
  <div class="box">
    <h3>Submissions</h3>
    <p>87</p>
  </div>
</div>

<?php
// add_question.php
?>

<h2>Add New Coding Question</h2>

<form action="process_add.php" method="POST">
  <label for="title">Title</label>
  <input type="text" id="title" name="title" placeholder="Enter question title" required>

  <label for="description">Description</label>
  <textarea id="description" name="description" placeholder="Describe the problem" rows="4" required></textarea>

  <label for="input_format">Input Format</label>
  <textarea id="input_format" name="input_format" placeholder="Input format details" rows="2"></textarea>

  <label for="output_format">Output Format</label>
  <textarea id="output_format" name="output_format" placeholder="Output format details" rows="2"></textarea>

  <label for="constraints">Constraints</label>
  <textarea id="constraints" name="constraints" placeholder="Any constraints?" rows="2"></textarea>

  <label for="sample_input">Sample Input</label>
  <textarea id="sample_input" name="sample_input" placeholder="Sample input for this question" rows="2"></textarea>

  <label for="sample_output">Sample Output</label>
  <textarea id="sample_output" name="sample_output" placeholder="Expected sample output" rows="2"></textarea>

  <button type="submit">Submit Question</button>
</form>


  </main>
</div>
</body>
</html>
