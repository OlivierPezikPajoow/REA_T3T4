<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 17/06/2023
 * File: Index.php
 */
include "Includes/Functions.php";
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>
            Homepage
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Styles/Style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <a href="Index.php"><img src="Images/CosmoLogo.png" alt="Logo van Cosmo"></a>
                <section>
                    <?php
                        if (isset($_SESSION['Logged']) and $_SESSION['Logged'] == true)
                        {
                            echo "<a href='Pages/LogOutPage.php?Page=../Index.php'>LOG OUT</a>";
                        }
                        else
                        {
                            echo "<a href='Pages/LoginPage.php'>LOG IN</a>";
                        }
                    ?>
                </section>
            </nav>
        </header>
        <main id="wrapper">
            <section id="Background">
                <H1>
                    Komende evenementen
                </H1>
            </section>
            <section id="Top3">
                <?php
                startConnection("Evenementen");
                $query = "SELECT TOP 3 * FROM activity ORDER by start;";
                $result = executeQuery($query);
                $Set = 0;
                while ($row = $result->fetch(PDO::FETCH_ASSOC))
                {
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
                    echo "<tr><td class='EvName'>".$row['Name']."</td></tr>";
                    echo "<tr><td class='EvTime'>Van <span class='Time'>".substr($row['Start'],0, 16)."</span><br id='Invis'> tot <span class='Time'>".substr($row['End'],0, 16)."</span></td></tr>";
                    echo "<tr><td class='EvLocation'>Locatie: ".$row['Location']."</td></tr>";
                    echo "</table>";
                    echo "<hr>";
                }
                ?>
                <a class="Link" href="Pages/OverviewPage.php">View All</a>
            </section>
        </main>
        <?php
            Include("Includes/Footer.php")
        ?>
    </body>
</html>