<?php

if (isset($_POST["changepass"])) {
    require_once '../header.php';

    $pass = $_POST["password"];
    $repass = $_POST["repassword"];
    $user = $_SESSION["useruid"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php'; 

    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
    $hashedRePwd = password_hash($repass, PASSWORD_DEFAULT);
    if (pwdMatch($pass, $repass) !== false) {
        header("location: ../profile.php?error=passwordsdontmatch#changepass");
        exit();
    } 
    $sql = "UPDATE users SET usersPwd='$hashedPwd' WHERE usersUid='$user'";
    if (mysqli_query($conn, $sql)) {
        header("location: ../profile.php?error=passwordchanged#changepass");
        exit();
    } else {
        header("location: ../profile.php?error=smthwentwrong#changepass");
        exit();
    }
} 
