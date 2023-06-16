<?php
//ophalen id
$JokeId = $_GET["JokeId"];
//query aanmaken
$query = "DELETE FROM tblRiddles WHERE Id = $JokeId";

//includen van alle database functies
include "../../../Includes/Functions_DB.php";

startConnection("ijdb");

$rowsaffected = executeInsertQuery($query);

if($rowsaffected > 0 )
{
    echo "Succesvol verwijderd.";
} else
{
    echo "niet succesvol verwijderd";
}
?>