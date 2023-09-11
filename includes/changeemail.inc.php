<?php

if (isset($_POST["changeemail"])) {
    require_once '../header.php';

    $email = $_POST["email"];
    $name = $_SESSION["useruid"];
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    
    if (invalidEmail($email) !== false) {
        header("location: ../profile.php?error=invalidemail#changeemail");
        exit();
    }
    $sql = "UPDATE users SET usersEmail='$email' WHERE usersUid='$name'";
    $_SESSION["useremail"] = $email;
    if (mysqli_query($conn, $sql)) {
        header("location: ../profile.php?error=emailchanged#changeemail");
        exit();
    } else {
        header("location: ../profile.php?error=smthwentwrong#changeemail");
        exit();
    }
}
