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
    <nav>
        <ul>
            <li><a href="/ctrl/dashboard/dashboard.php">Retour</a></li>
            <li><a href="/ctrl/welcome/welcome.php">Accueil</a></li>
            <li><a href="/ctrl/logout.php">Deconnexion</a></li>
        </ul>
    </nav>
    <main>

        <table>


            <!-- Entêtes de colonne écrites 'en dur' -->
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>user</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listArticle as $article) { ?>

                    <tr>
                        <td><?= $article['une'] ?></td>
                        <td><?= $article['pseudoUser'] ?></td>
                        <td>
                            <a class="supprimer" href="/ctrl/article/delete.php?id=<?= $article['id'] ?>" onclick="return confirm('Vous êtes-sûr(e) ?')">Supprimer</a>
                            <a class="modifier" href="/ctrl/article/update-display.php?id=<?= $article['id'] ?>">Modifier</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>

</body>

</html>