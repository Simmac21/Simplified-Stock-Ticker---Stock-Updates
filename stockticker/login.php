<?php

require('db.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // user login db
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);    
        if($result){
            $row = mysqli_fetch_array($result);
            if($row){
                session_start();
                $_SESSION['username'] = $row['username'];
                $_SESSION['userid'] = $row['id'];
                header("location: index.php");
            }
            else {
                header('location: login.php?login=false');
            }
        }
    }
    else{
        echo "Error: " . mysqli_error($conn);
    }

?>


<!doctype html>
<html>
<head>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/form.css">
    <?php  include('assets/css.php'); ?>
 </head>
<body>
    
    <div class="container">

    <div class="text-center mt-4">
        <h1> Stock Ticker Application </h1>
    </div>


        <div class="login-form col-md-4">
            <h1 class="title">Login Here </h1>
            <form action="<?php $_SERVER["PHP_SELF"]; ?>" method='POST'>
            <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name='username' class="form-control">
                </div>
                <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" name='password' class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" name='submit'>
                        <i class="fa fa-sign-in"></i> 
                        Login
                    </button>
                </div>

                <?php
                    if(isset($_GET['login'])){
                        if($_GET['login'] == 'false'){
                            echo '<div class="alert alert-danger" role="alert"><strong>Error: </strong> Username or Password is incorrect.</div>';
                        }
                    }
                ?>

                <div>
                    <a href="register.php" >Register</a>
                </div>
            </form>            
        </div>
    </div>

    <?php  include('assets/js.php'); ?>

</body>
</html>