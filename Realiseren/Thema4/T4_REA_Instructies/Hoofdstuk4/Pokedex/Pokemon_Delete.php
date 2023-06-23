<?php
//ophalen id
$pokemonId = $_GET["pokemonId"];
//query aanmaken
$query = "DELETE FROM pokemon WHERE number = $pokemonId";

//includen van alle database functies
include "../../../../Includes/Functions_DB.php";

startConnection("pokemondb");

$rowsaffected = executeInsertQuery($query);

if($rowsaffected > 0 )
{
    echo "Succesvol verwijderd.";
} else
{
    echo "niet succesvol verwijderd";
}
?>