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
    <form action="Enquete.php" method="post">
        <label><h3>Hoe vaak poets je per dag?</h3></label><br>
        <label><input type="radio" name="brush" value="10" >2 of meer keer per dag</label><br>
        <label><input type="radio" name="brush" value="5" >1 keer per dag</label><br>
        <label><input type="radio" name="brush" value="-10" >Minder dan 1 keer per dag</label><br>

        <label><h3>Gebruik je na iedere maaltijd of minimaal 1 keer per dag?</h3></label><br>

    </form>
</main>
</html>
