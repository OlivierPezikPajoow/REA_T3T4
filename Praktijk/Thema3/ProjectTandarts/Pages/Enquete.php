<!DOCTYPE html>
<html lang="nl">
<head>
<title>
    TANDARTS DEN BOSCH
</title>
<!--    declaratie tekenset-->
<meta charset="UTF-8">
<!--    declaratie viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    link naar het CSS bestand-->
<link rel="stylesheet" href="../Styles/Stylesheet.css">
</head>
<body>
<header>
    <img id="mainLogo" src="../Images/TandartsLogo.png" alt="Tandarts logo">
    <nav>
        <h1>
            Gebidsgezondheidstest
        </h1>
    </nav>
</header>
<main>
    <form action="Results.php" method="post">
        <label><h3>Hoe vaak poets je per dag?</h3></label><br>
        <label><input type="radio" name="brush" value="10" >2 of meer keer per dag</label><br>
        <label><input type="radio" name="brush" value="5" >1 keer per dag</label><br>
        <label><input type="radio" name="brush" value="-10" >Minder dan 1 keer per dag</label><br>

        <label><h3>Gebruik je na iedere maaltijd of minimaal 1 keer per dag? om je gebit te extra te reinigen.</h3></label><br>
        <label><input type="radio" name="cleanser" value="10" >Rager</label><br>
        <label><input type="radio" name="cleanser" value="5" >Tandenstoker</label><br>
        <label><input type="radio" name="cleanser" value="-10" >Niks</label><br>

        <label><h3>Ga je ieder halfjaar naar een mondhygieniste om je tandplak te laten verwijderen?</h3></label><br>
        <label><input type="radio" name="plaque" value="10" >Ja</label><br>
        <label><input type="radio" name="plaque" value="5" >Minder dan 1x per jaar</label><br>
        <label><input type="radio" name="plaque" value="-10" >Nee</label><br>

        <label><h3>Gebruik je een electrische tandenborstel?</h3></label><br>
        <label><input type="radio" name="electric" value="10" >Ja</label><br>
        <label><input type="radio" name="electric" value="5" >Nee</label><br>

        <label><h3>Gebruik je een tandpasta met fluoride?</h3></label><br>
        <label><input type="radio" name="fluoride" value="10" >Ja</label><br>
        <label><input type="radio" name="fluoride" value="5" >Nee</label><br>

        <label><h3>Heb je wel eens last van een stinkende adem?</h3></label><br>
        <label><input type="radio" name="breath" value="10" >Ja</label><br>
        <label><input type="radio" name="breath" value="5" >Nee</label><br>

        <label><h3>Gebruik je wel eens een tongschraper?</h3></label><br>
        <label><input type="radio" name="scraper" value="10" >Ja</label><br>
        <label><input type="radio" name="scraper" value="5" >Nee</label><br>

        <label><h3>Heb je weleens last van bloedend tandvlees?</h3></label><br>
        <label><input type="radio" name="blood" value="10" >Ja</label><br>
        <label><input type="radio" name="blood" value="5" >Nee</label><br>

        <label><h3>Poets je minimaal 2 minuten en werk je alles grondig af?</h3></label><br>
        <label><input type="radio" name="minutes" value="10" >Ja</label><br>
        <label><input type="radio" name="minutes" value="5" >Nee</label><br>
        <br>
        <input type="submit">
    </form>
</main>
</html>
