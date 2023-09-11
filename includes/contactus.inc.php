<?php

if (isset($_POST["submit"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $mail = $_POST["email"];
    $content = $_POST["subject"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputContact($firstname, $lastname, $mail, $content) !== false) {
        header("location: ../contactus.php?error=emptyinput");
        exit();
    } 
    else if (invalidUid($firstname) !== false) {
        header("location: ../contactus.php?error=invalidfname");
        exit();
    }
    else if (invalidUid($lastname) !== false) {
        header("location: ../contactus.php?error=invalidlname");
        exit();
    }
    else if (invalidEmail($mail) !== false) {
        header("location: ../contactus.php?error=invalidmail");
        exit();
    }
    else 
    {
        $sql_store = "INSERT into contactus (firstname, lastname, email, content) VALUES ('$firstname', '$lastname', '$mail', '$content')";
        $sql = mysqli_query($conn, $sql_store) or die(mysqli_error($conn));
        header("location: ../contactus.php?error=none");
        exit();
    } 
} else {
    header("location: ../contactus.php");
    exit();
}
