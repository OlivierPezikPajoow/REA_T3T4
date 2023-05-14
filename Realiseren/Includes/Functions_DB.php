<?php

function riddles()
{
    try
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
    }
    catch (PDOException $e)
    {
        // Bij een error, toon dan deze melding
        echo "<h1>Database error:</h1>";
        echo $e->getMessage();
        // Stop het script
        die();
    }
    echo "database connectie gelukt<br>";
// Uitvoeren van een SQl query

    try
    {
        // Query schrijven
        $sql = "SELECT * FROM tblRiddles";
        // Query uitvoeren
        $result = $pdo->query($sql);
    }
    catch (PDOException $e)
    {
        // Bij een error, toon dan deze melding
        echo "Er is een probleem met ophalen van tblRiddles: " . $e->getMessage();
        // Stop het script
        die();
    }
// Door de results heen loopen via een while
    while ($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        echo "ID: " . $row["Id"] . "<br>";
        echo "Raadsel: " . $row["RiddleText"] . "<br>";
        echo "Oplossing: " . $row["RiddleAnswer"] . "<br>";
        echo "Bedenker:" . $row["Creator"] . "<br>";
        echo "Datum: " . $row["CreateDate"] . "<br>";
        echo "<hr>";
    }
}

function pokemon()
{
    try
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
    }
    catch (PDOException $e)
    {
        // Bij een error, toon dan deze melding
        echo "<h1>Database error:</h1>";
        echo $e->getMessage();
        // Stop het script
        die();
    }
    echo "database connectie gelukt<br>";
// Uitvoeren van een SQl query

    try
    {
        $sql = "SELECT * FROM pokemon";
        // Query uitvoeren
        $result = $pdo->query($sql);
    }
    catch (PDOException $e)
    {
        // Bij een error, toon dan deze melding
        echo "Er is een probleem met ophalen van pokemon: " . $e->getMessage();
        // Stop het script
        die();
    }
    while ($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        echo "name " . $row["name"] . "<br>";
        echo "number: " . $row["number"] . "<br>";
        echo "type1: " . $row["type1"] . "<br>";
        echo "type2:" . $row["type2"] . "<br>";
        echo "ability: " . $row["ability"] . "<br>";
        echo "<hr>";
    }
}
?>