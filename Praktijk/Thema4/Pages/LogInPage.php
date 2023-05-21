<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 20/05/2023
 * File: LoginPage.php
 */
?>
    <!DOCTYPE html>
    <!--
        Auteur: Olivier Pezik Pajoow
        Aanmaakdatum: <20-05-2023>

        Omschrijving:
            Homepage van Dierentehuis Den Bosch
    -->
    <html>
    <head>
        <title>
            Dierentehuis Den Bosch Log In
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
    <?php
    include "../Include/Header.php";
    include "../Include/Functions.php";
    if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
        header("Location: LoggedIn.php");
    }
    ?>
    <body>
    <main>
        <form id="LogInForm" action="LoggedIn.php" method="post">
            <label for = "Username">Username: <input id="Username" name="User" type="text" required></label> <br><br>
            <label for = "Password">Password: <input id="Password" name="Pass" type="password" required></label> <br><br>
            <input type="submit" value="Login">
        </form>
    </main>
    <?php
    include "../Include/Footer.php"
    ?>
    </body>
</html>
