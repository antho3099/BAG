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
    <!--Modifier le jeu-->
    <form action="/ctrl/jeu/update.php" method="post">
        <!--id-->
        <input type="hidden" name="id" value="<?= $jeu['id'] ?>">
        <!--le titre-->
        <label for="titre">Titre</label> <br>
        <input type="text" name="titre" id="titre" value="<?= $jeu['titre'] ?>"> <br>
        <!--le studio-->
        <label for="studio">Studio Développeur</label> <br>
        <input type="text" name="studio" id="studio" value="<?= $jeu['studio'] ?>"> <br>
        <!--La date de sortie-->
        <label for="sortie">Date de sortie</label> <br>
        <input type="date" id="sortie" name="sortie" value="<?= $jeu['sortie'] ?>"> <br>
        <!--le genre-->
        <label for="genre">Type</label> <br>
        <input type="text" id="genre" name="genre" value="<?= $jeu['genre'] ?>"> <br>
        <!--Classification-->
        <label for="age">Âge</label> <br>
        <input type="number" id="age" name="age" min="3" max="18" value="<?= $jeu['age'] ?>"> <br>
        <!--plateforme-->
        <label for="plateforme">Plateforme</label> <br>
        <input type="text" name="plateforme" id="plateforme" value="<?= $jeu['plateforme'] ?>"> <br>
        <!--prix-->
        <label for="prix">Prix</label> <br>
        <input type="text" name="prix" id="prix" value="<?= $jeu['prix'] ?>"> <br>
        <!--story-->
        <label for="story">Histoire du jeu</label> <br>
        <textarea name="story" id="story" value="<?= $jeu['story'] ?>"></textarea> <br>
        <!--avis-->
        <label for="avis">Avis</label> <br>
        <textarea name="avis" id="mind" value="<?= $jeu['avis'] ?>"></textarea> <br>
        <!--note-->
        <label for="number">Note</label> <br>
        <input type="number" name="note" id="result" min="0" max="10" value="<?= $jeu['note'] ?>"> <br>
        <!--critique-->
        <label for="critique">Autres Critiques</label> <br>
        <input type="text" name="critique" id="allcritic" value="<?= $jeu['critique'] ?>"> <br>
        <!--modifier-->
        <button type="submit" value="modifier">Valider</button>
    </form>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>