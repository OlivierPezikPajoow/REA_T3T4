<?php
$name = $_GET["name"];
$number = $_GET["number"];
$type1 = $_GET["type1"];
$type2 = $_GET["type2"];
$ability = $_GET["ability"];
$species = $_GET["species"];
$picture = $_GET["picture"];

$query = "INSERT INTO pokemon VALUES ('$name', '$number', '$type1', '$type2', '$ability', '$species', '$picture');";

include "../../../../Includes/Functions_DB.php";

startConnection("pokemondb");

$rowsaffected = executeInsertQuery($query);

if( $rowsaffected > 0)
{
    echo "yoepiii";
}
else
{
    echo "Nein!";
}