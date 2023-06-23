<?php
//Functions toevoegen
include "../Includes/Functions.php";

//Connectie met database maken
StartConnection("Evenementen");

//Login check
if (Isset($_SESSION["Logged"]) == false or $_SESSION["Logged"] == false or empty($_GEt['AddNew']))
{
    header("Location:../Index.php");
    exit();
}

//Data ophalen vanuit de link
if(isset($_GET["AddNew"]))
{
$EvName = $_GET["EvNaam"];
$EvStart = date('Y-m-d H:i:s', strtotime($_GET['Start']));
$EvEnd = date('Y-m-d H:i:s', strtotime($_GET['Eind']));
$EvLocation = $_GET["Locatie"];
$Form = "Toevoegen";

//Query maken voor SQL
$UpdateQuery = "INSERT INTO activity VALUES ('$EvName','$EvStart','$EvEnd','$EvLocation')";
$RowsAffected = executeInsertQuery($UpdateQuery, $Form);

//Terug sturen naar overview
if ($RowsAffected > 0)
{
    Header("Location: OverviewPage.php");
    $_SESSION['Message'] = "Successvol toegevoegd";
}
}

?>