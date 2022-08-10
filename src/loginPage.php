<?php include('server.php') ?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login | F1Analytics</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('../images/loginBackground.jpeg');">
 
<div class="navbar"><nav>
        <ul id="menuItems">
           <li><a href="index.php" style="color: #ffffff;">Home</a></li>  
           <li><a href="about.html" style="color: #ffffff;">About</a></li>    
           <li><a href="loginPage.php"style="color: #ffffff;">Account<br></a></li>           
           </ul>
       </nav>
   </div>
    <div class="container">
        <form method ="POST" action ="loginPage.php" class="form" id="login">
            
            <h1 class="form__title" id="login_title">Login</h1>
            <?php include('errors.php'); ?>
            <?php 
                session_start(); 

                if (!isset($_SESSION['username'])) {
                    $_SESSION['msg'] = "You must log in first";
                    header('location: login.php');
                }
                if (isset($_GET['logout'])) {
                    session_destroy();
                    unset($_SESSION['username']);
                    header("location: login.php");
                }
            ?>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" name="username" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="password" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" name="login_user" type="submit">Login</button>
            
            <p class="form__text">
                <a class="form__link" href ="register.php" id="linkCreateAccount" style="color: #ffffff;">Don't have an account? Create Account</a>
            </p>
        </form>
       
    </div>
    
</body>
