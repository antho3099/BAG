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
                <li><a href="">Se connecter</a></li>
                <li><a href="/ctrl/gaming/gaming.php">Jeux Vidéos</a></li>
                <li><a href="https://sparkinggeek.alwaysdata.net/ctrl/welcome/welcome.php">Sparking Geek</a></li>
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
                <?php foreach ($listJeu as $jeu) { ?>

                    <tr>
                        <td><?= $jeu['id'] ?></td>
                        <td><?= $jeu['titre'] ?></td>
                        <td><?= $jeu['pseudoUser'] ?></td>
                        <td>
                            <a class="supprimer" href="/ctrl/jeu/delete.php?id=<?= $jeu['id'] ?>" onclick="return confirm('Vous êtes-sûr(e) ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>

</html>