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
        Dierentehuis Den Bosch Admin
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
$Vrijwilligers = array
(
    array
    (
        "Eliene Holla", "06-44662246", "ElieneHolla@outlook.com", "verzorging honden"
    ),
    array
    (
        "Philip Boekholt", "06-82528319", "PhilipBoekholt@outlook.com", "verzorging katten"
    ),
    array
    (
        "Selami Meulenbroeks", "06-56109212", "SelamiMeulenbroeks@gmail.com","verzorging honden"
    ),
    array
    (
        "Semira Trines", "06-89084537", "SemiraTrines@yahoo.com", "verzorging katten, gastgezin kat"
    ),
    array
    (
        "Christian Kroos", "06-28868799", "ChristianKroos@hotmail.nl","gastgezin kat"
    ),
    array
    (
        "Doede Smeulders", "06-86217996", "ChristianKroos@hotmail.nl", "verzorging honden, gastgezin hond"
    ),
    array
    (
        "Siebren Breukers", "06-94192111", "SiebrenBreukers@yahoo.com", "gastgezin hond"
    ),
    array
    (
        "Jouke Walhout", "06-93561432","JoukeWalhout@gmail.com", "verzorging katten"
    ),
    array
    (
        "Hossein Waterman", "06-44303878", "HosseinWaterman@outlook.com", "gastgezin kat"
    ),
    array
    (
        "Lilia van Antwerpen", "06-99685607", "LiliavanAntwerpen@hotmail.nl", "gastgezin hond"
    ),
    array
    (
        "Allal Poelsma" , "06-38560634", "AllalPoelsma@ziggo.nl", "gastgezin hond"
    ),
    array
    (
        "Bouke Haalboom", "06-87883016", "BoukeHaalboom@yahoo.com", "gastgezin kat"
    ),
    array
    (
        "Dio Bramer", "06-79615938", "DioBramer@ziggo.nl", "verzorging katten, gastgezin kat"
    ),
    array
    (
        "Linda Butter", "06-28317272", "LindaButter@ziggo.nl", "gastgezin hond"
    ),
    array
    (
        "Jorian de Bot", "06-88546197", "JoriandeBot@ziggo.nl", "verzorging honden, gastgezin hond"
    )
);
?>
<main>
    <form action="LogOut.php" method="post">
        <input id="LogOut" type="submit" value="Log Out">
    </form>
    <table id="VrijwilligersTabel">
        <tr>
            <td>
                <p>Naam</p>
            </td>
            <td>
                <p>Telefoonnummer</p>
            </td>
            <td>
                <p>e-Mailadres</p>
            </td>
            <td>
                <p>Werkzaamheden</p>
            </td>
        </tr>
        <?php
        for($i=0;$i<count($Vrijwilligers);$i++) {
            echo('<tr>');
            echo('<td class="vName">' . $Vrijwilligers[$i][0] . '</td>');
            echo('<td class="vNumber">' . $Vrijwilligers[$i][1] . '</td>');
            echo('<td class="vEmail">' . $Vrijwilligers[$i][2] . '</td>');
            echo('<td class="vTask">' . $Vrijwilligers[$i][3] . '</td>');
            echo('</tr>');
        }
        ?>
    </table>
</main>
<?php
include "../Include/Footer.php"
?>
</body>
</html>
