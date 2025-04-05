<?php
// dashboard.php
include("header.php");

?>


  <main class="main-content">

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

<hr style="margin: 40px 0;">

<h2>Registered Participants</h2>

<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email</th>
      <th>Username</th>
      <th>Registered At</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // if ($result->num_rows > 0) {
    //     $count = 1;
    //     while ($row = $result->fetch_assoc()) {
    //         echo "<tr>
    //                 <td>{$count}</td>
    //                 <td>{$row['name']}</td>
    //                 <td>{$row['email']}</td>
    //                 <td>{$row['username']}</td>
    //                 <td>{$row['created_at']}</td>
    //               </tr>";
    //         $count++;
    //     }
    // } else {
        echo "<tr><td colspan='5'>No participants found.</td></tr>";
    // }
    ?>
  </tbody>
</table>



  </main>
</div>
</body>
</html>
