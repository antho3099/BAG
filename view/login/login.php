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
        <h2>SE CONNECTER</h2>
    </div>
    <h3 id="hello">Bienvenue sur le formulaire de connexion pour vous connecter, n'hésitez pas à vous connecter ou créer un compte, c'est gratuit</h3>
    <form id="connexion" action="/ctrl/login/login.php" method="post">

        <!--pseudo-->

        <label for="pseudo">Nom d'utilisateur</label> <br>
        <input type="text" id="pseudo" name="pseudo" required> <br>

        <!--Mot de passe-->

        <label for="password">Mot De Passe</label> <br>
        <input type="password" id="password" name="password" required> <br>

        <!--Se connecter-->

        <input type="submit" value="Se connecter" id="submit">
    </form>

    <!--Ou créer un compte si on en a pas-->
    <h4>Vous n'avez pas de compte, vous pouvez en créer un</h4>
    <a id="register" href="/ctrl/register/register-display.php">Créer un nouveau compte</a>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>