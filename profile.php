<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesToPlay | My Profile</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/profile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="./logo/logo.png">
</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <!--Body of the website-->
    <div class="content">
        <div class="topper">
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<h2> <span> Hello there, </span>" . $_SESSION["useruid"] . "</h2>";
            } else {
                include_once './includes/functions.inc.php';
                alertYou("You are not logged in!");
                echo "<h2> Please return to the homepage. </h2>";
                exit();
            }
            ?>
        </div>
        <div class="container">
            <div class="avatar">
                <img class="avatarLogo" src="./images/avatarImage.jpg" alt="avatar">
            </div>
            <?php
            echo "<i id='itwo' class='material-icons' style ='font-size: 1.2vw;'>person</i><h2 class='avatar-title'>" . $_SESSION["useruid"] . "</h2>";
            echo "<i id='itwo' style ='cursor: context-menu; font-size: 1.2vw;' ondblclick = 'showHide()' class='material-icons' style ='font-size: 1.2vw;'>email</i><h2 id = 'showhide' class='avatar-title' >" . $_SESSION["useremail"] . "</h2>";
            echo "<i id='itwo' class='material-icons' style ='font-size: 1.2vw;'>signal_wifi_statusbar_4_bar</i><h2 id ='onoff' class='avatar-title'></h2>";
            echo "<i id='itwo' class='material-icons' style ='font-size: 1.2vw;'>star</i><h2 class='avatar-title'>Member</h2>";
            ?>
            <i id='itwo' class="material-icons" style="font-size: 1.2vw; position:absolute; margin-top: 2.5%; margin-left: 6.8%;">vpn_key</i>
            <a class="first-one" href="#changepass">
                <h2 class='reset-line'>Change password</h2>
            </a>
            <i id='itwo' class="material-icons" style="font-size: 1.2vw; position:absolute; margin-top: 2.5%; margin-left: 18.4%;">drive_file_rename_outline</i>
            <a class="second-one" href="#changename">
                <h2 class='reset-lineU'>Change username</h2>
            </a>
            <i id='itwo' class="material-icons" style="font-size: 1.2vw; position:absolute; margin-top: 2.5%; margin-left: 29.5%;">alternate_email</i>
            <a class="third-one" href="#changeemail">
                <h2 class='reset-lineE'>Change email</h2>
            </a>
        </div>
        <div class="below-container">
            <div id="changepass">
                <h2 class='avatar-title'>Change your password</h2>
                <br>
                <form action="./includes/changepass.inc.php" method="POST">
                    <div class="container-pass">
                        <label for="password"><b>New_Password</b></label>
                        <input type="password" placeholder="Enter a new password" name="password" required>
                        <label for="repeat-password"><b>Repeat‎_password‎‎</b></label>
                        <input type="password" placeholder="Enter again the password" name="repassword" required>
                        <input type="submit" name="changepass" value="Change your password">
                    </div>
                </form>
            </div>
            <div id="changename">
                <h2 class='avatar-title'>Change your username</h2>
                <br>
                <form action="./includes/changename.inc.php" method="POST">
                    <div class="container-name">
                        <label for="text"><b>New_Username</b></label>
                        <input type="text" placeholder="Enter a new username" name="username" required>
                        <input type="submit" name="changename" value="Change your username">
                    </div>
                </form>
            </div>
            <div id="changeemail">
                <h2 class='avatar-title'>Change your email</h2>
                <br>
                <form action="./includes/changeemail.inc.php" method="POST">
                    <div class="container-email">
                        <label for="text"><b>New_Email</b></label>
                        <input type="text" placeholder="Enter a new email" name="email" required>
                        <input type="submit" name="changeemail" value="Change your email">
                    </div>
                </form>
            </div>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "passwordsdontmatch") {
                echo "<h2 class='avatar-titledown'> (!) Your passwords are not the same! </h2>";
            } else if ($_GET["error"] == "smthwentwrong") {
                echo "<h2 class='avatar-titledown'> (!) Try again! </h2>";
            } else if ($_GET["error"] == "passwordchanged") {
                echo "<h2 class='avatar-titledown'> (!) You changed successfully your password! </h2>";
            }
        }
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "usernametaken") {
                echo "<h2 class='avatar-titledown'> (!) Username already taken! </h2>";
            } else if ($_GET["error"] == "usernamechanged") {
                echo "<h2 class='avatar-titledown'> (!) You changed successfully your username! </h2>";
            } else if ($_GET["error"] == "smthwentwrong") {
                echo "<h2 class='avatar-titledown'> (!) Try again! </h2>";
            }
        }
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "invalidemail") {
                echo "<h2 class='avatar-titledown'> (!) The email is incorrect! </h2>";
            } else if ($_GET["error"] == "emailchanged") {
                echo "<h2 class='avatar-titledown'> (!) Email has been sucessfully changed! </h2>";
            } else if ($_GET["error"] == "smthwentwrong") {
                echo "<h2 class='avatar-titledown'> (!) Try again! </h2>";
            }
        }
        ?>
    </div>
    <script>
        var x = navigator.onLine;
        if (x) {
            document.getElementById("onoff").innerHTML = "Online";
        } else {
            document.getElementById("onoff").innerHTML = "Offline";
        }

        function showHide() {
            var y = document.getElementById('showhide');
            if (y.style.display == "none") {
                y.style.display = "block";
            } else {
                y.style.display = "none";
            }
        }
    </script>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>