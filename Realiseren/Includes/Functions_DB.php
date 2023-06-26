<?php
$pdo = null;

function startConnection($database = null)
{
    global $pdo;
    // Open de database connectie en ODBC driver
    try
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
        if ($database)
        {
            $pdo->query("USE $database");
        }
    }
    catch (PDOException $e)
    {
        echo "<h1>Database error:</h1>";
 echo $e->getMessage();
 die();
 }

}

function executeQuery($sql)
{
    global $pdo;
// Uitvoeren van een SQl query
    try {
        // Query uitvoeren
        $result = $pdo->query($sql);
        return $result;
    } catch (PDOException $e) {
        echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
        die();
    }
}
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
function executeInsertQuery($query)
{
    global $pdo;

    try
    {
        $rowsAffected = $pdo->exec($query);
    }
    catch(PDOException $error)
    {
        $rowsAffected = 0;
        echo "<p>Er is een error opgetreden: ". $error->getMessage() . "</p>";
    }

    return $rowsAffected;
}

?>