<?php
//Session aanmaken
session_start();

// Database variabele aanmaken
$pdo = null;

//Verbinden met database
function startConnection($database = null)
{
    global $pdo;
    // Open de database connectie en ODBC driver
    try {
        $pdo = new PDO("odbc:odbc2sqlserver");
        if ($database) {
            $pdo->query("USE $database");
        }
    } catch (PDOException $e) {
        echo "<h1>Database error:</h1>";
        echo $e->getMessage();
        die();
    }
}

//Query uitvoeren in SQL (Zoeken)
function executeQuery($sql)
{
    global $pdo;
// Uitvoeren van een SQl query
    try {
        // Query uitvoeren
        $result = $pdo->query($sql);
        return $result;
    } catch (PDOException $e) {
        header("Location:LogInPage.php");
    }
}

//Query uitvoeren in SQL (Execution)
function executeInsertQuery($query, $Form)
{
    global $pdo;

    try
    {
        $rowsAffected = $pdo->exec($query);
    }
    catch(PDOException $error)
    {
        $rowsAffected = 0;
        if ($Form = "Toevoegen")
        {
            $_SESSION['Message'] = "Er was een fout opgetreden";
            Header("Location: OverviewPage.php");
        }
        echo "<p>Er is een error opgetreden: ". $error->getMessage() . "</p>";
    }

    return $rowsAffected;
}

//Login script
function login()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['User'];
        $password = $_POST['Pass'];
        $CheckQuery = "SELECT * FROM [User] WHERE UserName = '$username' AND Password = '$password'";
        $result = executeQuery($CheckQuery);
        if ($result->fetch(PDO::FETCH_ASSOC))
        {
            $_SESSION['Logged'] = true;
            $_SESSION['Username'] = $username;
            Header("Location:../Index.php");
            unset($_SESSION['Message']);
        }
        else
            {
            Header("Location:LogInPage.php");
            $_SESSION['Message'] = 'Je wachtwoord of gebruikersnaam is verkeerd.';
        }
    }
}

//Uitloggen
function logout($Page)
{
    session_unset();
    session_destroy();
    header("Location:".$Page);
}

?>