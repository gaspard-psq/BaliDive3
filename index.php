<?php /* index.php */ ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Centre de plongée à Bali | Bali Dive Center</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/index.css" />
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

    <a class="drawer-link is-active" href="index.php">Accueil</a>
    <a class="drawer-link" href="offres.php">Offres</a>
    <a class="drawer-link" href="catalogue.php">Catalogue</a>
    <a class="drawer-link" href="contact.php">Contact</a>
  </nav>
</header>

<main class="site-main">

  <!-- HERO -->
  <section class="hero-video">
    <video class="hero-video__media" autoplay muted loop playsinline>
      <source src="img/videoentre.mp4" type="video/mp4" />
    </video>
    <div class="hero-video__shade"></div>
    <div class="hero-video__content">
      <h2>Bienvenue sous les tropiques</h2>
      <p>Balidive vous accompagne pour une exploration sûre et confortable des fonds marins balinais.</p>
    </div>
  </section>

  <!-- PRESENTATION -->
  <section class="section section--full">
    <div class="container split">
      <div class="split__text">
        <h2>BaliDive</h2>
        <p>Partez à la découverte des fonds balinais avec Balidive. Entre récifs colorés, tombants impressionnants et rencontres inattendues, chaque plongée devient une petite aventure adaptée à votre niveau. Nous choisissons les sites selon la météo, votre expérience et vos envies du moment.</p>
        <p>Chaque sortie commence par un briefing simple et précis. Le matériel est prêt, l’équipe veille à votre sécurité, et vous pouvez vous concentrer entièrement sur l’exploration.</p>
        <p>Que vous rêviez de dénicher de petites créatures cachées, d’explorer des épaves mystérieuses ou de croiser les grands pélagiques, Balidive vous guide vers les spots qui feront vibrer votre curiosité et votre passion pour la plongée.</p>
      </div>
      <div class="split__media">
        <img src="img/plongee1.jpg" alt="Plongée à Bali" class="split__img" />
      </div>
    </div>
  </section>

  <!-- OFFRES -->
  <section class="offers">
    <div class="offers__shade"></div>

    <div class="container offers__content">
      <div class="offers__intro">
        <h2>Découvrez nos offres</h2>
        <p>Choisissez l’expérience qui vous ressemble</p>
      </div>

      <div class="offers__grid">

        <article class="offer-card">
          <h3>Offre essentiel</h3>
          <ul class="offer-list">
            <li>1 plongée de 1 à 2 heures (69€)</li>
            <li>Accessible aux débutants</li>
            <li>Bateau confortable (6–8 pers.)</li>
            <li>Découverte récifs & faune locale</li>
            <li>Eau fournie à bord</li>
          </ul>
          <a class="offer-btn" href="offres.php">En savoir plus</a>
        </article>

        <article class="offer-card">
          <h3>Offre avancé</h3>
          <ul class="offer-list">
            <li>1 demi-journée – 4h (120$)</li>
            <li>Visite de 2 sites</li>
            <li>Conseils personnalisés</li>
            <li>Bateau 10–12 pers. avec toilettes</li>
            <li>Collation & boissons incluses</li>
          </ul>
          <a class="offer-btn" href="offres.php">En savoir plus</a>
        </article>

        <article class="offer-card">
          <h3>Offre premium</h3>
          <ul class="offer-list">
            <li>1 journée complète – 8h (300$)</li>
            <li>Visite de 3 sites</li>
            <li>Accompagnement personnalisé</li>
            <li>Yacht haut de gamme</li>
            <li>Buffet & jacuzzi à bord</li>
          </ul>
          <a class="offer-btn" href="offres.php">En savoir plus</a>
        </article>

      </div>
    </div>
  </section>

</main>

<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-spacer"></div>
    <div class="footer-copy">
      © <?php echo date('Y'); ?> BaliDive — Tous droits réservés
    </div>
    <nav class="footer-nav">
      <a class="footer-link" href="contact.php">Contact</a>
      <a class="footer-link" href="mentions-legales.php">Mentions légales</a>
    </nav>
  </div>
</footer>
</body>
</html>
