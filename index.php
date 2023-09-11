<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesToPlay | Home</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="shortcut icon" type="image/jpg" href="./logo/logo.png">
</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <!--Body of the website-->
    <div class="content">
        <h2 class="h2home2">TOP GAMES</h2>
        <div class="container">
            <!-- Grand Theft Auto: San Andreas -->
            <a href="https://www.metacritic.com/game/pc/grand-theft-auto-san-andreas" target="_blank">
                <div class="gtasa">
                    <h2 class="h2home" style="font-size: 2vw;">#1</h2>
                </div>
            </a>
            <div class="homegames-container">
                <?php
                include 'homegames.php';
                ?>
            </div>
        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>
    </script>
</body>

</html>