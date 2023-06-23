<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 19/06/2023
 * File: OverviewPage.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        Overview page
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    Stylesheet toevoegen-->
    <link href="../Styles/Style.css" rel="stylesheet">
</head>
<body id="OverViewBody">
<?php
//Functions toevoegen
include "../Includes/Functions.php";

//Page aanmaken
$Page = "../Pages/OverviewPage.php";
//Login check / Full link check
if (Isset($_SESSION["Logged"]) == false or $_SESSION["Logged"] == false or empty($_GET['ActivityId']))
{
    header("Location:../Index.php");
    exit();
}
//Connectie met database maken
startConnection("Evenementen");

//Header toevoegen
include "../Includes/Header.php";

//Message check
if (isset($_SESSION['Message'])) {
    $Message = "<P id='Message'>" . $_SESSION['Message'] . "</P>";
    unset($_SESSION['Message']);
} else {
    $Message = "";
    unset($_SESSION['Message']);
}

//Update check, als er een update moet worden gemaakt
if(isset($_GET["Update"]))
{
    $EvNumber = $_GET["ActivityId"];
    $EvName = $_GET["EvNaam"];
    $EvStart = date('Y-m-d H:i:s', strtotime($_GET['Start']));
    $EvEnd = date('Y-m-d H:i:s', strtotime($_GET['Eind']));
    $EvLocation = $_GET["Locatie"];

//    Update query aanmaken
    $UpdateQuery = "UPDATE activity SET [Name] = '$EvName', [Start] = '$EvStart', [End] = '$EvEnd', Location = '$EvLocation' WHERE ActivityID = '$EvNumber'";

//    Query uitvoeren
    $RowsAffected = executeInsertQuery($UpdateQuery, "Update");

//    Pagina opnieuw laden
    if ($RowsAffected > 0)
{
    Header("Location: UpdatePage.php?ActivityId=$EvNumber");
    $_SESSION['Message'] = "Successvol Bewerkt";
}
}

$EvNumber = $_GET["ActivityId"];

//Query maken
$query = "SELECT * FROM activity WHERE ActivityID = $EvNumber";

//Query uitvoeren
$result = executeQuery($query);

//Query ophalen
$record = $result->fetch(PDO::FETCH_ASSOC);

?>
<main id="wrapper">
    <section id="Background">
        <H1>
            Updaten
        </H1>
    </section>
    <section>
<!--        Update formulier-->
        <section id="UpdateForm">
            <form action="UpdatePage.php" method="get">
                <Legend>
                    <p>Nieuw evenement organiseren.</p>
                </Legend>
                <input type = "hidden" name = "ActivityId" value = "<?php echo $record['ActivityID']; ?>" />
                <label for="EvNaam">
                    <p>Event Naam</p>
                    <input name="EvNaam" type="text" id="EvNaam" value="<?php echo $record['Name']; ?>" required>
                </label>
                <label for="Start">
                    <p>Start tijd</p>
                    <input name="Start" type="datetime-local" id="Start" value="<?php echo $record['Start']; ?>" required>
                </label>
                <label for="Eind">
                    <p>Eind tijd</p>
                    <input name="Eind" type="datetime-local" id="Eind" value="<?php echo $record['End']; ?>" required>
                    <br>
                </label>
                <label for="Locatie">
                    <p>Locatie</p>
                    <input name="Locatie" type="Text" id="Locatie" value="<?php echo $record['Location']; ?>" required>
                </label>
                <br>
                <?php
//                Message weergeven
                echo $Message;
                ?>
                <input type="submit" name="Update" value="Evenement aanpassen!" id="SubmitAdd">
            </form>
        </section>
    </section>
</main>
<?php
//Footer toevoegen
Include("../Includes/Footer.php")
?>
</body>
</html>