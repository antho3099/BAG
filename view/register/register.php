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
    <div class="navigation">
        <nav>
            <ul>
                <li><a href="/ctrl/welcome/welcome.php">Accueil</a></li>
                <li><a href="/ctrl/gaming/gaming.php">Jeux Vidéos</a></li>
                <li><a href="/ctrl/sparking/sparkinggeek.php">Sparking Geek</a></li>
                <li><a href="/ctrl/propos/propos.php">A Propos</a></li>
            </ul>
        </nav>
    </div>
    <div class="bienvenue">
        <h2>CREER UN COMPTE</h2>
    </div>
    <form action="/ctrl/register/register.php" method="post">
        <!--Nom-->
        <label for="nom">Nom</label> <br>
        <input type="text" name="nom" id="nom" required> <br>
        <!--prenom-->
        <label for="prenom">Prenom</label> <br>
        <input type="text" name="prenom" id="prenom" required> <br>
        <!--age-->
        <label for="birth">Âge</label> <br>
        <input type="number" name="birth" id="birth" required> <br>
        <!--email-->
        <label for="email">Email</label> <br>
        <input type="text" id="email" name="email" required> <br>
        <!--pseudo-->
        <label for="pseudo">pseudo</label> <br>
        <input type="text" id="pseudo" name="pseudo" required> <br>
        <!--mot de passe-->
        <label for="password">Mot de passe</label> <br>
        <input type="password" id="password" name="password" required> <br>
        <!--Valider-->
        <input type="submit" id="validate" name="validate" value="Créer son compte">
    </form>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>