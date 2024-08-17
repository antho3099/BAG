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
    <div class="listgame">
        <?php foreach ($listJeu as $jeu) { ?>
            <ul>
                <li>Id: <?= $jeu["id"] ?></li>
                <li>Nom: <?= $jeu["titre"] ?></li>
                <li>Studio: <?= $jeu["studio"] ?></li>
                <li>Sortie: <?= $jeu["sortie"] ?></li>
                <li>Genre: <?= $jeu["genre"] ?></li>
                <li>Age: <?= $jeu["age"] ?></li>
                <li>Plateforme: <?= $jeu["plateforme"] ?></li>
                <li>Prix: <?= $jeu["prix"] ?></li>
                <li>Histoire: <?= $jeu["story"] ?></li>
                <li>Avis: <?= $jeu["avis"] ?></li>
                <li>Note: <?= $jeu["note"] ?></li>
                <li>Critique des studios: <?= $jeu["critique"] ?></li>
                <li>Editeur: <?= $jeu["pseudoUser"] ?></li>
            </ul>
        <?php } ?>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>