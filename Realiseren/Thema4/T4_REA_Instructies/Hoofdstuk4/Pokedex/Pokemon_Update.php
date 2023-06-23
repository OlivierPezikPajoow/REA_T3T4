<h2>
    Pokemon Updaten
</h2>
<hr>
<?php
include "../../../../Includes/Functions_DB.php";

startConnection("pokemondb");

if(isset($_GET["Verzenden"]))
{
    $name = $_GET["name"];
    $number = $_GET["pokemonId"];
    $type1 = $_GET["type1"];
    $type2 = $_GET["type2"];
    $ability = $_GET["ability"];
    $species = $_GET["species"];
    $picture = $_GET["picture"];

    $UpdateQuery = "UPDATE pokemon SET [name] = '$name', type1 = '$type1', type2 = '$type2', ability = '$ability', 
    species = '$species', picture = '$picture' WHERE [number] = '$number';";
    echo $UpdateQuery;
    $RowsAffected = executeInsertQuery($UpdateQuery);
    if ($RowsAffected > 0)
    {
        echo "Werkt als een bus";
    }
    else
    {
        echo "Werkt voor geen kut";
    }
}

$pokemonId = $_GET["pokemonId"];


$query = "SELECT * FROM pokemon WHERE number = $pokemonId";

$result = executeQuery($query);

$record = $result->fetch(PDO::FETCH_ASSOC);
?>
<form action="Pokemon_Update.php">
<fieldset>
    <legend>
        <p>Pokemon updaten</p>
    </legend>
    <label for="name">
        naam
        <input type="text" name="name" id="name" value="<?php echo $record['name']; ?>">
    </label>

    <br>
    <label for="number">
        nummer
        <input type="text" name="pokemonId" id="number" value="<?php echo $record['number']; ?>">
    </label>

    <br>
    <label for="type1">
        type1
        <input type="text" name="type1" id="type1" value="<?php echo $record['type1']; ?>">
    </label>

    <br>
    <label for="type2">
        type2
        <input type="text" name="type2" id="type2" value="<?php echo $record['type2']; ?>">
    </label>

    <br>
    <label for="ability">
        ability
        <input type="text" name="ability" id="ability" value="<?php echo $record['ability']; ?>">
    </label>

    <br>
    <label for="species">
        species
        <input type="text" name="species" id="species" value="<?php echo $record['species']; ?>">
    </label>

    <br>
    <label for="picture">
        picture
        <input type="text" name="picture" id="picture" value="<?php echo $record['picture']; ?>">
    </label>


    <input type="submit" name="Verzenden" value="update pokemon">
</fieldset>
</form>
