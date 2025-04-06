<?php
// dashboard.php
include("db.php");
include("header.php");

if(isset($_POST['username'])){
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$role = $_POST['role'];

date_default_timezone_set("Asia/Kolkata"); // Set timezone to India
$currentDate = date("Y-m-d H:i:s"); // Format: 2025-04-05 14:23:45

$query = mysqli_query($conn, "insert into users set 
username = '$username', 
email = '$email', 
phone = '$phone', 
password = '$password', 
role = '$role', 
created_at = '$currentDate'
");

if($query)
{
  echo "<script> alert('User added Succesfully!'); </script>"; 
}
else{
  echo "<script> alert('Query Failed'); </script>"; 
}
}
?>


<main class="main-content">

<h2>Add New Participant</h2>

<form method="POST" action="">
  <input type="hidden" id="user_id"> 
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
    <option value="participant">Participants</option>
    <option value="admin">Admin</option>
    <option value="setter">Setter</option>
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
    <th>Phone</th>
    <th>Password</th>
    <th>Role</th>
    <th>Created Datime</th>
    <th>action</th>
    </tr>
  </thead>
  <tbody>
    
    <?php

    $userquery = "select * from users";
    $result = mysqli_query( $conn, $userquery);
if(mysqli_num_rows($result)>0){
  $count = 0;
  while($data = mysqli_fetch_array($result)){
  $count++;
  ?>
<tr>
<td><?=$count;?></td>
<td><?=$data['username'];?></td>
<td><?=$data['email'];?></td>
<td><?=$data['phone'];?></td>
<td><?=$data['password'];?></td>
<td><?=$data['role'];?></td>
<td><?=$data['created_at'];?></td>
<td><button>Edit</button>
<button>Delete</button></td>
</tr>
<?php 
} 
}
?>
  </tbody>
</table>  



</main>
</div>
</body>
</html>
