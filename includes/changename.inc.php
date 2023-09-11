<?php

if (isset($_POST["changename"])) {
    require_once '../header.php';

    $email = $_SESSION["useremail"];
    $name = $_POST["username"];
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (uidExists($conn, $name, $name) !== false) {
        header("location: ../profile.php?error=usernametaken#changename");
        exit();
    }
    $sql = "UPDATE users SET usersUid='$name' WHERE usersEmail='$email'";
    $_SESSION["useruid"] = $name;
    if (mysqli_query($conn, $sql)) {
        header("location: ../profile.php?error=usernamechanged#changename");
        exit();
    } else {
        header("location: ../profile.php?error=smthwentwrong#changename");
        exit();
    }
}
