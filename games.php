<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesToPlay | Games</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/games.css">
    <link rel="stylesheet" href="./styles/allgames.css">
    <link rel="stylesheet" href="./styles/storygames.css">
    <link rel="stylesheet" href="./styles/multiplayergames.css">
    <link rel="stylesheet" href="./styles/coopgames.css">
    <link rel="stylesheet" href="./styles/simulationgames.css">
    <link rel="stylesheet" href="./styles/horrorgames.css">
    <link rel="shortcut icon" type="image/jpg" href="./logo/logo.png">
</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <!--Body of the website-->
    <div class="content">
        <div class="container">
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "";
            } else {
                include_once './includes/functions.inc.php';
                alertYou("You are not logged in!");
                echo "<h2> Please return to the homepage. </h2>";
                exit();
            }
            ?>
            <div class="links">
                <a href="#allgames">
                    <h2>ALL</h2>
                </a>
                <a href="#storygames">
                    <h2>STORY</h2>
                </a>
                <a href="#multiplayergames">
                    <h2>MULTIPLAYER</h2>
                </a>
                <a href="#coopgames">
                    <h2>CO-OP</h2>
                </a>
                <a href="#simulationgames">
                    <h2>SIMULATION</h2>
                </a>
                <a href="#horrorgames">
                    <h2>HORROR</h2>
                </a>
            </div>
        </div>
        <div class="below-container">
            <div id="allgames">
                <div class="allgames-container">
                    <?php
                    include 'storygames.php';
                    include 'multiplayergames.php';
                    include 'coopgames.php';
                    include 'simulationgames.php';
                    include 'horrorgames.php';
                    ?>
                </div>

            </div>
            <div id="storygames">
                <div class="storygames-container">
                    <?php
                    include 'storygames.php';
                    ?>
                </div>

            </div>
            <div id="multiplayergames">
                <div class="multiplayergames-container">
                    <?php
                    include 'multiplayergames.php';
                    ?>
                </div>
            </div>
            <div id="coopgames">
                <div class="coopgames-container">
                    <?php
                    include 'coopgames.php';
                    ?>
                </div>
            </div>
            <div id="simulationgames">
                <div class="simulationgames-container">
                    <?php
                    include 'simulationgames.php';
                    ?>
                </div>
            </div>
            <div id="horrorgames">
                <div class="horrorgames-container">
                    <?php
                    include 'horrorgames.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>