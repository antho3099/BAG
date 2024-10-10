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
    <nav class="navigation">
        <ul>
            <li><a href="/ctrl/welcome/welcome.php">Accueil</a></li>
            <li><a href="/ctrl/jeu/add-display.php">Ajouter un Jeu</a></li>
            <li><a href="/ctrl/article/add-display.php">Ajouter un article</a></li>
            <li><a href="/ctrl/logout.php">Deconnexion</a></li>
        </ul>
    </nav>
    <div class="ogdashboard">
        <div class="dashboardgame">
            <img src="/img/logo/manette.webp" alt="" id="dashgameimg">
            <div class="dashgame">
                <h2>Jeux Vidéos</h2>
                <a href="/ctrl/jeu/list.php">C'est parti</a>
            </div>
        </div>
        <div class="articledashboard">
            <img src="/img/logo/article.webp" alt="">
            <div class="dashspark">
                <h2>Article</h2>
                <a href="/ctrl/article/list.php">C'est parti</a>
            </div>
        </div>
        <div class="dashboarduser">
            <img src="/img/logo/avatar.webp" alt="" id="dashuserimg">
            <div class="dashuser">
                <h2>Compte</h2>
                <a href="">Allons voir</a>
            </div>
        </div>
        <div class="dashboardadd">
            <img src="/img/logo/add.webp" alt="">
            <div class="addgame">
                <h2>Ajouter Jeu/Article</h2>
                <a href="/ctrl/gameorarticle/gameorarticle.php">C'est parti</a>

            </div>
        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>