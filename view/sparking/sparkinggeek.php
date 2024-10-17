<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparking Geek</title>
    <link rel="stylesheet" href="/asset/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Permanent+Marker&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Russo+One&display=swap" rel="stylesheet">
    <script src="/js/sparkmenu.js" defer></script>
    <link rel="shortcut icon" href="/img/logo/mini-icon.png" type="image/x-icon">
</head>

<body class="sparkingbody">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/sparkingheader.php' ?>
    <nav>
        <ul>
            <?php if (isset($_SESSION['compte']) == null) { ?>
                <li><a href="/ctrl/welcome/welcome.php">Retour à la Baraque</a></li>
                <li><a href="/ctrl/sparking/sparkinggeek.php">Articles</a></li>
                <li><a href="/ctrl/propos/propos.php">A Propos</a></li>
            <?php } else if ($_SESSION['compte']['idRole'] == 1) { ?>
                <li><a href="/ctrl/welcome/welcome.php">Retour à la Baraque</a></li>
                <li><a href="/ctrl/sparking/sparkinggeek.php">Articles</a></li>
                <li><a href="/ctrl/article/add-display.php">Ajouter un article</a></li>
            <?php } else if ($_SESSION['compte']['idRole'] == 2) { ?>
                <li><a href="/ctrl/welcome/welcome.php">Retour à la Baraque</a></li>
                <li><a href="/ctrl/sparking/sparkinggeek.php">Articles</a></li>
                <li><a href="/ctrl/propos/propos.php">A Propos</a></li>
            <?php } ?>
            <?php if (isset($_SESSION['compte']) == null) { ?>
                <li><a href="/ctrl/login/login-display.php">Connexion</a></li>
            <?php } else { ?>
                <li><a href="/ctrl/logout.php">Déconnexion</a></li>
            <?php } ?>
        </ul>
    </nav>
    <div id="sparkingwelcome">
        <p>L'actualité du jeu vidéo qui règne en maître</p>
    </div>
    <div id="sparkingarticle">
        <?php foreach ($listArticle as $article) { ?>
            <ul>
                <li><a href="/ctrl/article/article.php?id=<?= $article['id'] ?>"><img src="<?= '/articlegallery/' . $article['picture'] ?>" alt=""><?= $article['une'] ?> <p><?= $article['date'] ?></p></a></li>
            </ul>
        <?php } ?>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>