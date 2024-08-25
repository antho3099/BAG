<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $jeu['titre'] ?></title>
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
                <?php if (isset($_SESSION['compte']) == null) { ?>
                    <li><a href="/ctrl/login/login-display.php">Connexion</a></li>
                <?php } else { ?>
                    <li><a href="/ctrl/logout.php">Déconnexion</a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
    <div class="gamenav">
        <nav>
            <ul>
                <li><a href="/ctrl/gaming/gaming.php"><img id="back" src="/img/logo/arrow_back.webp" alt=""></a></li>
                <li><a href="#game">Jeu</a></li>
                <li><a href="#histoire">Histoire</a></li>
                <li><a href="#avis">Avis</a></li>
                <li><a href="#note">Notes</a></li>

            </ul>
        </nav>
    </div>
    <div id="game">
        <h2><?= $jeu['titre'] ?></h2>
        <div class="gameone">
            <img src="<?= '/upload/' . $jeu['image'] ?>" alt="">
            <ul>
                <li>Nom: <?= $jeu['titre'] ?></li>
                <li>Studio: <?= $jeu['studio'] ?></li>
                <li>Date de sortie: <?= $jeu['sortie'] ?></li>
                <li>Type: <?= $jeu['genre'] ?></li>
                <li>Classification: <?= $jeu['age'] ?></li>
                <li>Plateforme: <?= $jeu['plateforme'] ?> </li>
                <li>Prix: <?= $jeu['prix'] ?></li>
            </ul>
        </div>
    </div>
    <img id="screenshots" src="<?= '/screenshot/' . $jeu['screenshot'] ?>" alt="">
    <div id="histoire">
        <h2>HISTOIRE</h2>
        <img class="screenshotmobile" src="<?= '/screenshot/' . $jeu['screenshot'] ?>" alt="">
        <p><?= $jeu['story'] ?></p>
    </div>
    <img id="screentwo" src="<?= '/screengame/' . $jeu['screen'] ?>" alt="">
    <div id="avis">
        <h2>Critique du jeu</h2>
        <img id="screentwomobile" src="<?= '/screengame/' . $jeu['screen'] ?>" alt="">
        <p><?= $jeu['avis'] ?></p>
    </div>
    <div id="note">
        <h2>Note</h2>
        <h3><?= $jeu['note'] ?> /10</h3>
    </div>
    <div id="critic">
        <h2>Autres Critiques</h2>
        <p><?= $jeu['critique'] ?></p>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>


</body>

</html>