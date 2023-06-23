<header>
    <nav>
<!--        Logo van Cosmo Academie-->
        <a href="../Index.php"><img src="../Images/CosmoLogo.png" alt="Logo van Cosmo"></a>
        <section>
            <?php
//            Login Check
            if (isset($_SESSION['Logged']) and $_SESSION['Logged'] == true)
            {
                echo "<a href='LogOutPage.php?Page=$Page'>LOG OUT</a>";
            }
            else
            {
                echo "<a href='LoginPage.php'>LOG IN</a>";
            }
            ?>
        </section>
    </nav>
</header>