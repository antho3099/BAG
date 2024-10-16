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
    <script src="/js/diaporama.js" defer></script>
    <link rel="shortcut icon" href="/img/logo/mini-icon.png" type="image/x-icon">
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php' ?>
    <nav class="navigation">>
        <ul>
            <li><a href="/ctrl/welcome/welcome.php">Accueil</a></li>
            <li><a href="/ctrl/gaming/gaming.php">Jeux Vidéos</a></li>
            <li><a href="/ctrl/sparking/sparkinggeek.php">Sparking Geek</a></li>
            <?php if (isset($_SESSION['compte']) == null) { ?>
                <li><a href="/ctrl/login/login-display.php">Connexion</a></li>
            <?php } else { ?>
                <li><a href="/ctrl/logout.php">Déconnexion</a></li>
            <?php } ?>
        </ul>
    </nav>
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
            <img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>">
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
    <img id="screenshots" src="<?= '/screenshot/' . $jeu['screenshot'] ?>" alt="<?= $jeu['titre'] ?>">
    <div id="histoire">
        <h2>HISTOIRE</h2>
        <img class="screenshotmobile" src="<?= '/screenshot/' . $jeu['screenshot'] ?>" alt="<?= $jeu['titre'] ?>">
        <p><?= $jeu['story'] ?></p>
    </div>
    <img id="screentwo" src="<?= '/screengame/' . $jeu['screen'] ?>" alt="<?= $jeu['titre'] ?>">
    <div id="avis">
        <h2>Critique du jeu</h2>
        <img id="screentwomobile" src="<?= '/screengame/' . $jeu['screen'] ?>" alt="<?= $jeu['titre'] ?>">
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
    <div id="screendiapo">
        <h2>Gallerie</h2>
        <img class="imageprincipale" src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>">
        <ul>
            <li><img class="small" src="<?= '/gallery1/' . $jeu['diapo'] ?>" alt="<?= $jeu['titre'] ?>"></li>
            <li><img class="small" src="<?= '/gallery2/' . $jeu['diapotwo'] ?>" alt="<?= $jeu['titre'] ?>"></li>
            <li><img class="small" src="<?= '/gallery3/' . $jeu['diapothree'] ?>" alt="<?= $jeu['titre'] ?>"></li>
            <li><img class="small" src="<?= '/gallery4/' . $jeu['diapofour'] ?>" alt="<?= $jeu['titre'] ?>"></li>
            <li><img class="small" src="<?= '/gallery5/' . $jeu['diapofive'] ?>" alt="<?= $jeu['titre'] ?>"></li>
            <li><img class="small" src="<?= '/gallery6/' . $jeu['diaposix'] ?>" alt="<?= $jeu['titre'] ?>"></li>
        </ul>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>