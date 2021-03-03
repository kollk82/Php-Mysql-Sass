<?php
if (isset($_POST['signup-submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password-confirm'];

    require_once 'database_h.php';
    require_once 'functions_h.php';

    if (emptyInputSignup($username, $password, $passwordConfirm) !== false){
        header("location: ../public/php/signup.php?error=emptyinput");
        exit;
    }
    if (invalidUsername($username) !== false){
        header("location: ../public/php/signup.php?error=invalidusername");
        exit;
    }
    if (pwdMatch($password, $passwordConfirm) !== false){
        header("location: ../public/php/signup.php?error=nopwdmatch");
        exit;
    }
    if (usernameExists($conn, $username) !== false){
        header("location: ../public/php/signup.php?error=usernametaken");
        exit;
    }
    createUser($conn, $username, $password);
}
else{
    header("location: ../public/php/signup.php");
    exit;
}