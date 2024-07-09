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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- css end -->
        <!-- js start -->
        <script src='js/bootstrap.min.js'></script>
        <!-- js end -->
        <title>Class 8 practice</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <form action="register.php" method="post">
                        <!-- name -->
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label">Name</label>
                            <input type="name" class="form-control" name="name" id="exampleInputName1" aria-describedby="nameHelp">
                            <!-- php start -->
                            
                            <span class="text-danger">
                            <?php
                             if (isset($_SESSION['NameErr'])){
                                echo '<style>
                                .NameErr{
                                    border: 1px solid red;
                                }
                            </style>';
                            echo $_SESSION['NameErr'];
                            unset($_SESSION['NameErr']);
                             }
                             
                            
                            ?>
                            </span>
                            
                        </div>
                        <!-- email -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- php start -->

                            <span class="text-danger">
                            <?php
                             if (isset($_SESSION['emailErr'])){
                                echo '<style>
                                .emailErr{
                                    border: 1px solid red;
                                }
                            </style>';
                            echo $_SESSION['emailErr'];
                            unset($_SESSION['emailErr']);
                             }
                             

                            
                            ?>
                            </span>
                            
                        </div>
                       <!-- password -->
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                            <!-- php start -->
                            <span class="text-danger">
                            <?php
                             if (isset($_SESSION['passwordErr'])){
                                echo '<style>
                                .passwordErr{
                                    border: 1px solid red;
                                }
                            </style>';
                            echo $_SESSION['passwordErr'];
                            unset($_SESSION['passwordErr']);
                             }
                             
                            
                            ?>
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