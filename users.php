<?php
// dashboard.php
include("db.php");
include("header.php");

if(isset($_POST['username'])){
$user_id = $_POST['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$role = $_POST['role'];

date_default_timezone_set("Asia/Kolkata"); // Set timezone to India
$currentDate = date("Y-m-d H:i:s"); // Format: 2025-04-05 14:23:45
if(isset($_POST['update'])){
  $query = mysqli_query($conn,"update users set
   username = '$username',
   email = '$email',
   phone = '$$phone',
   password = '$password',
   role = '$role' where user_id = '$user_id'
   ");

}else{
$query = mysqli_query($conn, "insert into users set 
username = '$username', 
email = '$email', 
phone = '$phone', 
password = '$password', 
role = '$role', 
created_at = '$currentDate'
");
}

if($query)
{
  if(isset($_POST['update'])){
    echo "<script> alert('User Updated Succesfully!'); </script>"; 
  }else{
    echo "<script> alert('User Added Succesfully!'); </script>"; 
  }
  
}
else{
  echo "<script> alert('Query Failed'); </script>"; 
}
}
?>


<main class="main-content">

<h2>Add New Participant</h2>

<form method="POST" action="">
  <input type="hidden" id="user_id" name="user_id"> 
  <label for="username">Username</label>
  <input type="text" id="username" name="username" required>

  <label for="email">Email</label>
  <input type="email" id="email" name="email" required>

  <label for="phone">Phone</label>
  <input type="number" id="phone" name="phone" required>

  <label for="password">Password</label>
  <input type="password" id="password" name="password" required>
  <label for="role">Role</label>
  <select id="role" name="role" required>
    <option value="participant">Participants</option>
    <option value="admin">Admin</option>
    <option value="setter">Setter</option>
  </select>

  <button id="add_btn" type="submit"  name="insert">Add Participant</button>
  <button id="update_btn" style="display:none;"type="submit" name="update">Update Participant</button>
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
<td><button id="btn_edit" class="btn_edit" 
data-id="<?= $data['user_id'] ?>"
data-username="<?= $data['username'] ?>"
data-email="<?= $data['email'] ?>"
data-phone="<?= $data['phone'] ?>"
data-password="<?= $data['password'] ?>"
data-role="<?= $data['role'] ?>"
>Edit</button>
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
<script>
  $(document).ready(function(){

  $(".btn_edit").click(function(){
    var id = $(this).data('id');
    var username = $(this).data('username');
    var email = $(this).data('email');
    var phone = $(this).data('phone')
    var password = $(this).data('password');
    var role = $(this).data('role');

    $('#user_id').val(id);
    $('#username').val(username);
    $('#email').val(email);
    $('#phone').val(phone)
    $('#role').val(role);
    $('#password').val(password);

    $('#add_btn').css("display","none");
    $('#update_btn').css("display","block");

    window.scrollTo(0, 0); // scroll to top
    
  });
  });
</script>
</body>
</html>
