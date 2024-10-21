<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Baraque a Gaming: Jeux Vidéos</title>
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
            <?php if (isset($_SESSION['compte']) == null) { ?>
                <li><a href="/ctrl/welcome/welcome.php">Accueil</a></li>
                <li><a href="/ctrl/sparking/sparkinggeek.php">Sparking Geek</a></li>
                <li><a href="/ctrl/propos/propos.php">A Propos</a></li>
            <?php } else if ($_SESSION['compte']['idRole'] == 1) { ?>
                <li><a href="/ctrl/welcome/welcome.php">Accueil</a></li>
                <li><a href="/ctrl/sparking/sparkinggeek.php">Sparking Geek</a></li>
                <li><a href="/ctrl/jeu/add-display.php">Ajouter un jeu</a></li>
            <?php } else if ($_SESSION['compte']['idRole'] == 2) { ?>
                <li><a href="/ctrl/welcome/welcome.php">Accueil</a></li>
                <li><a href="/ctrl/sparking/sparkinggeek.php">Sparking Geek</a></li>
                <li><a href="/ctrl/propos/propos.php">A Propos</a></li>
            <?php } ?>
            <?php if (isset($_SESSION['compte']) == null) { ?>
                <li><a href="/ctrl/login/login-display.php">Connexion</a></li>
            <?php } else { ?>
                <li><a href="/ctrl/logout.php">Déconnexion</a></li>
            <?php } ?>
        </ul>
    </nav>
    <div class="bienvenue">
        <h2>JEUX VIDEOS: CATEGORIES</h2>
    </div>
    <a class="retour" href="/ctrl/gaming/gaming.php">Retour</a>
    <div id="categories">
        <h2>Aventure</h2>
        <div id="aventure">
            <?php foreach ($listJeu as $jeu) { ?>
                <ul>
                    <?php if ($jeu['genre'] == 'Aventure' && $jeu['age'] == 18) { ?>
                        <li class="warning"><a href=" /ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="hard">18</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Aventure' && $jeu['age'] == 16) { ?>
                        <li><a class=" cool" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="sixteen">16</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Aventure' && $jeu['age'] == 12) { ?>
                        <li><a class="fine" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="twelve">12</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Aventure' && $jeu['age'] == 7) { ?>
                        <li><a class="light" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="seven">7</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Aventure' && $jeu['age'] == 3) { ?>
                        <li><a class="kid" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="seven">3</span></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
        <h2>Combat</h2>
        <div id="fight">
            <?php foreach ($listJeu as $jeu) { ?>
                <ul>
                    <?php if ($jeu['genre'] == 'Combat' && $jeu['age'] == 18) { ?>
                        <li class="warning"><a href=" /ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="hard">18</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Combat' && $jeu['age'] == 16) { ?>
                        <li><a class=" cool" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="sixteen">16</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Combat' && $jeu['age'] == 12) { ?>
                        <li><a class="fine" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="twelve">12</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Combat' && $jeu['age'] == 7) { ?>
                        <li><a class="light" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="seven">7</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Combat' && $jeu['age'] == 3) { ?>
                        <li><a class="kid" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="three">3</span></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
        <h2>Horreur</h2>
        <div id="horror">
            <?php foreach ($listJeu as $jeu) { ?>
                <ul>
                    <?php if ($jeu['genre'] == 'Horreur' && $jeu['age'] == 18) { ?>
                        <li class="warning"><a href=" /ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="hard">18</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Horreur' && $jeu['age'] == 16) { ?>
                        <li><a class="cool" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="sixteen">16</span></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
        <h2>Combat / Aventure</h2>
        <div id="fightoraventure">
            <?php foreach ($listJeu as $jeu) { ?>
                <ul>
                    <?php if ($jeu['genre'] == 'Combat / Aventure' && $jeu['age'] == 18) { ?>
                        <li class="warning"><a href=" /ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="hard">18</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Combat / Aventure' && $jeu['age'] == 16) { ?>
                        <li><a class="cool" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="sixteen">16</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Combat / Aventure' && $jeu['age'] == 12) { ?>
                        <li><a class="fine" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="twelve">12</span></a></li>
                    <?php } else if ($jeu['age'] == 7) { ?>
                        <li><a class="light" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="seven">7</span></a></li>
                    <?php } else if ($jeu['age'] == 3) { ?>
                        <li><a class="kid" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="three">3</span></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
        <h2>Course</h2>
        <div id="race">
            <?php foreach ($listJeu as $jeu) { ?>
                <ul>
                    <?php if ($jeu['genre'] == 'Course' && $jeu['age'] == 18) { ?>
                        <li class="warning"><a href=" /ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="hard">18</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Course' && $jeu['age'] == 16) { ?>
                        <li><a class="cool" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="sixteen">16</span></a></li>
                    <?php } else  if ($jeu['genre'] == 'Course' && $jeu['age'] == 12) { ?>
                        <li><a class="fine" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="twelve">12</span></a></li>
                    <?php } else  if ($jeu['genre'] == 'Course' && $jeu['age'] == 7) { ?>
                        <li><a class="light" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="seven">7</span></a></li>
                    <?php } else  if ($jeu['genre'] == 'Course' && $jeu['age'] == 3) { ?>
                        <li><a class="kid" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="three">3</span></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
        <h2>Action</h2>
        <div id="action">
            <?php foreach ($listJeu as $jeu) { ?>
                <ul>
                    <?php if ($jeu['genre'] == 'Action' && $jeu['age'] == 18) { ?>
                        <li class="warning"><a href=" /ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="hard">18</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Action' && $jeu['age'] == 16) { ?>
                        <li><a class="cool" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="sixteen">16</span></a></li>
                    <?php } else  if ($jeu['genre'] == 'Action' && $jeu['age'] == 12) { ?>
                        <li><a class="fine" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="twelve">12</span></a></li>
                    <?php } else  if ($jeu['genre'] == 'Action' && $jeu['age'] == 7) { ?>
                        <li><a class="light" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="seven">7</span></a></li>
                    <?php } else  if ($jeu['genre'] == 'Action' && $jeu['age'] == 3) { ?>
                        <li><a class="kid" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="three">3</span></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
        <h2>Film Interactif</h2>
        <div id="movie">
            <?php foreach ($listJeu as $jeu) { ?>
                <ul>
                    <?php if ($jeu['genre'] == 'Film Interactif' && $jeu['age'] == 18) { ?>
                        <li class="warning"><a href=" /ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="hard">18</span></a></li>
                    <?php } else if ($jeu['genre'] == 'Film Interactif' && $jeu['age'] == 16) { ?>
                        <li><a class="cool" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="sixteen">16</span></a></li>
                    <?php } else  if ($jeu['genre'] == 'Film Interactif' && $jeu['age'] == 12) { ?>
                        <li><a class="fine" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="twelve">12</span></a></li>
                    <?php } else  if ($jeu['genre'] == 'Film Interactif' && $jeu['age'] == 7) { ?>
                        <li><a class="light" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="seven">7</span></a></li>
                    <?php } else  if ($jeu['genre'] == 'Action' && $jeu['age'] == 3) { ?>
                        <li><a class="kid" href="/ctrl/jeu/jeu.php?id=<?= $jeu['id'] ?>"><img src="<?= '/upload/' . $jeu['image'] ?>" alt="<?= $jeu['titre'] ?>"><?= $jeu['titre'] ?> <span class="three">3</span></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>