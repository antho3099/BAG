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
            <?php if (isset($_SESSION['compte']) == null) { ?>
                <li><a href="/ctrl/gaming/gaming.php">Jeux Vidéos</a></li>
                <li><a href="/ctrl/sparking/sparkinggeek.php">Sparking Geek</a></li>
                <li><a href="/ctrl/propos/propos.php">A Propos</a></li>
                <li><a href="/ctrl/login/login-display.php">Connexion</a></li>
            <?php } else if ($_SESSION['compte']['idRole'] == 1) { ?>
                <li><a href="/ctrl/dashboard/dashboard.php">Dashboard</a></li>
                <li><a href="/ctrl/logout.php">Se déconnecter</a></li>
            <?php } else { ?>
                <li><a href="/ctrl/gaming/gaming.php">Jeux Vidéos</a></li>
                <li><a href="/ctrl/sparking/sparkinggeek.php">Sparking Geek</a></li>
                <li><a href="/ctrl/propos/propos.php">A Propos</a></li>
                <li><a href="/ctrl/logout.php">Déconnexion</a></li>
            <?php } ?>
        </ul>
    </nav>
    <div class="bienvenue">
        <h2>BIENVENUE A LA BARAQUE A GAMING</h2>
    </div>
    <!--Si personne n'est connecté-->
    <?php if (isset($_SESSION['compte']['idRole']) == null) { ?>
        <section class="sectionjeu">
            <img id="one" src="/img/BAG-Section_game.webp" alt="">
            <img id="geek" src="/img/BAG_Gaming_section.webp" alt="">
            <div class="gamer">
                <h2>JEUX VIDEOS</h2>
                <p>Venez découvrir le monde du jeu vidéo </br> avec
                    des jeux à couper le souffle</p>
                <a href="/ctrl/gaming/gaming.php">Let's Go !</a>
            </div>
        </section>
        <section class="sectionsparking">
            <img id="geektime" src="/img/spark.webp" alt="">
            <img id="sparkinggeek" src="/img/BAG_Sparking_Geek.webp" alt="">
            <div class="sparking">
                <h2>Sparking Geek</h2>
                <p>Le site ou l'actualité du jeu vidéo <br> règne en maître</p>
                <a href="/ctrl/sparking/sparkinggeek.php">Let's Go !</a>
            </div>
        </section>
        <section class="sectionstory">
            <img id="geekorigin" src="/img/BAG_Origin.webp" alt="">
            <img id="geekstory" src="/img/BAG_Geek_mk2.webp" alt="">
            <div class="origins">
                <h2>La Baraque a Gaming</h2>
                <p>Découvrez l'histoire de la Baraque à Gaming </p>
                <a href="/ctrl/propos/propos.php">Let's Go !</a>
            </div>
        </section>

        <!--Si l'administrateur est connecté-->
    <?php } else if ($_SESSION['compte']['idRole'] == 1) { ?>
        <div class="sectionjeu">
            <img id="one" src="/img/BAG-Section_game.webp" alt="">
            <img id="geek" src="/img/BAG_Gaming_section.webp" alt="">
            <section class="gamer">
                <h2>JEUX VIDEOS</h2>
                <p>Venez découvrir le monde du jeu vidéo </br> avec
                    des jeux à couper le souffle</p>
                <a href="/ctrl/gaming/gaming.php">Let's Go !</a>
        </div>
        </section>
        <section class="sectionsparking">
            <img id="geektime" src="/img/spark.webp" alt="">
            <img id="sparkinggeek" src="/img/BAG_Sparking_Geek.webp" alt="">
            <div class="sparking">
                <h2>Sparking Geek</h2>
                <p>Le site ou l'actualité du jeu vidéo <br> règne en maître</p>
                <a href="/ctrl/sparking/sparkinggeek.php">Let's Go !</a>
            </div>
        </section>
        <section class="sectionstory">
            <img id="geekorigin" src="/img/BAG_Origin.webp" alt="">
            <img id="geekstory" src="/img/BAG_Geek_mk2.webp" alt="">
            <div class="origins">
                <h2>La Baraque a Gaming</h2>
                <p>Découvrez l'histoire de la Baraque à Gaming </p>
                <a href="/ctrl/propos/propos.php">Let's Go !</a>
            </div>
        </section>
        <section class="bagboard">
            <img id="dashboardimg" src="/img/BAG_Geek_Dashboard.webp" alt="">
            <img id="dashboardgeek" src="/img/BAG_Dashboard.webp" alt="">
            <div class="dash">
                <h2>Dashboard</h2>
                <p>Le tableau de board <br> pour l'administrateur</p>
                <a href="/ctrl/dashboard/dashboard.php">C'est Parti</a>
            </div>
        </section>
        <!--Si l'utilisateur est connecté-->
    <?php } else if ($_SESSION['compte']['idRole'] == 2) { ?>
        <section class="sectionjeu">
            <img id="one" src="/img/BAG-Section_game.webp" alt="">
            <img id="geek" src="/img/BAG_Gaming_section.webp" alt="">
            <div class="gamer">
                <h2>JEUX VIDEOS</h2>
                <p>Venez découvrir le monde du jeu vidéo </br> avec
                    des jeux à couper le souffle</p>
                <a href="/ctrl/gaming/gaming.php">Let's Go !</a>
            </div>
        </section>
        <section class="sectionsparking">
            <img id="geektime" src="/img/spark.webp" alt="">
            <img id="sparkinggeek" src="/img/BAG_Sparking_Geek.webp" alt="">
            <div class="sparking">
                <h2>Sparking Geek</h2>
                <p>Le site ou l'actualité du jeu vidéo <br> règne en maître</p>
                <a href="/ctrl/sparking/sparkinggeek.php">Let's Go !</a>
            </div>
        </section>
        <section class="sectionstory">
            <img id="geekorigin" src="/img/BAG_Origin.webp" alt="">
            <img id="geekstory" src="/img/BAG_Geek_mk2.webp" alt="">
            <div class="origins">
                <h2>La Baraque a Gaming</h2>
                <p>Découvrez l'histoire de la Baraque à Gaming </p>
                <a href="/ctrl/propos/propos.php">Let's Go !</a>
            </div>
        </section>
    <?php } ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>


</html>