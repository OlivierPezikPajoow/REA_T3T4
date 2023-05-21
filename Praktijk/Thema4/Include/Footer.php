<Footer>
    <?php
    if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
        echo "<p>Welkom <span>".$_SESSION['Username']. "</span>, op de website van Dierentehuis Den Bosch</p>";
    }
    else
        echo "<p>Welkom op de website van Dierentehuis Den Bosch.</p>"
    ?>
</Footer>

