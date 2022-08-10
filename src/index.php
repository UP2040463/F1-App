<?php
session_start();
if (!isset($_SESSION['username'])) { 
    $_SESSION['msg' ] = "You must log in first";
    header('location: loginPage.php');
}
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: loginPage.php");
 }
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>F1Analytics</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('../images/homeBackground.jpg');">
<div class = container_1 style="display: flex;, ">    
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3 style="color: #ffffff;">
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
            ?>
            </h3>
        </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
            <p style="color: #ffffff;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>
    </div>
    <div class="navbar"><nav>
        <ul id="menuItems">
            <li><a href="driverTeamSelect.html" style="color: #000000;">Analysis</a></li>  
            <li><a href="about.html"style="color: #000000;">About</a></li>    
            <li><a href="loginPage.php"style="color: #000000;">Account<br></a></li>           
            </ul>
        </nav>
    </div>
</div>

<h1 id="title">F1Analytics</h1>

</body>
