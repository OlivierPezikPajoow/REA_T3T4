<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 14/05/2023
 * File: T4_REA_Oefening2.1.php
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
include "../../../Includes/Header.php"
?>
<main id="wrapper">
    <?php
    include "../../../Includes/Nav.php";

    include "../../../Includes/Functions_DB.php";
    pokemon();
    ?>
</main>
<?php
include "../../../Includes/Footer.php";
?>
</body>
</html>
