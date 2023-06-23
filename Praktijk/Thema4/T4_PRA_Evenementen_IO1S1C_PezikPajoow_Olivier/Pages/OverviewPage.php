<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 19/06/2023
 * File: OverviewPage.php
 */
//Functions toevoegen
include "../Includes/Functions.php";

//Connectie met database maken
startConnection("Evenementen");

//login check
Login();
//Page aanmaken
$Page = "../Pages/OverviewPage.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        Overview page
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    Stylesheet aanmaken-->
    <link href="../Styles/Style.css" rel="stylesheet">
</head>
<body id="OverViewBody">
<?php
//Header toevoegen
include "../Includes/Header.php";
//Query aanmaken
 $query = "SELECT * FROM activity;";
//      Search function
        if(empty($_GET["Naam"]) == false && empty($_GET["Location"]) == false)
        {
            $Name = $_GET["Naam"];
            $Location = $_GET["Location"];
            $query = "SELECT * FROM activity WHERE [name] = '$Name' AND Location LIKE '%". $Location. "%'";

        }
//        Search only name
        elseif(empty($_GET["Naam"]) == false)
        {
            $Name = $_GET["Naam"];
            $query = "SELECT * FROM activity WHERE [name] LIKE '%". $_GET['Naam']. "%'";
        }
//        Seatch only location
        elseif (empty($_GET["Location"]) == false)
        {
            $Location = $_GET["Location"];
            $query = "SELECT * FROM activity WHERE Location LIKE '%". $_GET['Location']. "%'";
        }
//        Query uitvoeren
        $result = executeQuery($query);
        $Set = 0;
//        Check of er een resultaat is
        if (empty($result->rowCount()))
        {
            $query = "SELECT * FROM activity;";
            $result = executeQuery($query);
            $Message2 = "<p>Er was niks gevonden</p>";
        }
        else
        {
            $Message2 = "";

        }
?>
<main id="wrapper">
    <section id="Background">
        <H1>
            Alle Evenementen
        </H1>
    </section>
    <section>
<!--        Search form-->
        <section id="SearchForm">
            <form action="OverviewPage.php" method="get">
                <label for="EvNaam">
                    <p>Event Naam</p>
                    <input name="Naam" autocomplete="off" type="text" value="<?Php if(isset($Name)){echo $Name;} ?>" id="EvNaam">
                </label>
                <label for="Location">
                    <p>Locatie</p>
                    <input name="Location" autocomplete="off" type="Text" value="<?Php if(isset($Location)){echo $Location;} ?>" id="Location">
                </label>
                <br>
                <?php
//                Message weergeven
                echo $Message2;
                ?>
                <input type="submit" value="Zoek" id="SubmitAdd">
            </form>
        </section>
    </section>
        <?php
//        Weergeven resultaten
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $ID = $row['ActivityID'];
//            Color sort
            if ($Set == 0)
            {
                $Set = 1;
                echo "<table class='Dark'>";
            }
            else if ($Set == 1)
            {
                echo "<table class='Light'>";
                $Set = 0;
            }
//            Informatie weergeven
            echo "<tr><td class='EvName'>".$row['Name']."</td></tr>";
            echo "<tr><td class='EvTime'>Van <span class='Time'>".substr($row['Start'],0, 16)."</span> <br id='Invis'>tot <span class='Time'>".substr($row['End'],0, 16)."</span></td></tr>";
            echo "<tr><td class='EvLocation'>Locatie: ".$row['Location']."</td></tr>";
//            Login check
            if (isset($_SESSION['Logged']) and $_SESSION['Logged'] == true)
            {
                echo "<tr><td><a class='Link' href='UpdatePage.php?ActivityId=$ID'>Bewerken</a><br><a class='Link' href='DeletePage.php?ActivityId=".$ID."' onclick='return confirm(\"Weet je zeker dat je dit Evenement wilt verwijderen?\")'>Verwijderen</a></td></tr>";
            }
            echo "</table>";
            echo "<hr>";
            }
//            Login message
        if (isset($_SESSION['Logged']) and $_SESSION['Logged'] == true) {
            if (isset($_SESSION['Message']))
            {
                $Message ="<P id='Message'>".$_SESSION['Message']."</P>";
                unset($_SESSION['Message']);
            }
            else
            {
                $Message = "";
                unset($_SESSION['Message']);
            }
//            Update form
            echo '<section id="UpdateForm">
                    <form action="AddPage.php" method="get">
                        <Legend>
                           <p>Nieuw evenement organiseren.</p>
                        </Legend>
                        <label for="EvNaam">
                            <p>Event Naam</p>
                            <input name="EvNaam" type="text" id="EvNaam" required>
                        </label>
                        <label for="Start">
                            <p>Start tijd</p>
                            <input name="Start" type="datetime-local" id="Start"  required>
                        </label>
                        <label for="Eind">
                            <p>Eind tijd</p>
                            <input name="Eind" type="datetime-local" id="Eind" required>
                            <br>
                        </label>
                        <label for="Locatie">
                            <p>Locatie</p>
                            <input name="Locatie" type="Text" id="Locatie" required>
                        </label>
                        <br>'.$Message.
                        '<input type="submit" value="Nieuw evenement aanmaken!" name="AddNew" id="SubmitAdd">
                    </form>
                </section>';
        }
        ?>
    </section>
</main>
<?php
//Footer toevoegen
Include("../Includes/Footer.php");
?>
</body>
</html>