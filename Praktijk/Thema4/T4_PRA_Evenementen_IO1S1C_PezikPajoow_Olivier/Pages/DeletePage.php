<?php
//Functions toevoegen
include "../Includes/Functions.php";

//Login check
if (Isset($_SESSION["Logged"]) == false or $_SESSION["Logged"] == false or empty($_GEt['ActivityId']))
{
    header("Location:../Index.php");
    exit();
}

//Query aanmaken
$ID = $_GET["ActivityId"];
$query = "DELETE FROM activity WHERE ActivityID = $ID";

//Connectie met de database maken
startConnection("Evenementen");

//Query uitvoeren
$rowsaffected = executeInsertQuery($query, null);

if($rowsaffected > 0 )
{
    header("Location:OverviewPage.php");
}
else
{
    header("Location:../Index.php");

}

?>