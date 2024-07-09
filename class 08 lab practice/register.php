<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     $name =$_POST['name'];
     $email = $_POST['email'];
     $password = $_POST ['password'];
 
      if(empty($name)){
          header('location:index.php');
          $_SESSION['NameErr']= 'Please enter your Name';
      }
      else if (empty($email)){
         header('location:index.php');
         $_SESSION['emailErr']= 'Please enter your email';
      }
      else if (empty($password)){
         header('location:index.php');
          $_SESSION['passwordErr'] = 'Please enter your password';
     }
   
                                    
 
 

?>




