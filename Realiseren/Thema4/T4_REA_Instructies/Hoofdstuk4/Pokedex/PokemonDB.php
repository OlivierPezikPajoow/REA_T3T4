

<form>
    <input type="text" name="SearchValue">
    <input type="submit" value="Zoeken..">
</form>
<?php
include "../../../../Includes/Functions_DB.php";

//Verbinding maken met SQL database
startConnection("pokemondb");

//query aanmaken voor SQL
$query = "SELECT * FROM pokemon";
//query in een variable veranderen
if(empty($_GET["SearchValue"]) == false)
{
    $query = "SELECT * FROM pokemon WHERE [name] LIKE '%". $_GET["SearchValue"]."%'";
}
echo $query;
$result = executeQuery($query);

//door elke pokemon heen loggen
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    echo "<h2>".$row["name"]."</h2>";
    echo "<img src = ".$row['picture']." width = '100'>";
    echo "<hr>";
}
?>