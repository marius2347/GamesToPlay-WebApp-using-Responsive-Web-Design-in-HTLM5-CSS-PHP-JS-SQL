<?php
session_start();
?>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/print.css" type="text/css" media="print">
</head>
<!--Head of the website-->
<div class="header" id="myHeader">
    <nav class="nav-Left">
        <ul class="nav-linksL">
            <li><a class="nav-linkL" href="./games.php#allgames">GAMES</a></li>
            <li><a class="nav-linkM" href="./games.php#allgames"><i class='material-icons'>games</i></a></li>
            <li><a class='nav-linkM' href="./about.php"><i class='material-icons'>description</i></a></li>
            <li><a class='nav-linkM' href="./faq.php"><i class='material-icons'>quiz</i></a></li>
            <li><a class="nav-linkL" href="https://store.steampowered.com/" target="_blank">STEAM</a></li>
            <li><a class="nav-linkL" href="./about.php">ABOUT</a></li>
            <li><a class="nav-linkL" href="./faq.php">FAQ</a></li>
        </ul>
    </nav>
    <nav class="nav-Center">
        <ul class="nav-linksC">
            <li><a class="nav-linkC" href="./index.php">GamesToPlay</a></li>
        </ul>
    </nav>
    <nav class="nav-Right">
        <ul class="nav-linksR">
            <li>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a class='nav-linkRS' href='./profile.php'><i class='material-icons'>person</i>" . $_SESSION["useruid"] . "</a></li>";
                    echo "<li><a class='nav-linkRMM' href='./profile.php'><i class='material-icons'>person</i> </a></li>";
                    echo "<li><a class='nav-linkRC' href='https://www.instant-gaming.com/en/' target='_blank'><i class='material-icons'>shop</i></a></li>";
                    echo "<li><a class='nav-linkRC' href='./includes/logout.inc.php'><i class='material-icons'>logout</i></a></li>";
                } else {
                    echo "<li><a class='nav-linkR' href='./register.php'><i class='material-icons'>assignment_ind</i></a></li>";
                    echo "<li><a class='nav-linkR' href='https://www.instant-gaming.com/en/' target='_blank'><i class='material-icons'>shop</i></a></li>";
                    echo "<li><a class='nav-linkR' href='./login.php'><i class='material-icons'>login</i></a></li>";
                }

                ?>
            </li>
        </ul>
    </nav>
</div>
<script>
    // Atunci cand dau scroll la pagina, se apeleaza aceasta functie
    window.onscroll = function() {
        myFunction()
    };
    // Preiau frame-ul cu header de mai sus intr-o variabila
    var header = document.getElementById("myHeader");
    // Preiau pozitia la header intr-o variabila
    var sticky = header.offsetTop;
    // Creez functia 
    function myFunction() {
        if (window.pageYOffset > sticky) { // daca dau pozitia e mai mare decat pozitia initiala (adica ai dat scroll), atunci ii adaug clasa sticky, adica sa fie nemiscata
            header.classList.add("sticky");
        } else { // altfel ii scot clasa stick, deoarece este la pozitia initiala
            header.classList.remove("sticky");
        }
    }
</script>