<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesToPlay | Contact Us</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/contactus.css">
    <link rel="shortcut icon" type="image/jpg" href="./logo/logo.png">
</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <!--Body of the website-->
    <div class="content">
        <h2>CONTACT US</h2>
        <br>
        <div class="container">
            <form action="./includes/contactus.inc.php" method="POST">
                <label for="fname">First Name</label>
                <input class="fname" type="text" id="fname" name="firstname" placeholder="Type your name" required>
                <label for="lname">Last Name</label>
                <input class="lname" type="text" id="lname" name="lastname" placeholder="Type your last name" required>
                <label for="mail">E-mail</label>
                <input class="mail" type="text" id="mail" name="email" placeholder="Type your mail" required>
                <label class="subject" for="subject">Subject (maximum: 500 characters)</label>
                <textarea name="subject" id="subject" placeholder="Write your problem.." style="height: 350px;"></textarea>
                <input type="submit" name="submit" value="Submit">
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<span class = 'warning-text'>You need to fill the fields!</span>";
                    } else if ($_GET["error"] == "invalidfname") {
                        echo "<span class = 'warning-text'>Choose a proper first name!</span>";
                    } else if ($_GET["error"] == "invalidlname") {
                        echo "<spanclass = 'warning-text'>Choose a proper last name!</span>";
                    } else if ($_GET["error"] == "invalidmail") {
                        echo "<span class = 'warning-text'>You need to choose a proper mail!</span>";
                    } else if ($_GET["error"] == "none") {
                        echo "<span class = 'warning-text'>Thanks for your message, we are gonna contact you on the email soon!</span>";
                    }
                }
                ?>
            </form>
        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>