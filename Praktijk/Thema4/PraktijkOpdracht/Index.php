<!DOCTYPE html>
<!--
    Auteur: Olivier Pezik Pajoow
    Aanmaakdatum: <18-05-2023>

    Omschrijving:
        Homepage van Dierentehuis Den Bosch
-->
<html>
<head>
    <title>
        Dierentehuis Den Bosch
    </title>
    <!--    declaratie tekenset-->
    <meta charset="UTF-8">
    <!--    declaratie viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    link naar het CSS bestand-->
    <link rel="stylesheet" href="Styles/Stylesheet.css">
</head>
<body>
<header>
    <a href="Index.php">
        <img src="Images/DierentehuisLogo.png" alt="Logo Dierentehuis">
    </a>
    <nav>
        <ul>
            <li>
                <a href="Index.php">Over ons <span>v</span></a>
            </li>
            <li>
                <a href="Index.php">Dier gevonden</a>
            </li>
            <li>
                <a href="Index.php">Onze dieren <span>v</span></a>
            </li>
            <li>
                <a href="Index.php">Afstand doen <span>v</span></a>
            </li>
            <li>
                <a href="Index.php">Steun ons <span>v</span></a>
            </li>
            <li>
                <a href="Index.php">Vrijwilligerswerk <span>v</span></a>
            </li>
            <li>
                <a href="Index.php">Hondenpension & Dagopvang</a>
            </li>
        </ul>
    </nav>
    <a href="Pages/LogInPage.php" id="Login">
        Log In
    </a>
</header>
<main>
    <section id="Section1">
        <img src="Images/DierentehuisMain.jpg" alt="Main page">
    </section>
    <section id="Section2">
            <div id="TopPart">
                <div class="Vak">
                    <img src="Images/kat.jpg" alt="">
                    <p>Adopteer een kat</p>
                </div>
                <div class="Vak">
                    <img src="Images/hond.jpg" alt="">
                    <p>Adopteer een hond</p>
                </div>
                <div class="Vak">
                    <img src="Images/gevonden.jpg" alt="">
                    <p>Dier gevonden</p>
                </div>
            </div>
            <div id="BottomPart">
                <div class="Vak">
                    <p>Steun ons</p>
                </div>
                <div class="Vak">
                    <p>Afstand doen van huisdier</p>
                </div>
                <div class="Vak">
                    <p>Vrijwilliger worden</p>
                </div>
            </div>
    </section>
</main>
<?php
include "Include/Functions.php";
include "Include/Footer.php"
?>
</body>
</html>