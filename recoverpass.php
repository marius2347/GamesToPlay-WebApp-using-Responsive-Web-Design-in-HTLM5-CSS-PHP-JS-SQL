<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesToPlay | Recover Password</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/recoverpass.css">
    <link rel="shortcut icon" type="image/jpg" href="./logo/logo.png">
</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <!--Body of the website-->
    <div class="content">
        <h2>Recover your account</h2>
        <form action="./includes/recoverpass.inc.php" method="POST">
            <div class="container">
                <p class="text">Please enter your email and change your password</p>
                <br>
                <hr>
                <label for="useremail"><b>Email</b></label>
                <input type="text" placeholder="Enter your account's email" name="email" required>
                <label for="password"><b>New Password</b></label>
                <input type="password" placeholder="Enter a new password" name="password" required>
                <label for="repeat-password"><b>Repeat the new password</b></label>
                <input type="password" placeholder="Enter again the password" name="repassword" required>
                <hr>
                <input type="submit" name="changepass" value="Change your password">
            </div>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "smthwentwrong") {
                    echo "<h1 class = 'warning-text'> (!) The email doesn't exist! </h1>";
                } else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<h1 class = 'warning-text'> (!) Your passwords are not the same! </h1>";
                } else if ($_GET["error"] == "passwordchanged") {
                    echo "<h1 class = 'warning-text'> (!) You changed successfully your password! </h1>";
                } else if ($_GET["error"] == "emailnotfound") {
                    echo "<h1 class = 'warning-text'> (!) This account doesn't exist! </h1>";
                }
            }
            ?>
        </form>
    </div>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>