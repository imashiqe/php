<?php
 require_once "db.php";
 session_start();
  $select = "SELECT * FROM users  WHERE status = 1";   



  $query_data = mysqli_query($db, $select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>
    <title>users</title>
</head>
<body>

   <div class="container">
     <h1 class="text-center">All users</h1>
     <!-- user delete -->
     <?php
       if(isset( $_SESSION ['delete_user'])) : ?>
           <div class="alert alert-danger">
             <span>
             <?php 
             echo $_SESSION ['delete_user'];
             unset($_SESSION ['delete_user']);
             ?>
             
             </span>
           </div>
       <?php endif
     
     ?>
     <!-- user update -->
     <?php
       if(isset( $_SESSION ['update_user'])) : ?>
           <div class="alert alert-success">
             <span>
             <?php 
             echo $_SESSION ['update_user'];
             unset($_SESSION ['update_user']);
             ?>
             
             </span>
           </div>
       <?php endif ;
     
     ?>

       <table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>First Name</th>
      <th>Email </th>
    
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
     <?php
     foreach ($query_data as $key => $value) { ?>
           <tr>
      <th scope="row">1</th>
      <td> <?= $value['name'] ?></td>
      <td><?= $value['email'] ?></td>
   

      <td>
          <a href="user-edit.php?user_id=<?= $value['id'] ?>" class="btn btn-outline-primary">Edit</a>
          <a href="user-delete.php?user_id=<?= $value['id'] ?>" class="btn btn-outline-danger">Delete</a>
      </td>
   
    </tr>
    <?php
     }
     ?>
  
    
   
  </tbody>
</table>
      
   </div>
    
  

</body>
</html>