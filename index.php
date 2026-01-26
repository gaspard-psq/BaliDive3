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
        <label for="nav-toggle" class="burger" aria-label="Ouvrir le menu" role="button">
          <span></span><span></span><span></span>
        </label>
      </div>

      <a class="brand" href="index.php" aria-label="Retour à l’accueil">
        <img src="img/logo.png" alt="Logo Bali Dive Center" class="brand-logo" />
      </a>

      <div class="header-right">
        <a class="cart-link" href="panier.php" aria-label="Accéder au panier">
          <span class="cart-icon" aria-hidden="true">🛒</span>
          <span class="cart-text">Panier</span>
        </a>
      </div>
    </div>

    <label for="nav-toggle" class="nav-overlay" aria-label="Fermer le menu"></label>

    <nav class="drawer" aria-label="Navigation principale">
      <div class="drawer-head">
        <span class="drawer-title">Menu</span>
        <label for="nav-toggle" class="drawer-close" aria-label="Fermer le menu" role="button">✕</label>
      </div>

      <a class="drawer-link is-active" href="index.php">Accueil</a>
      <a class="drawer-link" href="offres.php">Offres</a>
      <a class="drawer-link" href="catalogue.php">Catalogue</a>
      <a class="drawer-link" href="contact.php">Contact</a>
    </nav>
  </header>

  <main class="site-main">
    <section class="hero-video" aria-label="Vidéo d’accueil">
      <video class="hero-video__media" autoplay muted loop playsinline preload="metadata" poster="img/hero-poster.jpg">
        <source src="img/plongee-bali.mp4" type="video/mp4" />
      </video>

      <div class="hero-video__shade" aria-hidden="true"></div>

      <div class="hero-video__content">
        <h2>Bienvenue sous les tropiques</h2>
        <p>Plongez à Bali avec une équipe passionnée, des sites exceptionnels et une expérience sur mesure.</p>
      </div>
    </section>

    <section class="section section--full">
      <div class="container split">
        <div class="split__text">
          <h2>BaliDive vous propose...</h2>
          <p>
            Entre récifs colorés, tombants spectaculaires et rencontres marines, Bali est une destination rêvée pour tous les niveaux.
            Nous adaptons les sorties selon la météo, votre expérience et vos envies du moment.
          </p>
          <p>
            Briefings clairs, sécurité au cœur de chaque plongée, matériel entretenu : vous profitez pleinement de l’exploration,
            en toute confiance et dans une ambiance conviviale.
          </p>
          <p>
            Envie de macro, d’épaves ou de grands pélagiques ? Nous vous guidons vers les spots qui correspondent à votre style.
          </p>
        </div>

        <div class="split__media">
          <img src="img/plongee1.jpg" alt="Plongée à Bali" class="split__img" />
        </div>
      </div>
    </section>

    <section class="cta-image" aria-label="Découvrir nos offres">
      <div class="cta-image__shade" aria-hidden="true"></div>
      <div class="cta-image__content">
        <a class="btn btn--ghost" href="offres.php">Découvrir nos offres</a>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="footer-inner">
      <div class="footer-spacer" aria-hidden="true"></div>

      <div class="footer-copy">
        © <?php echo date('Y'); ?> Bali Dive Center — Tous droits réservés
      </div>

      <nav class="footer-nav" aria-label="Liens de pied de page">
        <a class="footer-link" href="contact.php">Contact</a>
        <a class="footer-link" href="mentions-legales.php">Mentions légales</a>
      </nav>
    </div>
  </footer>
</body>
</html>
