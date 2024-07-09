<?php
 require_once 'db.php';
 session_start();

 
 $id = $_GET ['user_id'];
 
 $update_status ="UPDATE  users SET status= 2 WHERE id = $id";
 
 if ( mysqli_query($db,$update_status)){
    $_SESSION ['delete_user'] = 'user Delete Successfully';
    header('location:users.php');
}



// user delete
// $id = $_GET ['user_id'];
//  $delete = "DELETE FROM users WHERE id = $id ";

// if ( mysqli_query($db, $delete)){
//     $_SESSION ['delete_user'] = 'user Delete Successfully';
//     header('location:users.php');
// }


?>