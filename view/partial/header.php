<header>
    <?php if (isset($_SESSION['compte']) == null) { ?>
        <img class="avatar" src="/img/logo/manette.webp" alt="">
    <?php } else if ($_SESSION['compte']['idRole'] == 1) { ?>
        <img class="avatar" src="/img/logo/BAG_admin_logo.webp" alt="">
    <?php } else if ($_SESSION['compte']['idRole'] == 2) { ?>
        <img class="avatar" src="/img/logo/avatar.webp" alt="">
    <?php } ?>
    <h1><img class="bag" src="/img/logo/BAG_legacy.webp" alt="La Baraque a Gaming"></h1>
    <img class="menu" src="/img/logo/menu-1.webp" alt="">
</header>