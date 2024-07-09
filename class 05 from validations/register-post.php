<?php
require_once 'db.php';
 session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = password_hash ( $_POST['password'], PASSWORD_DEFAULT);
       $confirm_password = $_POST['confirm_password'];
       
       // user  email check
      $user_emeil_check = " SELECT COUNT(*) as total FROM users WHERE email = 'email' " ;
      $query = mysqli_query($db,$user_emeil_check);
      $after_assoc = mysqli_fetch_assoc($query);

       if ($after_assoc ['total'] >= 0){
          header('location:register-post.php');
       }
       else {
                 // MYSQL DATABASE

       $insert = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password' )";
       $query =mysqli_query($db,$insert);
       if($query){
              header('location:login.php');
       }
        else{
               echo 'no';
        }
       
       }

      
        
       // all notice
    


        if(empty($name)){
               header('location:from.php');
               $_SESSION['NameErr'] = 'Please enter your Name';
             
        }

       else if(empty($email)){
              header('location:from.php');
              $_SESSION['emailErr'] = 'Please enter your email';
              
       }

       elseif(empty($password)){
              header('location:from.php');
              $_SESSION['passwordErr'] = 'Please enter your password';
              
       } 
       elseif(empty($confirm_password)){
              header('location:from.php');
              $_SESSION['confirm_passwordErr'] = 'Please enter your confirm password';
             
       }

       // elseif(($password != $confirm_password)){
       //        header('location:from.php');
       //        $_SESSION['ConfirmPasswordMatchErr'] = ' your confirm password Does.nt match';
       // }

       
       // elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       //         $_SESSION['ValidEmailErr'] = 'Please enter your Valid Email';
       //         header('location:from.php');
             
           
       // }
       // email validation
      
       elseif (!empty($email)) {
              $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,20})$/';
              if(preg_match($regex,$email)){
              }
              else{
                     
                     $_SESSION['ValidEmailErr'] = 'Please enter your Valid email';
                    header('location:from.php');
              }
              
            }


            elseif(!empty($password)) {
                   $len = strlen($password);
                   if (!$len >= 8){
               $_SESSION['passwordErr'] = 'Please enter your password Min  8 Character';
                   header('location:from.php');
                   }    
                   
                    }



            else {
                   $hash = password_hash($password,PASSWORD_DEFAULT);
                   Echo ' Your Account Has Been Successfull ' , $name;
            }


      
        

      

       



       // Name validation=
       echo '</br>', $name;  
      // Email validation    
       echo '</br>', $email;
      // Password validation
       echo '</br>', $password;
      // Confirm Password validation
       echo  $confirm_password;
}


// else { 
//    echo "You are Not following Rules";
// } 


//   echo $_POST['name'];

?>