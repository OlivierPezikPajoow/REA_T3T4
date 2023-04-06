<footer>

<p>
    <?php
    include "Variabelen.php";
        if(isset($_COOKIE["userCountryCode"]) == true)
        {
        $countryCode = $_COOKIE ["userCountryCode"];
        echo "<img src='/Realiseren/Thema3/Hoofdstuk6/Oefening/T3_REA_Oefening6_1_Bijlage/flags/$countryCode.png'>";
        }
        else
        {
        echo "<a href='/Realiseren/Thema3/Hoofdstuk6/Oefening/T3_REA_Oefening_6_1.php'>Geef een Land op </a>";
        }
        echo " &copy ";

        if(isset($_COOKIE["userUsernameCookie"]) == true)
        {
            $userName = $_COOKIE ["userUsernameCookie"];
            echo " $userName ";
        }
        else
        {
            echo " Onbekende Gebruiker ";
        }
        echo " | $Klas | $Datum";
    ?>
</p>