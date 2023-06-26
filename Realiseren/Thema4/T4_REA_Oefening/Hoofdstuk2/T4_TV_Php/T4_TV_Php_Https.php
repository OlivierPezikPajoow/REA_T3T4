<?php
/**
 * User: Jelle de Bie
 * Date: 12-05-2023
 * File: T3_REA_Oefening2_1.php
 */
?>
    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <title>
            <?php
            echo 'Realiseren Oefeningen 2.1';
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
            echo 'Uitwerking van PHP-Oefeningen';
            ?>
        </h1>
    </header>
    <?php
    //Hier gaan we in het volgende hoofdstuk het menu toevoegen.
    ?>
    <main id="wrapper">
        <?php
        include "../../../../Includes/Nav.php";
        ?>
        <section>
            <fieldset>
                <legend>Zoekopdrachten:</legend>
                <i>Tip: Laat een veld leeg, dan zal er niet op gezocht worden.</i>
                <br><br>
                <form action='T4_TV_Php_Https.php' method='get'>
                    <label for="txtRiddleText">Raadsel:</label>
                    <input type="text" name="txtRiddleText">
                    <br><br>
                    <label for='txtCreator'>Maker:</label>
                    <input type='text' name='txtCreator'>
                    <br><br>
                    <input type='submit' value='Versturen'>
                </form>
            </fieldset>
            <?php
            // Laad alle database gerelateerde functions in.
            include("../../../../Includes/Functions_DB.php");

            // Start een connectie met de database
            startConnection("ijdb");

            // Maak een variabele met de SQL query
            $query = "SELECT * FROM tblRiddles";
            if(empty($_GET["txtCreator"]) == false)
            {
                $query = "SELECT * FROM tblRiddles WHERE [Creator] LIKE '%". $_GET["txtCreator"]."%'";
            }
            if(empty($_GET["txtRiddleText"]) == false)
            {
                $query = "SELECT * FROM tblRiddles WHERE [RiddleText] LIKE '%". $_GET["txtRiddleText"]."%'";
            }
            if(empty($_GET["txtRiddleText"]) == false and(empty($_GET["txtCreator"]) == false))
            {
                $query = "SELECT * FROM tblRiddles WHERE [RiddleText] LIKE '%". $_GET["txtRiddleText"]."%' AND [Creator] LIKE '%". $_GET["txtCreator"]."%'";
            }
            // Taak 4: Programmeer hieronder je code

            // Voer de geschreven SQL query uit op de database
            // Vang daarna het resultaat in de variabele $result
            $result = executeQuery($query);
            echo $query;
            echo "<table>";
            echo "<tr>";
            echo "<th>ID:</th>";
            echo "<th>Raadsel:</th>";
            echo "<th>Oplossing:</th>";
            echo "<th>Bedenker:</th>";
            echo "<th>Datum:</th>";
            echo "</tr>";
            // Door de results heen loopen via een while
            while ($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                echo "<tr>";
                echo "<td>". $row["Id"] . "</td>";
                echo "<td>". $row["RiddleText"] . "</td>";
                echo "<td>". $row["RiddleAnswer"] . "</td>";
                echo "<td>". $row["Creator"] . "</td>";
                echo "<td>". $row["CreateDate"] . "</td>";
                echo "</tr>";
            }
            echo "</tr>";
            echo "</table>";
            ?>

        </section>
    </main>
    <?php
    include "../../../../Includes/Footer.php";
    ?>
    </body>
    </html>
<?php
