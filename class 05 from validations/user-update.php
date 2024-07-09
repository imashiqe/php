<?php
 require_once 'db.php';
 session_start();

 $id =  $_SESSION['user_id'];
 $name = $_POST['name'];
 $email = $_POST['email'];


 $update_status ="UPDATE  users SET name = '$name', email = '$email'  WHERE id = $id";
 
 if ( mysqli_query($db, $update_status)){
    $_SESSION ['update_user'] = 'User Updated Successfully';
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
