<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 26/03/2023
 * File: T3_REA_Oefening5.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Opdracht';
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
        <?php
        if (isset($_POST["submit"]))
            {
                echo "<h1>Uitschrijfformulier KW1C</h1>";
            }
        else
            echo "Vul wel iets in!";
        ?>
    </section>
</main>
<?php
include "../../Includes/Footer.php";
?>
</body>
</html>
