<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $article['une'] ?></title>
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
                <li><a href="">Ajouter un article</a></li>
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
    <div id="article">
        <h2><?= $article['une'] ?></h2>
        <img id="firstarticleimg" src="<?= '/articlegallery/' . $article['picture'] ?>" alt="">
        <p><?= $article['paragraph'] ?></p>
        <div id="paragraph1">
            <h3><?= $article['minititle'] ?></h3>
            <img id="secondarticleimg" src="<?= '/picturetwo/' . $article['picturetwo'] ?>" alt="">
            <p><?= $article['paragraphtwo'] ?></p>
        </div>
        <div id="paragraph2">
            <h3><?= $article['minititletwo'] ?></h3>
            <img id="thirdarticleimg" src="<?= '/picturethree/' . $article['picturethree'] ?>" alt="">
            <p><?= $article['paragraphthree'] ?></p>
        </div>
    </div>
    <div id="coordonees">
        <h5>Date de l'article: <?= $article['date'] ?></h5>
        <h6>Edité par: <?= $article['pseudoUser'] ?></h6>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>