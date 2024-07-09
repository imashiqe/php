<?php
 require_once 'db.php';
 session_start();

 $id = $_GET ['user_id'];

 $select = "SELECT * FROM users  WHERE id = $id";
 $query =  mysqli_query($db, $select);
 $after_assoc = mysqli_fetch_assoc($query);
 $_SESSION['user_id'] = $id ;

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
    <title>From Edit</title>
</head>

<body>

<div class="full_width">
<div class="container">
       <div class="col-lg-5 m-auto">
           <h2>Edit from</h2>
       <form action="user-update.php" method="POST">
       <input type="hidden" name="id" value="<?= $after_assoc['id']?>">
       <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="name" class="form-control NameErr" id="exampleInputName" value="<?php echo $after_assoc['name']?>" placeholder="Enter Name" name="name"  aria-describedby="nameHelp">
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
            <input type="email" class="form-control emailErr" id="exampleInputEmail1" value="<?php echo $after_assoc['email']?>"  name="email"  placeholder="Enter Email" aria-describedby="emailHelp">
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

   

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button  type="submit" class="btn btn-primary">Submit</button>
    </form>
       </div>

   </div>    

</div>

   

</body>

</html>
