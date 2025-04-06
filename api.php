<?php
$api = $_REQUEST['api'];
if($api == 'user_detail'){
    $user_id = $_REQUEST['user_id'];
    $query = mysqli_query($conn, "select * from users where user_id = '$user_id' ");
    $data = mysqli_fetch_assoc($query);
    
}
?>
