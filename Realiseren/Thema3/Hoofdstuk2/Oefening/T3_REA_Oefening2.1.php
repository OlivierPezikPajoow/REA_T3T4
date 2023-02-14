<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 10/02/2023
 * File: T3_REA_Oefening1.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Opdracht 2.1';
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
                    <a href="/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.1.php">Oefening 2.1</a>
                </li>
                <li>
                    <a href="/Realiseren/Thema3/Hoofdstuk2/Oefening/T3_REA_Oefening2.1.php">Oefening 2.2</a>
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
            echo "PHP is een serverside programmeer taal, dit houd in dat alles op de webserver gedaan wordt, zo zie je op jouw client niks
            terug van wat er op de server is geschreven. Zo kun je via PHP een database oproepen en deze in leesbaar HTML weergeven.";

            echo "<h1>Git & Github</h1>";
            echo "Github is een plek waar programmeurs hun programma's kunnen opslaan en delen, via GIT worden hun programma's geupload naar hun
            account. Telkens als ze iets veranderen aan hun code kunnen ze hun code committen, zo wordt de code opgeslagen, als je je code naarna
            pusht dan wordt het geupload naar je git en kan je het vervolgens zien in je repository.";
            /*
             echo zorgt ervoor dat wat je in een PHP onderdeel zet alsnog zichbaar is op de webpagina, via HTML.
             */
            ?>
        </p>
    </section>
</main>
</body>
</html>

