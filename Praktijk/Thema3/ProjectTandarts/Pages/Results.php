<?php

$brush = $_POST['brush'];
$cleanser = $_POST['cleanser'];
$plaque = $_POST['plaque'];
$electric = $_POST['electric'];
$fluoride = $_POST['fluoride'];
$breath = $_POST['breath'];
$scraper = $_POST['scraper'];
$blood = $_POST['blood'];
$minutes = $_POST['minutes'];
$message = null;

$total = ($brush+$cleanser+$plaque+$electric+$fluoride+$breath+$scraper+$blood+$minutes);
?>
<!DOCTYPE HTML>
<!--
    Auteur: Olivier Pezik Pajoow
    Aanmaakdatum: <5-03-2023>

    Omschrijving: Resultaten pagina gebidsgezondheidstest
-->
<html lang="nl">
<head>
    <title>
        Results Gebidsgezondheidstest
    </title>
    <!--    declaratie tekenset-->
    <meta charset="UTF-8">
    <!--    declaratie viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    link naar het CSS bestand-->
    <link rel="stylesheet" href="../Styles/Stylesheet.css">
</head>
<body>
<header>
    <a href="../Index.php"><img id="mainLogo" src="../Images/TandartsLogo.png" alt="Tandarts logo"></a>
    <nav>
        <h1>
            Resultaten Gebidsgezondheidstest
        </h1>
    </nav>
</header>
<main>
<!--    Resultaten-->
    <article id="Results">
<!--        Image resultaat-->
        <figure id="ScoreImage">
            <?php
//            If/else score check
            if ($total >= 80)
            {
                echo "<img src='../Images/GoodScore.jpg' alt='GoodScore'>";
                $message = "<h2>Je verzorgt je gebit uitstekend</h2> <p>Je hoeft niks aan te passen! Vooral zo doorgaan!</p>";
            }
            elseif ($total >=60 and $total < 80)
            {
                echo "<img src='../Images/MiddleScore.jpg' alt='MiddleScore'>";
                $message = "<h2>Je hebt je gebid goed verzorgt </h2> <p>Maar je zou meer kunnen doen om je gebit nog beter te verzorgen.</p>";
            }
            elseif ($total >=20 and $total < 60)
            {
                echo "<img src='../Images/LowScore.jpg' alt='LowScore'>";
                $message = "<h2>Je hebt je gebid matig verzorgt</h2> <p>Het is een goed idee om advies te vragen bij de tandarts, wellicht heb je al gebidsproblemen.</p>";
            }
            elseif ($total < 20)
            {
                echo "<img src='../Images/BadScore.jpg' alt='BadScore'>";
                $message = "<h2>Je verzorgt je gebid niet!</h2> <p>Ga advies vragen van de tandarts, je gaat waarschijnlijk niet naar de tandarts en hebt ook al gebidsproblemen</p>";
            }
            ?>
        </figure>
<!--        Advies message-->
        <?php
        echo "<h1>Je score was $total</h1>";
        echo $message;
        ?>
    </article>
</main>
</body>
