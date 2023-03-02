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
        echo 'Opdracht 3.1';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/Realiseren/Thema3/Hoofdstuk2/Oefening/styles/style.css" rel="stylesheet">
</head>
<body>

<?php
include "../../Includes/Header.php"
?>
<main id="wrapper">
    <?php
    include "../../Includes/Nav.php"
    ?>
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
<?php
include "../../Includes/Footer.php";
?>
</body>
</html>
