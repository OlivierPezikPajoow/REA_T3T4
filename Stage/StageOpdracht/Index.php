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
        <section id="LeftSide">
            <h1>
                Hi! Here's something<br><span class=Animated>About me</span><span class="Slash">|</span>
            </h1>
            <h2>
                A programming student from the Koning Willem 1 College, with a drive for improving
            </h2>
            <p>
                I am a second-time student at the Koning Willem 1 College, I previously followed a course for engineering however I realised my heart
                 was somewhere else; namely programming.
                <br>
                I am in my second year of college, however I have already learned a tremendous amount of information about web design and programming,
                I love designing web pages and envisioning how I wwould make it interesting and get it to stand out among the ocean of websites on the internet.
                <br><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolores excepturi explicabo magni.
                Commodi dicta eveniet fugiat iste reiciendis veritatis. A deleniti explicabo magni modi officiis pariatur quam quisquam sunt tempora vero!
                Ducimus, exercitationem, obcaecati. Consectetur, explicabo fugiat. A aliquam architecto at,
                consectetur cum cumque neque officiis provident rem soluta.
            </p>
        </section>
        <section id="RightSide">
            <h1>
                What are my <br><span class=Animated> interests?</span><span class="Slash">|</span>
            </h1>
            <h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid ipsa repellendus.
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ab adipisci amet architecto assumenda,
                aut debitis deleniti doloremque,
                eaque esse iusto nam perferendis porro rem saepe voluptatem!
                A atque autem delectus deserunt dolorum et, iste porro quisquam quod sed. Ducimus fugiat officia perspiciatis qui?
                Ad dolor fugit non perferendis tenetur voluptas. Atque blanditiis commodi cupiditate distinctio dolor eaque ex exercitationem,
                impedit inventore ipsum iste laudantium magnam, molestias nulla quaerat quis sequi voluptatem.
                Ad animi atque aut consequatur dolore doloremque dolorum impedit iure laborum modi nemo numquam odit officia, optio perspiciatis,
                quam qui quia quibusdam, quidem quos reiciendis sunt vero voluptas voluptate.
                <br><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolores excepturi explicabo magni.
                Commodi dicta eveniet fugiat iste reiciendis veritatis. A deleniti explicabo magni modi officiis pariatur quam quisquam sunt tempora vero!
                Ducimus, exercitationem, obcaecati. Consectetur, explicabo fugiat. A aliquam architecto at,
                consectetur cum cumque neque officiis provident rem soluta.
            </p>
        </section>
    </section>
</main>
<?php
include "Includes/Footer.php"
?>
</body>

</html>

