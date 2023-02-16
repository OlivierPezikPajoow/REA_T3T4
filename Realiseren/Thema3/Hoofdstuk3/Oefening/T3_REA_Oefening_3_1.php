<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 14/02/2023
 * File: T3_REA_Oefening1.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Opdracht 2.2';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/Realiseren/Thema3/Hoofdstuk2/Oefening/styles/style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>
        <?php
        echo 'Uitwerking van PHP-oefeningen';
        ?>
    </h1>
</header>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <nav>
        <h2>Thema 3</h2>
        <ul>
            <li>
                <h3>Hoofdstuk 2:</h3>
            </li>
            <ul>
                <li>
                    <a href="/Realiseren/Thema3/Hoofdstuk2/Oefening/T3_REA_Oefening2.1.php">Oefening 2.1</a>
                </li>
                <li>
                    <a href="/Realiseren/Thema3/Hoofdstuk2/Oefening/T3_REA_Oefening2.2.php">Oefening 2.2</a>
                </li>
            </ul>
            <li>
                <h3>Hoofdstuk 3:</h3>
            </li>
            <ul>
                <li>
                    <a href="/Realiseren/Thema3/Hoofdstuk3/Oefening/T3_REA_Oefening_3_1.php">Oefening 3.1</a>
                </li>
            </ul>
        </ul>
    </nav>
    <section>
        <h2>
            Uitwerking.
        </h2>
        <?php
        $feestDag = "Carnaval";
        $Dagen = "zondag, maandag en dinsdag";
        $Duur = 3;
        $vastenTijd = 40;
        $Land = "Nederland";
        $Locatie = "Noord-Brabant";
        $Catering = "Worstenbrood, koffie Schrobbeler";
        $Story = "$feestDag is van oorsprong een gekerstend heidens volksfeest. Het duurt 
                officieel $Duur dagen, $Dagen direct voorafgaand aan de 
                vastentijd van $vastenTijd dagen. $feestDag is bij uitstek het feest van zotheid, spot 
                en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel 
                $Land een gebruik om $feestDag op carnavalsvrijdag te openen. Op 
                Aswoensdag wordt $feestDag afgesloten, maar de tradities verschillen per 
                regio. In het overgrote deel van $Locatie wordt er afgesloten met 
                $Catering soms met een Brabantse koffietafel.";
        $Bonnetje1 = 20.40;
        $Bonnetje2 = 15.60;
        $Bonnetje3 = 25.19;
        $Totaal = ($Bonnetje1+$Bonnetje2+$Bonnetje3);
        $ppBedrag = (Round(($Totaal/3)*100)/100);
        echo "<p>$Story</p>";
        echo "<p>Het totaalbedrag is $Totaal</p>";
        echo "<p>Het bedrag per persoon is $ppBedrag</p>"
        ?>
    </section>
</main>
</body>
</html>
