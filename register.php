<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesToPlay | Join now!</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/register.css">
    <link rel="shortcut icon" type="image/jpg" href="./logo/logo.png">
</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <!--Body of the website-->
    <div class="content">
        <h2>Join our community</h2>
        <form action="./includes/signup.inc.php" method="POST">
            <div class="container">
                <p class="text">Please fill in this form to create an account</p>
                <br>
                <hr>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter a username" name="username" required>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter a email" name="email" required>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter a password" name="password" required>
                <label for="password-repeat"><b>Repeat password</b></label>
                <input type="password" placeholder="Repeat the password" name="password-repeat" required>
                <hr>
                <p class="text">By creating an account you agree to our <a href="../termsofuse.php">Terms</a> & <a href="../pages/privacypolicy.php">Privacy</a>.</p>
                <br>
                <input type="submit" name="register" value="Register">
                <p class="text-bottom">Already have an account? <a href="./login.php"> Log in</a>.</p>
            </div>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<h1 class = 'warning-text'> (!) Complete all the fields to register! </h1>";
                } else if ($_GET["error"] == "invaliduid") {
                    echo "<h1 class = 'warning-text'> (!) Choose a proper username! </h1>";
                } else if ($_GET["error"] == "invalidemail") {
                    echo "<h1 class = 'warning-text'> (!) Choose a proper email! </h1>";
                } else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<h1 class = 'warning-text'> (!) Passwords doesn't match! </h1>";
                } else if ($_GET["error"] == "stmtfailed") {
                    echo "<h1 class = 'warning-text'> (!) Something went wrong, try again! </h1>";
                } else if ($_GET["error"] == "usernametaken") {
                    echo "<h1 class = 'warning-text'> (!) Username / email already taken! </h1>";
                } else if ($_GET["error"] == "none") {
                    echo "<h1 class = 'warning-text'> Congratulations, you have signed up! </h1>";
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