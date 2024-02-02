<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 06/09/2023
 * File: Index.php
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
    <link href="Styles/Style.css" rel="stylesheet">
    <link rel="Icon" href="Images/LogoIcon.png">
</head>
<body>
<?php
include "Includes/Header.php"
?>
<main id="wrapper">
    <section id="IntroMenu">
        <h1>
            Hello and welcome,
        </h1>
        <h1 id="Name">
            I'm Olivier <span class="Animated">Pezik Pajoow</span><span class="Slash">|</span>
        </h1>
        <h1>
            A software developer <br>with a passion for <span id="Tag"> &lt;code&gt;</span>
        </h1>
        <div id="AboutMe">
            <a href="#LeftSide">
                ABOUT ME
            </a>
        </div>
    </section>
    <img id="PFP" src="Images/TestPFP.png" alt="Profile Pic">
    <img id="Border" src="Images/TestBorder2.png" alt="Border" >
    <section id="AboutSec">
        <section id="LeftSide" class="FrontPageL">
            <h1>
                Hi! Here's something<br><span class=Animated>About me</span><span class="Slash">|</span>
            </h1>
            <h2>
                A programming student from the Koning Willem 1 College
            </h2>
            <p>
                I am a second-time student at the Koning Willem 1 College, I previously followed a course for engineering however I realised my heart
                 was somewhere else; namely programming.
                <br>
                I am in my second year of college, however I have already learned a tremendous amount of information about web design and programming,
                I love designing web pages and envisioning how I would make it interesting and get it to stand out among the ocean of websites on the internet.
            </p>
        </section>
        <section id="RightSide" class="FrontPageR">
            <h1>
                What are my <br><span class=Animated> interests?</span><span class="Slash">|</span>
            </h1>
            <h2>
                A couple things I enjoy
            </h2>
            <p>
                I like playing games, that's my main hobby. I have a hefty computer that can run most games which doubles as a 3D modeling computer.
                While I mostly play games I really enjoy making games as well. Which is my in my first internship my project was the creation of a game.
                <br>
                Other than that I really enjoy listening to music, mainly hard EMD. I also play piano when I have time or am bored of playing games.
                Wherever I go I'm listening to music.
            </p>
        </section>
    </section>
</main>
<?php
include "Includes/Footer.php"
?>
</body>

</html>

