<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 13/03/2023
 * File: T3_REA_Oefening4.3.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Opdracht 4.3';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/Realiseren/Thema3/Hoofdstuk2/Oefening/styles/style.css" rel="stylesheet">
</head>
<body>

<?php
include "../../../Includes/Header.php"
?>
<main id="wrapper">
    <?php
    include "../../../Includes/Nav.php"
    ?>
    <section>
        <?php
        include "../../../Includes/Functions.php";
        SecondCoounter();
        ?>

    </section>
</main>
<?php
include "../../../Includes/Footer.php";
?>
</body>
</html>