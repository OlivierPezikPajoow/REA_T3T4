<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 14/02/2023
 * File: T3_REA_Oefening1.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Opdracht 2.2';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/Realiseren/Thema3/Hoofdstuk2/Oefening/styles/style.css" rel="stylesheet">
</head>
<body>
<?php
include "../../Includes/Header.php"
?>
<main id="wrapper">
    <?php
    include "../../Includes/Nav.php"
    ?>
    <section>
        <h2>
            Uitwerking.
        </h2>

        <!-- Plaats je code / uitwerking hieronder -->
        <p>
            <?php
            echo "<h1>Bunkers vol explosieve nitraatfilms: waarom worden ze bewaard?</h1>" .
                "<img id='nieuwsImage' src='/Realiseren/Thema3/Hoofdstuk2/Oefening/Images/Image_2.2.png' alt='Image nitraat'>" .
                "<p>Romances, thrillers en komedies werden vroeger allemaal gedraaid op nitraat. Het materiaal is 
                    slijtagegevoelig en extreem brandbaar, waardoor bioscopen voor 1950 regelmatig in vlammen opgingen. 
                    Nitraatfilms worden om die reden al lang niet meer afgespeeld. Maar waarom worden ze dan nog wel bewaard?
                </p>";
            ?>
        </p>
    </section>
</main>
<?php
include "../../Includes/Footer.php";
?>
</body>
</html>
