<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 22/01/2023
 * File: Internship1.php
 */
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        Portfolio Index
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Styles/Style.css" rel="stylesheet">
    <link rel="Icon" href="../Images/LogoIcon.png">
</head>
<body>
<?php
    include "../Includes/Header.php"
?>
<main id="wrapper">
    <section id="AboutSec">
        <section id="LeftSide">
            <section class="Segment">
                <video controls>
                    <source src="../Videos/depostBodeTrailer.mp4" type="video/mp4">
                </video>
            </section>
        </section>
        <section id="RightSide" class="Segment">
            <h1>
                de<i>post</i>Bode:<br><span class=Animated>Delivery Frenzy</span><span class="Slash">|</span>
            </h1>
            <h2>
                A delivery game for all
            </h2>
            <p>
                I follow a course for Software Developer and need to do an internship for it, however I had trouble finding an internship and was introduced to de<i>post</i>Bode.
                There was not a lot of software development at the company since all software is licensed from Quadira.
                For that reason we decided to develop a small game that employees could play in their breaks and would be available to play on all devices as well as being tied to the company,
                hence “de<i>post</i>Bode: Delivery Frenzy” was born.
            </p>
        </section>
    </section>
</main>
<?php
include "../Includes/Footer.php"
?>
</body>

</html>
