<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 26/03/2023
 * File: T3_REA_Oefening5.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Opdracht 5.1';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/Realiseren/Thema3/Hoofdstuk2/Oefening/styles/style.css" rel="stylesheet">
</head>
<body>

<?php
include "../../../Includes/Header.php"
?>
<main id="wrapper">
    <?php
    include "../../../Includes/Nav.php"
    ?>
    <section>
    <form method="get" action="T3_REA_Oefening_5_1_Result.php">
        <p>
            <label for="voorachter">Voor en Achternaam </label> <input id="voorachter" type="text" name="VAnaam" required>
        </p>
        <p>
            <label for="nummer">Studentennummer </label> <input id="nummer" type="number" name="STnummer" required>
        </p>
        <p>
            <label for="dateuit">Datum van uitschrijving </label> <input id="dateuit" type="date" name="dateOut" required>
        </p>
        <p>
            <label for="reden">reden van uitschrijving </label>
            <select id="reden" name="reason" required>
                <option value="wrongChoice">Verkeerde keuze</option>
                <option value="change">Overstappen</option>
                <option value="work">Ik ga werken</option>
                <option value="notFun">Niet meer naar mijn zin.</option>
            </select>
        </p>
        <p>
            <label for="leerjaar">Leerjaar</label><br>
            <label><input id="leerjaar" type="radio" name="jaar" value="jaar1" required>1e leerjaar</label><br>
            <label><input id="leerjaar" type="radio" name="jaar" value="jaar2">2e leerjaar</label><br>
            <label><input id="leerjaar" type="radio" name="jaar" value="jaar3">3e leerjaar</label>
        </p>
        <p>
            <label for="inschrijving"><input id="inschrijving" name="successclass" type="checkbox" > Ik wil me inschrijven voor de successklas</label>
        </p>
        <p>
            <label for="verwijder"><input id="verwijder" name="delete" type="checkbox" > Verwijder mijn gegevens uit het systeem</label>
        </p>
        <p>
            <label for="textreden">Geef hier de redden van je uitschrijving door</label><br>
            <textarea id="textreden" required>

            </textarea>
        </p>
        <input type="submit" value="Verzenden" name="submit">
    </form>
    </section>
</main>
<?php
include "../../../Includes/Footer.php";
?>
</body>
</html>