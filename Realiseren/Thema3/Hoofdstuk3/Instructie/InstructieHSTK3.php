<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: Date
 * File: T3_REA_Oefening1.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Realiseren instructies thema 3 en 4.';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>
        <?php
        echo 'Instructies';
        ?>
    </h1>
</header>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <nav>
    </nav>
    <section>
        <h2>
            instructie.
        </h2>

        <!-- Plaats je code / uitwerking hieronder -->
        <p>
            <?php
            // variabele
            $schoolName = "Koning Willem 1 College";
            $Age = 21;
            $Bool = true;

            echo "De school waar ik op zit is ".$schoolName." < Toevoegen met punt"."<br>";
            echo "De school waarop ik zit heet: $schoolName"." < Dubbele quotes"."<br>";
            echo 'De school waarop ik zit heet: $schoolName'. " < Enkele quotes"."<br>";
            var_dump($Age);
            var_dump($schoolName);
            ?>
        </p>
    </section>
</main>
</body>
</html>

