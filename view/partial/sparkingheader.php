<header id="sparkheader">
    <?php if (isset($_SESSION['compte']) == null) { ?>
        <img class="avatar" src="/img/logo/manette.webp" alt="avatar">
    <?php } else if ($_SESSION['compte']['idRole'] == 1) { ?>
        <img class="avatar" src="/img/logo/BAG_admin_logo.webp" alt="avatar admin">
    <?php } else if ($_SESSION['compte']['idRole'] == 2) { ?>
        <img class="avatar" src="/img/logo/avatar.webp" alt="avatar user">
    <?php } ?>
    <img class="sparkingeeklogo" src="/img/logo/SparkingGeek-ULT.webp" alt="BAG_Sparking Geek">
    <img class="sparkmenu" src="/img/logo/sparkingmenu.webp" alt="menu">
</header>