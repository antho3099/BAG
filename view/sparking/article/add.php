<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparking Geek: Ajouter un article</title>
    <link rel="stylesheet" href="/asset/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Permanent+Marker&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Russo+One&display=swap" rel="stylesheet">
    <script src="/js/sparkmenu.js" defer></script>
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/sparkingheader.php' ?>
    <div class="navigation">
        <nav>
            <ul>
                <?php if (isset($_SESSION['compte']) == null) { ?>
                    <li><a href="/ctrl/welcome/welcome.php">Retour à la Baraque</a></li>
                    <li><a href="/ctrl/propos/propos.php">A Propos</a></li>
                <?php } else if ($_SESSION['compte']['idRole'] == 1) { ?>
                    <li><a href="/ctrl/welcome/welcome.php">Retour à la Baraque</a></li>
                    <li><a href="">Ajouter un article</a></li>
                <?php } else if ($_SESSION['compte']['idRole'] == 2) { ?>
                    <li><a href="/ctrl/welcome/welcome.php">Retour à la Baraque</a></li>
                    <li><a href="/ctrl/propos/propos.php">A Propos</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['compte']) == null) { ?>
                    <li><a href="/ctrl/login/login-display.php">Connexion</a></li>
                <?php } else { ?>
                    <li><a href="/ctrl/logout.php">Déconnexion</a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
    <div class="bienvenue">
        <h2>AJOUTER UN ARTICLE</h2>
    </div>
    <div id="addarticle">
        <form action="/ctrl/article/add.php" method="post" enctype="multipart/form-data">
            <!--Titre-->
            <label for="une">Titre de l'article</label> <br>
            <input type="text" id="une" name="une"> <br>
            <!--Photo 1-->
            <label for="pic">Image 1</label> <br>
            <input type="file" name="pic" id="pic"> <br>
            <!--Paragraphe 1-->
            <label for="paragraph">Paragraphe 1</label> <br>
            <textarea name="paragraph" id="paragraph"></textarea> <br>
            <!--mini-titre 1-->
            <label for="minititle">Mini-titre 1</label> <br>
            <input for="text" name="minititle" id="minititle"></label> <br>
            <!--Photo 2-->
            <label for="picturetwo">Image 2</label> <br>
            <input type="file" name="picturetwo" id="picturetwo"> <br>
            <!--Paragraph 2-->
            <label for="paragraphtwo">Paragraphe 2</label> <br>
            <textarea name="paragraphtwo" id="paragraphtwo"></textarea> <br>
            <!--mini-titre 2-->
            <label for="minititletwo">Minititre</label> <br>
            <input type="text" name="minititletwo" id="minititletwo"> <br>
            <!--Image 3-->
            <label for="picturethree">Image 3</label> <br>
            <input type="file" id="picturethree" name="picturethree"> <br>
            <!--Paragraph 3-->
            <label for="paragraphthree">Paragraphe 3</label> <br>
            <textarea name="paragraphthree" id="paragraphthree"></textarea> <br>
            <!--Date de l'article-->
            <label for="date">Date de l'article</label> <br>
            <input type="date" id="date" name="date"> <br>
            <!--Créer l'article-->
            <input type="submit" id="create" name="create" value="Créer l'article">
        </form>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php' ?>
</body>

</html>