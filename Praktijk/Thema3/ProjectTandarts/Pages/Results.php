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

$total = ($brush+$cleanser+$plaque+$electric+$fluoride+$breath+$scraper+$blood+$minutes);
?>
<!DOCTYPE HTML>
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
    <img id="mainLogo" src="../Images/TandartsLogo.png" alt="Tandarts logo">
    <nav>
        <h1>
            Resultaten Gebidsgezondheidstest
        </h1>
    </nav>
</header>
<main>
    <article id="Results">
        <figure id="ScoreImage">
            <?php
            if ($total >= 80)
            {
                echo "<img src='../Images/GoodScore.jpg' alt='GoodScore'>";
            }
            elseif ($total >=60 and $total < 80)
            {
                echo "<img src='../Images/MiddleScore.jpg' alt='MiddleScore'>";
            }
            elseif ($total >=20 and $total < 60)
            {
                echo "<img src='../Images/LowScore.jpg' alt='LowScore'>";
            }
            elseif ($total < 20)
            {
                echo "<img src='../Images/BadScore.jpg' alt='BadScore'>";
            }
            ?>
        </figure>
        <?php
        echo "<h1>Uw score was $total</h1>"
        ?>
    </article>
</main>
</body>
