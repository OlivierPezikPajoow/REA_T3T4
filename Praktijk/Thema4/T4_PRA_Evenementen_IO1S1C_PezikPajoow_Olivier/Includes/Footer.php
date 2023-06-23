<footer>
    <?php
//    Login check
    if (isset($_SESSION['Logged']) and $_SESSION['Logged'] == true)
    {
//        Login message
        echo "<h2 id='WelcomeMessage'>Welkom <span>".$_SESSION['Username']."</span> op de Evenementen pagina van de Cosmo Academie </h2>";
    }
    else
    {
        echo "<h2 id='WelcomeMessage'>Welkom op de Evenementen pagina van de Cosmo Academie</h2>";
    }
//    Date weergeven
    echo "<h2>".date("d-m-Y ")."</h2>";
    ?>
</footer>