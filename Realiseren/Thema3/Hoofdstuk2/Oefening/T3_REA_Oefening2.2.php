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
<header>
    <h1>
        <?php
        echo 'Uitwerking van PHP-oefeningen';
        ?>
    </h1>
</header>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <nav>
        <h2>Thema 3</h2>
        <ul>
            <li>
                <h3>Hoofdstuk 2:</h3>
            </li>
            <ul>
                <li>
                    <a href="/Realiseren/Thema3/Hoofdstuk2/Oefening/T3_REA_Oefening2.1.php">Oefening 2.1</a>
                </li>
                <li>
                    <a href="/Realiseren/Thema3/Hoofdstuk2/Oefening/T3_REA_Oefening2.2.php">Oefening 2.2</a>
                </li>
            </ul>
            <li>
                <h3>Hoofdstuk 3:</h3>
            </li>
            <ul>
                <li>
                    <a href="/Realiseren/Thema3/Hoofdstuk3/Oefening/T3_REA_Oefening_3_1.php">Oefening 3.1</a>
                </li>
            </ul>
        </ul>
    </nav>
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
</body>
</html>