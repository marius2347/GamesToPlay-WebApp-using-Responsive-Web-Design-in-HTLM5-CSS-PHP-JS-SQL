<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesToPlay | Login</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="shortcut icon" type="image/jpg" href="./logo/logo.png">
</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <!--Body of the website-->
    <div class="content">
        <h2>Login your account</h2>
        <form action="./includes/login.inc.php" method="POST">
            <div class="container">
                <p class="text">Please put your personal data</p>
                <p class="textMobile">Log In</p>
                <br>
                <hr>
                <label for="useremail"><b>Username or Email</b></label>
                <input type="text" placeholder="Enter username or email" name="uid" required>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter your password" name="password" required>
                <hr>
                <input type="submit" name="login" value="Login">
                <p class="text-bottom"> <a href="./recoverpass.php">Forgot your password?</a></p>
            </div>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<h1 class = 'warning-text'> (!) Complete all the fields to login! </h1>";
                } else if ($_GET["error"] == "wronglogin") {
                    echo "<h1 class = 'warning-text'> (!) Incorrect login information! </h1>";
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