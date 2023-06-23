<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 19/06/2023
 * File: OverviewPage.php
 */
include "../Includes/Functions.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        Login Page
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    Stylesheet toevoegen-->
    <link href="../Styles/Style.css" rel="stylesheet">
</head>
<body id="LogInbody">
<?php
//Current page
$Page = "/Pages/LoginPage.php";

//Header toevoegen
include "../Includes/Header.php";

//Login check
if (Isset($_SESSION['Logged']) and $_SESSION['Logged'] == true)
{
    header("location:OverviewPage.php");
    exit();
}
?>
<main id="wrapper">
<!--    Main image-->
    <section id="Background">
        <H1>
            Login
        </H1>
    </section>
<!--    Login form-->
    <form id="LogInForm" action="OverviewPage.php" method="post">
        <label for = "Username">
            <p>Username: </p>
            <input id="Username" name="User" type="text" required></label>
        <label for = "Password">
            <p>Password: </p>
            <input id="Password" name="Pass" type="password" required></label>
        <?php
//        Message check
        if (isset($_SESSION['Message']) and $_SESSION['Message'] == true)
        {
            echo "<p id='WrongLogin'>".$_SESSION['Message']."</p>";
            unset($_SESSION['Message']);
        }
        ?>
        <br>
        <input type="submit" value="Login">
    </form>
</main>
<?php
//Footer toevoegen
Include("../Includes/Footer.php")
?>
</body>
</html>