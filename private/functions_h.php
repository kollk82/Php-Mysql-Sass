<?php

function emptyInputSignup($username, $password, $passwordConfirm){
    $result = "";
    if (empty($username) || empty($password) || empty($passwordConfirm)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidUsername($username){
    $result ="";
    if (!preg_match('/^[a-zA-Z0-9]*$/', $username)){
        $result = true;
    } 
    else{
        $result = false;
    }
    return $result;
}
function pwdMatch($password, $passwordConfirm){
    $result ="";
    if ($password !== $passwordConfirm){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function usernameExists($conn, $username){

    $sql = "SELECT * FROM users WHERE uidUsers = ?;";  //prepared statement
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../public/php/signup.php?error=stmtfailed");
        exit;
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUser($conn, $username, $password){

    $sql = "INSERT INTO users (uidUsers, pwdUsers) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../public/php/signup.php?error=stmtfailed");
        exit;
    }
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../public/php/login.php?error=none");
    exit;
}
function emptyInputLogin($username, $password){
    $result = "";
    if (empty($username) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function loginUser($conn, $username, $password){
    $userExist = usernameExists($conn, $username);

    if ($userExist === false){
        header("location: ../public/php/login.php?error=wronglogin");
        exit;
    }
    $pwdHashed = $userExist["pwdUsers"];
    $checkPwd = password_verify($password, $pwdHashed);

    if ($checkPwd === false){
        header("location: ../public/php/login.php?error=wrongpassword");
        exit;
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $userExist["idUsers"];
        $_SESSION["useruid"] = $userExist["uidUsers"];
        header("location: ../");
        exit;
    }
}