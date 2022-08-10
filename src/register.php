<?php include('server.php') ?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login | F1Analytics</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="./stylesheet.css">
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
        <form method="POST" action ="register.php" class="form" id="createAccount">
            <h1 class="form__title">Create Account</h1>
            <?php include('errors.php'); ?>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" name="username" value="<?php echo $username; ?>" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" name="email" value="<?php echo $email; ?>" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" type="password" name="password_1" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" type="password" name="password_2" autofocus placeholder="Confirm Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" name="reg_user" type="submit" style="color: #ffffff;">Register</button>
            <p class="form__text">
                <a class="form__link" href ="loginPage.php" id="linkLogin" style="color: #ffffff;">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
    
</body>
