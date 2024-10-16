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
    <link rel="shortcut icon" href="/img/logo/mini-icon.png" type="image/x-icon">
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php' ?>
    <div class="navigation">
        <nav>
            <ul>
                <li><a href="/ctrl/welcome/welcome.php">Accueil</a></li>
                <li><a href="/ctrl/gaming/gaming.php">Jeux Vidéos</a></li>
                <li><a href="/ctrl/sparking/sparkinggeek.php">Sparking Geek</a></li>
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
                <p>La Baraque a Gaming est un blog qui est spécialisé sur l'univers du jeu vidéo. Ce blog est centré sur l'univers du jeu vidéo et contient deux sections, la section "Jeux Vidéos" et la section "Sparking Geek", il possède plusieurs objectifs: Informer et Partager.</p>
            </div>
        </div>
        <div class="gamestory">
            <img id="baggame" src="/img/card/BAG_spiderman.webp" alt="">
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
                    "Sparking Geek" est une section dédié aux actualités du jeu vidéo qui vous propose des articles. Cela peut être des test, des critiques, des sondages ou encore des questions. <br>
                    "Sparking Geek" a un but similaire à celui de découvrir mais il en a un autre: attirer la curioisité et faire douter les joueurs. <br> (ex: The Last Of Us: Pourquoi Joel décide de sauver Ellie et mettre l'univers en péril ?) <br>
                    Parfois, "Sparking geek" donne des nouvelles sur les prochains jeux qui risquent d'arriver. <br>
                    (ex: Dragon Ball: Sparking Zero: Goku Black et Goku Ultra Instinct arrivent dans le jeu) <br>
                    Si vous voulez être curieux et parcourir les actualités du jeu vidéo, "Sparking Geek" est fait pour vous.
                </p>
            </div>
        </div>
        <div class="creator">
            <img id="creatorimg" src="/img/BAG_vegeto.webp" alt="">
            <div class="creatorstory">
                <h2>Son créateur</h2>
                <p>Grand amateur de jeux vidéos, j'aime beaucoup jouer à des licences cultes comme "Tomb Raider", "Dragon Ball", "The Last Of Us", "Like A Dragon / Yakuza" et plein d'autres. Fan de jeux mais aussi d'audiovisuel, je me donne à 100% afin de vous donner du contenu et pour vous informer des dernières nouveautés en matière de jeu vidéo</p>
            </div>
        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>