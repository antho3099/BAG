<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Baraque a Gaming</title>
    <link rel="stylesheet" href="/asset/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Kdam+Thmor+Pro&family=Russo+One&display=swap" rel="stylesheet">
    <script src="/js/menu.js" defer></script>
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php' ?>
    <div class="navigation">
        <nav>
            <ul>
                <li><a href="/ctrl/welcome/welcome.php">Accueil</a></li>
                <li><a href="/ctrl/gaming/gaming.php">Jeux Vidéos</a></li>
                <li><a href="https://sparkinggeek.alwaysdata.net/ctrl/welcome/welcome.php">Sparking Geek</a></li>
                <li><a href="/ctrl/propos/propos.php">A Propos</a></li>
            </ul>
        </nav>
    </div>
    <div id="apropos">
        <div class="firstone">
            <img id="bagimg" src="/img/logo/BAG_legacy.webp" alt="">
            <img id="baglogo" src="/img/logo/BAG_Logo.webp" alt="">
            <div class="intro">
                <h2>La Baraque a Gaming</h2>
                <p>La Baraque a Gaming est un blog qui est spécialisé sur l'univers du jeu vidéo. Ce blog est centré sur l'univers du jeu vidéo et contient deux sections, la section "Jeux Vidéos" et la section "Sparking Geek", il possède plusieurs objectifs: Découvrir et influencer.</p>
            </div>
        </div>
        <div class="objectone">
            <img id="sonic" src="/img/BAG_sonic.webp" alt="">
            <div class="discover">
                <h2>Découvrir</h2>
                <p>L'objectif de "Découvrir" est de faire connaître le monde du jeu vidéo et d'être au courant des jeux qui sont sortis <br> (ex: Ellen, une maman, apprend que son fils Tobias veut un jeu alors qu'il n'y connait pas grand chose en jeux vidéos).</p>
            </div>
        </div>
        <div class="objecttwo">
            <img id="goku" src="/img/card/DB_gokussg.webp" alt="">
            <div class="influencer">
                <h2>Influencer</h2>
                <p>
                    L'objectif de "Influencer" est très important, sa mission est d'informer le visiteur du jeu qu'il veut et de voir si le jeu est bon ou pas afin qu'il ne puisse pas dépenser son argent maladroitement <br> (ex: Stephen, 23 ans, a dépensé plus de 80 € dans un jeu et est déçu du jeu). <br> Mais le plus important est qu'il permet de voir toute les informations
                    du jeu et voir si le jeu est fait pour ou pour un proche (Restriction 18+) <br> (ex: Sophie, 23 ans, voit que son fils de 8 ans veut Grand Theft Auto V (jeu 18+) pour son anniversaire et a besoin de conseiller un autre jeu à son fils).
                </p>
            </div>
        </div>
        <div class="gamestory">
            <img id="baggame" src="/img/card/BAG_Like_a_dragon_gaiden.webp" alt="">
            <div class="gamingsection">
                <h2>Jeux Vidéos</h2>
                <p>
                    La section "Jeux Vidéos" a été crée dans le but de répondre aux objectifs principaux: Découvrir et Influencer <br>
                    En cliquant sur la section jeux vidéos, vous verrez une liste de jeux ainsi que son titre. En cliquant sur un jeu, vous aurez droit aux informations complets du jeu (nom, studio, date de sortie, classification, prix etc...) <br>
                    Cependant, dans la fenêtre du jeu, vous trouverez aussi une critique du jeu ainsi qu'une note et d'autres critiques (Metacritic, IGN France, JeuxVidéo.com etc...)
                </p>
            </div>
        </div>
        <div class="bagspark">
            <img id="sparkimg" src="/img/card/BAG_silverhand.webp" alt="">
            <div class="sparkstory">
                <h2>Sparking Geek !</h2>
                <p>
                    "Sparking Geek" est un blog centré sur les jeux vidéos. Contrairement à donner des informations sur un jeu, ce site est un blog d'actualités sur les jeux vidéos. Cela peut être des test, des critiques, des sondages ou encore des questions. <br>
                    "Sparking Geek" a un but similaire à celui de découvrir mais il en a un autre: attirer la curioisité et faire douter les joueurs. <br> (ex: The Last Of Us: Pourquoi Joel décide de sauver Ellie et mettre l'univers en péril ?) <br>
                    Parfois, "Sparking geek" donne des nouvelles sur les prochains jeux qui risquent d'arriver. <br>
                    (ex: Dragon Ball: Sparking Zero: Goku Black et Goku Ultra Instinct arrivent dans le jeu) <br>
                    Si vous voulez être curieux et parcourir les actualités du jeu vidéo, "Sparking Geek" est fait pour vous.
                </p>
            </div>
        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>