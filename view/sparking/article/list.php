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
                <li><a href="/ctrl/sparking/sparkinggeek.php">Sparking Geek</a></li>
                <li><a href="/ctrl/propos/propos.php">A Propos</a></li>
                <?php if (isset($_SESSION['compte']) == null) { ?>
                    <li><a href="/ctrl/login/login-display.php">Connexion</a></li>
                <?php } else { ?>
                    <li><a href="/ctrl/logout.php">Déconnexion</a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
    <main>

        <table>


            <!-- Entêtes de colonne écrites 'en dur' -->
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>user</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listArticle as $article) { ?>

                    <tr>
                        <td><?= $article['id'] ?></td>
                        <td><?= $article['une'] ?></td>
                        <td><?= $article['pseudoUser'] ?></td>
                        <td>
                            <a class="supprimer" href="/ctrl/jeu/delete.php?id=<?= $article['id'] ?>" onclick="return confirm('Vous êtes-sûr(e) ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>

</body>

</html>