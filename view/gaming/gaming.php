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
                <li><a href="https://sparkinggeek.alwaysdata.net/ctrl/welcome/welcome.php">Sparking Geek</a></li>
                <?php if ($_SESSION['compte']['idRole'] == 1) { ?>
                    <li><a href="/ctrl/jeu/add-display.php">Ajouter un jeu</a></li>
                <?php } ?>
                <li><a href="/ctrl/propos/propos.php">A Propos</a></li>
            </ul>
        </nav>
    </div>
    <div class="bienvenue">
        <h2>SECTION JEUX VIDEOS</h2>
    </div>
    <div id="jeux">
        <?php foreach ($listJeu as $jeu) { ?>
            <ul>
                <?php if ($jeu['age'] == 18) { ?>
                    <li class="warning"><a href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt=""><?= $jeu['titre'] ?> <span class="hard">18</span></a></li>
                <?php } else if ($jeu['age'] == 16) { ?>
                    <li><a href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt=""><?= $jeu['titre'] ?> <span class="sixteen">16</span></a></li>
                <?php } else if ($jeu['age'] == 12) { ?>
                    <li><a href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt=""><?= $jeu['titre'] ?> <span class="twelve">12</span></a></li>
                <?php } else if ($jeu['age'] == 7) { ?>
                    <li><a href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt=""><?= $jeu['titre'] ?> <span class="seven">7</span></a></li>
                <?php } else if ($jeu['age'] == 3) { ?>
                    <li><a href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt=""><?= $jeu['titre'] ?> <span class="seven">3</span></a></li>
                <?php } else { ?>
                    <li><a href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt=""><?= $jeu['titre'] ?></a></li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
    <div class="alert"></div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>