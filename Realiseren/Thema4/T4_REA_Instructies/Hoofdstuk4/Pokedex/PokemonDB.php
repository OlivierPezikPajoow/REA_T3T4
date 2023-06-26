<?php

include "../../../../Includes/Functions_DB.php";

startConnection("pokemondb");
?>

<form action="Pokemon_Toevoegen.php">
<fieldset>
    <legend>
        <p>Pokemon Toevoegen</p>
    </legend>
    <label for="name">
        naam
        <input type="text" name="name" id="name">
    </label>

    <br>
    <label for="number">
        nummer
        <input type="text" name="number" id="number">
    </label>

    <br>
    <label for="type1">
        type1
        <input type="text" name="type1" id="type1">
    </label>

    <br>
    <label for="type2">
        type2
        <input type="text" name="type2" id="type2">
    </label>

    <br>
    <label for="ability">
        ability
        <input type="text" name="ability" id="ability">
    </label>

    <br>
    <label for="species">
        species
        <input type="text" name="species" id="species">
    </label>

    <br>
    <label for="picture">
        picture
        <input type="text" name="picture" id="picture">
    </label>
    <input type="submit">
</fieldset>

</form>

<form method="get">
    <input name="search" type="text">
    <select name="searchType">
        <option value="all">Alle types</option>
        <?php
        $types = "SELECT DISTINCT type1 FROM pokemon;";
        $resultypes = executeQuery($types);

        while ($row = $resultypes->fetch(PDO::FETCH_ASSOC))
        {
            echo "<option>" . $row["type1"] . "</option>";

        }
        ?>
    </select>
    <input type="submit" value="zoeken">
</form>

<?php

$query = "SELECT * FROM pokemon;";

if(empty($_GET["search"]) == false && empty($_GET["searchType"]) == false && $_GET["searchType"] != "all")
{
    $searchType = $_GET["searchType"];
    $searchValue = $_GET["search"];
    $query = "SELECT * FROM pokemon WHERE type1 = '$searchType' AND [name] LIKE '%". $searchValue. "%'";

}
elseif(empty($_GET["search"]) == false)
{
    $query = "SELECT * FROM pokemon WHERE [name] LIKE '%". $_GET['search']. "%'";

}
elseif (empty($_GET["searchType"]) == false)
{
    $searchType = $_GET["searchType"];
    $query = "SELECT * FROM pokemon WHERE type1 = '$searchType'";

}

echo $query ."<br>";
$result = executeQuery($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    echo $row["number"];
    echo "<h2>" . $row["name"] . "</h2>";
    $picture = $row ["picture"];
    $pokeNumber = $row ["number"];
    echo "<img src='$picture' alt='' width='100px'>";
    echo "<br><a href='Pokemon_Update.php?pokemonId=$pokeNumber'>Bewerken</a>";
    echo "<br><a href='Pokemon_Delete.php?pokemonId=$pokeNumber'>Verwijderen</a>";
    echo "<hr>";
}
$query = "SELECT * FROM pokemon;";

?>