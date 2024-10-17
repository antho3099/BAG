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
    <nav>
        <ul>
            <li><a href="/ctrl/welcome/welcome.php">Accueil</a></li>
            <li><a href="/ctrl/gaming/gaming.php">Jeux Vidéos</a></li>
            <li><a href="/ctrl/sparking/sparkinggeek.php">Sparking Geek</a></li>
            <li><a href="/ctrl/propos/propos.php">A Propos</a></li>
            <?php if (isset($_SESSION['compte']) == null) { ?>
                <li><a href="/ctrl/login/login-display.php">Connexion</a></li>
            <?php } else { ?>
                <li><a href="/ctrl/logout.php">Déconnexion</a></li>
            <?php } ?>
        </ul>
    </nav>
    <div class="addboard">
        <div class="sectiongame">
            <img id="geekone" src="/img/logo/BAG_geek_one.webp" alt="">
            <img id="geekpc" src="/img/logo/BAGGeekpc.webp" alt="">
            <div class="gamingchoice">
                <h2>Jeu Vidéo</h2>
                <a href="/ctrl/jeu/add-display.php">Ajouter un jeu</a>
            </div>
        </div>
        <div class="sectionarticle">
            <img id="sparkone" src="/img/logo/BAG_Geek_Sparking.webp" alt="">
            <img id="sparkpc" src="/img/logo/BAGsparkingpc.webp" alt="">
            <div class="sparkchoice">
                <h2>Article</h2>
                <a href="/ctrl/article/add-display.php">Ajouter un article</a>
            </div>
        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>