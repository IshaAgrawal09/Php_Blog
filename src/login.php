<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logiin page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <div style="background-color:#F0F2F5;"><?php include "header.php" ?></div>
    <div class="login-div">
        <div class="login-logo">
            <img src="./image/login.png" />
        </div>
        <div class="authentication">
            <h1 style="color: #6C63FF; text-align:center">Login</h1><br>
            <p style="font-size:1.5vw;color:red; text-align:center"> <?php echo $_SESSION['err'] ?> </p>
            <form class="loginForm" method="POST" action="controller.php">
                <input type="text" class="form-input form-gap" name="email" placeholder="Email" required>
                <br>
                <input type="password" class="form-input form-gap" name="password" placeholder="Password" required>
                <br>
                <input type="submit" name="login_button" class="btnlogin" value="Login">
                <a href="register.php">
                    <input type="button" class="btnregister" value="Register">
                </a>
                <br>
                <p style="margin-top: 4%;"><a class="adminBtn" href="adminlogin.php">Admin Login</a></p>

            </form>
        </div>
    </div>
    <?php include "footer.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="code.js"></script>
</body>

</html>