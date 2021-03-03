<?php
if (isset($_POST["submit"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'database_h.php';
    require_once 'functions_h.php';

    if (emptyInputLogin($username, $password) !== false){
        header("location:../public/php/login.php?error=emptyinput");
        exit;
    }
    loginUser($conn, $username, $password);
}
else{
    header("location:../public/php/login.php");
    exit;
}