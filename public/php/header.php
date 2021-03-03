


<?php
session_start();
if(!isset($_SESSION['useruid'])){ // Redirects to login.php if not loged in
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="600;url=../../private/logout_include.php" /> <!-- end session in 600 seconds if not active -->
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/solid.css">
    <link rel="stylesheet" href="../css/brands.css">

</head>
<body>
    <div class="container">
        <div class="container--wrapper">        
            <header>
                <?php
                    if(isset($_SESSION['useruid'])){ 
                        include 'nav-mobile.php';
                    }
                    if(!isset($_SESSION['useruid'])){ 
                        include 'nav-mobile-locked.php';   
                    }
                ?>
                <div class="box-1">   
                    <div class="box-top-content">
                        <img src="../static/img/roundme-img.png" alt="profile-photo">
                        <ul>
                            <li>Details</li>
                            <li>Name: Lukasz Kolano</li>
                            <li>DOB: 28.08.1982</li>
                            <li>Location: Ireland/Dublin</li>
                        </ul>                        
                    </div>
                </div>
                <div class="box-2">
                    <div class="box-top-content social">
                        <ul>
                            <li><a href="http://www.twitter.com"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="http://www.facebook.com"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="http://www.instagram.com"><i class="fas fa-camera"></i></a></li>
                            <li><a href="contact.php"><i class="fas fa-envelope"></i></a></li>
                        </ul>                        
                    </div>
                </div>
            </header>