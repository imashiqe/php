<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css start -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>

    <style>
        h2{
            text-align: center;
        }
    </style>
    <!-- css end -->
    <title>From validation</title>
</head>

<body>

<div class="full_width">
<div class="container">
       <div class="col-lg-5 m-auto">
           <h2>Register from</h2>
       <form action="register-post.php" method="POST">
       <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="name" class="form-control NameErr" id="exampleInputName"  placeholder="Enter Name" name="name"  aria-describedby="nameHelp">
            <span class='text-danger'>
            <?php
               if (isset( $_SESSION['NameErr'])) {
                   echo "<style>
                   .NameErr{
                       border: 1px solid red;
                   }
                   </style>";
               echo  $_SESSION['NameErr'];
               unset( $_SESSION['NameErr']);
               }

            ?>
            </span>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control emailErr" id="exampleInputEmail1"  name="email"  placeholder="Enter Email" aria-describedby="emailHelp">
            <span class='text-danger'>
            <?php
               if (isset( $_SESSION['emailErr'])) {
                echo "<style>
                .emailErr{
                    border: 1px solid red;
                }
                </style>";
               echo  $_SESSION['emailErr'];
               unset( $_SESSION['emailErr']);
               }

            ?>

              <?php
               if (isset( $_SESSION['ValidEmailErr'])) {
                echo "<style>
                .ValidEmailErr{
                    border: 1px solid red;
                }
                </style>";
               echo  $_SESSION['ValidEmailErr'];
               unset( $_SESSION['ValidEmailErr']);
               }

            ?>
            </span>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1"  class="form-label">Password</label>
            <input type="password" class="form-control passwordErr" name="password"  placeholder="Enter Password" id="exampleInputPassword1">
            <span class='text-danger'>
            <?php
               if (isset( $_SESSION['passwordErr'])) {
                echo "<style>
                .passwordErr{
                    border: 1px solid red;
                }
                </style>";
               echo  $_SESSION['passwordErr'];
               unset( $_SESSION['passwordErr']);
               }

            ?>
            </span>
        </div>
           <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
            <input type="password" class="form-control confirm_passwordErr " name="confirm_password"  placeholder="Enter Confirm Password" id="exampleInputPassword1">
            <span class='text-danger'>
            <?php
               if (isset( $_SESSION['confirm_passwordErr'])) {
                echo "<style>
                .confirm_passwordErr{
                    border: 1px solid red;
                }
                </style>";
               echo  $_SESSION['confirm_passwordErr'];
               unset( $_SESSION['confirm_passwordErr']);
               }

            ?>

           <?php
               if (isset( $_SESSION['ConfirmPasswordMatchErr'])) {
                echo "<style>
                .ConfirmPasswordMatchErr{
                    border: 1px solid red;
                }
                </style>";
               echo  $_SESSION['ConfirmPasswordMatchErr'];
               unset( $_SESSION['ConfirmPasswordMatchErr']);
               }

            ?>
            
            </span>
        </div> 

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
       </div>

   </div>    

</div>

   

</body>

</html>
