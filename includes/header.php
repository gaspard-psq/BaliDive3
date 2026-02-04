<?php /* includes/header.php */ ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?php echo isset($pageTitle) ? $pageTitle : "Bali Dive Center"; ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css" />
  <?php if (!empty($pageCss)): ?>
    <link rel="stylesheet" href="<?php echo $pageCss; ?>" />
  <?php endif; ?>
</head>

<body>
<header class="site-header">
  <input type="checkbox" id="nav-toggle" class="nav-toggle" />

  <div class="header-inner">
    <div class="header-left">
      <label for="nav-toggle" class="burger" aria-label="Ouvrir le menu">
        <span></span><span></span><span></span>
      </label>
    </div>

    <a class="brand" href="index.php">
      <img src="img/logo.png" alt="Logo Bali Dive Center" class="brand-logo" />
    </a>

    <div class="header-right">
      <a class="cart-link" href="panier.php">
        <span class="cart-icon">🛒</span>
        <span class="cart-text">Panier</span>
      </a>
    </div>
  </div>

  <label for="nav-toggle" class="nav-overlay"></label>

  <nav class="drawer">
    <div class="drawer-head">
      <span class="drawer-title">Menu</span>
      <label for="nav-toggle" class="drawer-close">✕</label>
    </div>

    <a class="drawer-link <?php echo ($activePage === 'index') ? 'is-active' : ''; ?>" href="index.php">Accueil</a>
    <a class="drawer-link <?php echo ($activePage === 'offres') ? 'is-active' : ''; ?>" href="offres.php">Offres</a>
    <a class="drawer-link <?php echo ($activePage === 'catalogue') ? 'is-active' : ''; ?>" href="catalogue.php">Catalogue</a>
    <a class="drawer-link <?php echo ($activePage === 'contact') ? 'is-active' : ''; ?>" href="contact.php">Contact</a>
  </nav>
</header>

<main class="site-main">
