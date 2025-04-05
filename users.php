<?php
// dashboard.php
include("header.php");

?>


  <main class="main-content">

<h2>Add New Participant</h2>

<form method="POST" action="">
  <label for="username">Username</label>
  <input type="text" id="username" name="username" required>

  <label for="email">Email</label>
  <input type="email" id="email" name="email" required>

  <label for="phone">Phone</label>
  <input type="tel" id="phone" name="phone" required>

  <label for="password">Password</label>
  <input type="password" id="password" name="password" required>

  <label for="role">Role</label>
  <select id="role" name="role" required>
    <option value="user">User</option>
    <option value="admin">Admin</option>
  </select>

  <button type="submit">Add Participant</button>
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
