<?php

if(isset($_POST["changepass"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $repass = $_POST["repassword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    if (emailExists($conn, $email) === false) {
        header("location: ../recoverpass.php?error=emailnotfound");
        exit();
    }
    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
    $hashedRePwd = password_hash($repass, PASSWORD_DEFAULT);
    if (pwdMatch($pass, $repass) !== false) {
        header("location: ../recoverpass.php?error=passwordsdontmatch");
        exit();
    }
    $sql = "UPDATE users SET usersPwd='$hashedPwd' WHERE usersEmail='$email'";
    if (mysqli_query($conn, $sql)) {
        header("location: ../recoverpass.php?error=passwordchanged");
        exit();
    } else {
        header("location: ../recoverpass.php?error=smthwentwrong");
        exit();
    }
}
