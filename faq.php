<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesToPlay | FAQ</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/faq.css">
    <link rel="shortcut icon" type="image/jpg" href="./logo/logo.png">
</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <!--Body of the website-->
    <div class="content">
        <h2>QUESTIONS & ANSWERS</h2>
        <br>
        <button class="faq">Q1: What is this website and what can I find here?</button>
        <div class="panel">
            <p class="text">A: This is your number one source for Games. </p>
            <br>
            <p class="text">A: We're dedicated to giving you the very best of games recommendation, with a focus on: type of game, rating and more.</p>
        </div>
        <button class="faq">Q2: What payment methods do you accept?</button>
        <div class="panel">
            <p class="text">A: Any method of payments acceptable by you. For example: We accept MasterCard, Visa, American Express, PayPal, JCB Discover, Gift Cards, etc.</p>
        </div>
        <button class="faq">Q3: Where are you located?</button>
        <div class="panel">
            <p class="text">A: We are located in Romania, city: Campina.</p>
        </div>
        <button class="faq">Q4: How can I contact you?</button>
        <div class="panel">
            <p class="text">A: A link to a contact us form is <a href="./contactus.php">here</a>.</p>
        </div>
        <button class="faq">Q5: Who is the owner of GamesToPlay?</button>
        <div class="panel">
            <p class="text">A: The owner is Marius, you can find more about us <a href="./about.php">here</a>.</p>
        </div>
    </div>
    <script>
        var acc = document.getElementsByClassName("faq");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>