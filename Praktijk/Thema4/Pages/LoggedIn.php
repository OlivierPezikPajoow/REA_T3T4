<!DOCTYPE html>
<!--
    Auteur: Olivier Pezik Pajoow
    Aanmaakdatum: <18-05-2023>

    Omschrijving:
        Homepage van Dierentehuis Den Bosch
-->
<html>
<head>
    <title>
        Dierentehuis Den Bosch
    </title>
    <!--    declaratie tekenset-->
    <meta charset="UTF-8">
    <!--    declaratie viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    link naar het CSS bestand-->
    <link rel="stylesheet" href="../Styles/Stylesheet.css">
    <!--    link naar het script-->
    <script src="../Scripts/Script.js" defer></script>
</head>
<body>

<?php
include "../Include/Header.php";
include "../Include/Functions.php";
login();

?>
<form action="LogOut.php" method="post">
    <input id="LogOut" type="submit" value="Log Out">
</form>
</body>
</html>
