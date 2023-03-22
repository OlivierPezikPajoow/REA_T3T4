<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Instructie Login';
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
        <form action="Result.php" method="post">
            <label for = "Username">Username: <input id="Username" name="User" type="text" required></label> <br><br>
            <label for = "Password">Password: <input id="Password" name="Pass" type="password" required></label> <br><br>
            <input type="submit" value="Login">
        </form>
    </section>
</main>
<?php
include "../../../Includes/Footer.php";
?>
</body>
</html>