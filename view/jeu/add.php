<!DOCTYPE html>
<html lang="fr">

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
                <li><a href="">Se connecter</a></li>
                <li><a href="/ctrl/gaming/gaming.php">Jeux Vidéos</a></li>
                <li><a href="https://sparkinggeek.alwaysdata.net/ctrl/welcome/welcome.php">Sparking Geek</a></li>
            </ul>
        </nav>
    </div>
    <div class="bienvenue">
        <h2>AJOUTER UN JEU</h2>
    </div>
    <div id="jeu">
        <form action="/ctrl/jeu/add.php" method="post" enctype="multipart/form-data">
            <!--Titre-->
            <label for="titre">Titre</label><br>
            <input type="text" name="titre" id="titre"> <br>
            <!--Studio-->
            <label for="studio">Studio Développeur</label> <br>
            <input type="text" name="studio" id="studio"> <br>
            <!--sortie-->
            <label for="sortie">Date de sortie</label> <br>
            <input type="date" name="sortie" id="sortie"> <br>
            <!--genre-->
            <label for="genre">Type de jeu</label> <br>
            <input type="text" name="genre" id="genre"> <br>
            <!--age-->
            <label for="age">Age</label> <br>
            <input type="number" name="age" id="age" min="3" max="18"><br>
            <!--plateforme-->
            <label for=" plateforme">Plateforme</label> <br>
            <input type="text" name="plateforme" id="plateforme" placeholder="PS/XBOX/NITENDO"> <br>
            <!--prix-->
            <label for="prix">Prix</label> <br>
            <input type="text" name="prix" id="prix" placeholder="ex: 59,99€"> <br>
            <!--story-->
            <label for="story">Histoire du jeu</label> <br>
            <textarea name="story" id="story"></textarea> <br>
            <!--avis-->
            <label for="avis">Avis</label> <br>
            <textarea name="avis" id="mind"></textarea> <br>
            <!--note-->
            <label for="note">Note</label> <br>
            <input type="number" name="note" id="result" placeholder="?/10" min="0" max="10"> <br>
            <!--critique-->
            <label for="critique">Autres Critiques</label> <br>
            <input type="text" name="critique" id="allcritic"> <br>
            <!--fichier-->
            <input type="file" id="picture" name="picture"> <br>
            <!--screenshot-->
            <label for="screenshot">Screenshot n°1</label> <br>
            <input type="file" id="screenshot" name="screenshot"> <br>
            <!--screen-->
            <label for="screen"> Screenshot n°2</label> <br>
            <input type="file" id="screen" name="screen"> <br>
            <details>
                <summary>Ajouter un diaporama</summary>
                <!--Diaporama-->
                <label for="diapo">Diaporama Image 1:</label> <br>
                <input type="file" id="diapo" name="diapo"> <br>
                <!--Diapo2-->
                <label for="diapotwo">Diaporama Image 2:</label> <br>
                <input type="file" id="diapotwo" name="diapotwo"> <br>
                <!--Diapo3-->
                <label for="diapothree">Diaporama Image 3:</label> <br>
                <input type="file" id="diapothree" name="diapothree"> <br>
                <!--Diapo4-->
                <label for="diapofour">Diaporama Image 4:</label> <br>
                <input type="file" id="diapofour" name="diapofour"> <br>
                <!--Diapo5-->
                <label for="diapofive">Diaporama Image 5:</label> <br>
                <input type="file" id="diapofive" name="diapofive"> <br>
                <!--Diapo 6-->
                <label for="diaposix">Diaporama Image 6:</label> <br>
                <input type="file" id="diaposix" name="diaposix"> <br>
            </details>
            <!--Ajouter le jeu-->
            <input type="submit" value="Ajouter le jeu" id="submit">
        </form>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>