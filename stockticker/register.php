<?php

require('db.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // insert in db
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location: register.php?register=true');
    }
    else{
        echo "Error: " . mysqli_error($conn);
        header('location: register.php?register=false');
    }
}

?>


<!doctype html>
<html>
<head>
    <title>Register Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/form.css">
    <?php  include('assets/css.php'); ?>
 </head>
<body>
    
    <div class="container">
        <div class="login-form col-md-4">
            <h1 class="title">Register Here </h1>
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
                    Register
                </button>
                </div>

                <?php if(isset($_GET['register'])){
                    echo '<div class="alert alert-success">
                        <strong>Success!</strong> You have successfully registered.
                    </div>';
                } ?>

               <br>
                <div>
                    <a href="login.php">Login</a>
                </div>
            </form>
        </div>
    </div>

    <?php  include('assets/js.php'); ?>
</body>
</html>