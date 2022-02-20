<?php
    include "config.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="icon" href="img/favicon.svg" type="image/x-icon">
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <title>Kurmet Rakhatov - Portfolio</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <a data-goto=".page__section_1" href="#" class="header__logo" id="Portfolio"><img src="img/name.svg" alt=""></a>
                <div class="header__menu menu">
                    <div class="menu__icon">
                        <span></span>
                    </div>
                    <nav class="menu__body">
                        <ul class="menu__list">
                            <li><a data-goto=".page__section_2" href="#" class="menu__link" id="About">ABOUT</a></li>
                            <li><a data-goto=".page__section_3" href="#" class="menu__link" id="Works">WORKS</a></li>
                            <li><a data-goto=".page__section_4" href="#" class="menu__link" id="Contacts">CONTACTS</a></li>
                            <li><a href="index-ru.html" class="menu__link">RUSSIAN</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <main class="page">

            <section class="page__section page__section_1">
                <h1 class="page__title">// PROGRAMMER <br>AND <span class="typed"></span></h1>
                <div class="page__text"></div>
            </section>

            <section class="page__section page__section_2 wow animate__animated animate__slideInUp">
                <h2 class="page__sub-title"></h2>
                <div class="page__text page__about"><p><b class="about__border">//</b> I AM A BEGGINING <u>PROGRAMMER</u>, <u>DESIGNER</u> AND <u>NFT-ARTIST</u>. THE FOUNDER OF NFT-PROJECT <u>“JOEL-TEAM”</u>. A FUTURE STUDENT OF CZECH TECHNICAL UNIVERSITY IN PRAGUE (ČVUT).<br>
                    <b class="about__border">//</b> I SPEAK IN <u>ENGLISH</u> (B2), <u>RUSSIAN</u> (C1), <u>CZECH</u> (A2), <u>JAPANESE</u> (A1).<br>
                    <b class="about__border">//</b> PROGRAMMING LANGUAGES: <u>JAVA</u>, <u>KOTLIN</u>.<br>
                    <b class="about__border">//</b> THIS WEBSITE: <u>HTML</u>, <u>CSS</u>, <u>JS</u>.<br>
                    <b class="about__border">//</b> SOFTWARE I USE FOR DESIGNS: <u>FIGMA</u>, <u>PHOTOSHOP</u>, <u>ILLUSTRATOR</u>, <u>3D BLENDER</u>.<br>
                    <b class="about__border">//</b> BASED ON <u>NUR-SULTAN</u>, KAZAKHSTAN.<br>
                    <!-- <b class="about__border">//</b> FROM <u>KARAGANDA</u>, KAZAKHSTAN.</p> -->
                </div>
            </section>

            <section class="page__section page__section_3 ">
                <h2 class="page__sub-title"></h2>
                    <div class="introSection_1  wow animate__animated animate__fadeInLeft">
                        <img src="img/first-item.png" alt="">
                        <h1>JoelTeam</h1>
                        <p>is an NFT-Project, which was founded 12/01/2022.</p>
                        <a href="https://thejoelteam.github.io/joelteam/" style="color: #fff; text-decoration: underline;"><p>Project's website</p></a>
                    </div>
                    <div class="introSection_1  wow animate__animated animate__fadeInRight">
                        <img src="img/first-item.png" alt="">
                        <h1>LiminalitySoft</h1>
                        <p>is a Game</p>
                        <a href="https://thejoelteam.github.io/joelteam/" style="color: #fff; text-decoration: underline;"><p>Project's website</p></a>
                    </div>
            </section>

            <section class="page__section page__section_4">
                <h2 class="page__sub-title"></h2>
                <div class="page__text">
                    <a href="https://github.com/jolyth3kidd"><h1 class="page__socials">GITHUB</h1></a>
                    <a href="https://www.instagram.com/blacksufferings/"><h1 class="page__socials">INSTAGRAM</h1></a>
                    <a href=""><h1 class="page__socials">TELEGRAM</h1></a>
                    <a href=""><h1 class="page__socials">YOUTUBE</h1></a>
                    <a href=""><h1 class="page__socials">LINKEDIN</h1></a>
                </div>
            </section>
            
        </main>
    </div>

    <script>
        jQuery(document).ready(function() {
            var typed = new Typed('.typed', {
                strings: ['DESIGNER.', 'MUSICIAN.', '3D DESIGNER.', 'NFT-ARTIST'],
                typeSpeed: 60,
                backSpeed: 40,
                loop: true
            });
        });
    </script>
    <script src="js/script.js"></script>
</body>
</html>