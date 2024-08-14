<!DOCTYPE html>
<html lang="en">

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
                <li><a href="">Se connecter</a></li>
                <li><a href="/ctrl/gaming/gaming.php">Jeux Vidéos</a></li>
                <li><a href="https://sparkinggeek.alwaysdata.net/ctrl/welcome/welcome.php">Sparking Geek</a></li>
            </ul>
        </nav>
    </div>
    <div class="gamenav">
        <nav>
            <ul>
                <li><a href="#game">Jeu</a></li>
                <li><a href="#story">Histoire</a></li>
                <li><a href="#avis">Avis</a></li>
                <li><a href="#note">Notes</a></li>
                <li><a href="/ctrl/gaming/gaming.php">Retour</a></li>
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
                <li>Classification: <?= $jeu['age'] ?> </li>
                <li>Plateforme: <?= $jeu['plateforme'] ?> </li>
                <li>Prix: <?= $jeu['prix'] ?></li>
            </ul>
        </div>
    </div>
    <div id="story">
        <h2>HISTOIRE</h2>
        <p><?= $jeu['story'] ?></p>
    </div>
    <div id="avis">
        <h2>Avis</h2>
        <p><?= $jeu['avis'] ?></p>
    </div>
    <div id="note">
        <h2>Note</h2>
        <h3><?= $jeu['note'] ?></h3>
        <h2>Autres Critiques</h2>
        <p><?= $jeu['critique'] ?></p>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>


</body>

</html>