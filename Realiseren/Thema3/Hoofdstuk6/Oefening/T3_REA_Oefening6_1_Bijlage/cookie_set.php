<?php

    // Is er een POST value "txtUsername" opgegeven?
    if( isset($_POST["txtUsername"]) == true)
    {
        //  opdracht 1: Programmeer hieronder (via cookieset) een cookie met de volgende eisen:
        //   Expiration date: over 356 dagen (1 jaar)
        //   Naam: userUsernameCookie
        //   Value: $_POST["txtUsername"]
		//   Path:  "/"
        setcookie("userUsernameCookie", $_POST["txtUsername"] , time()+(3600*24)*365,"/");
    }
    else
    {
        echo "<p>Je bent vergeten een username op te geven. Ga terug!</p>";
    }

    // Is er een POST value "selCountry" opgegeven?
    if( isset($_POST["selCountry"]) == true)
    {
        //  Opdracht 2: Programmeer hieronder (via cookieset) een cookie met de volgende eisen:
        //   Expiration date: over 356 dagen (1 jaar)
        //   Naam: userCountryCode
        //   Value: $_POST["selCountry"]
		//   Path: "/"
        setcookie("userCountryCode",$_POST["selCountry"], time()+(3600*24)*365, "/");
    }
    else
    {
        echo "<p>Je bent vergeten een land op te geven. Ga terug!</p>";
    }

    // Stuur een gebruiker door naar de index pagina!
    header("Location: /Realiseren/Thema3/Hoofdstuk6/Oefening/T3_REA_Oefening_6_1.php");

?>