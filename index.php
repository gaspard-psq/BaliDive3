<?php /* index.php */ ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Centre de plongée à Bali | Bali Dive Center</title>

  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/index.css" />
</head>

<body>
  <header class="site-header">
    <div class="header-inner">
      <input type="checkbox" id="nav-toggle" class="nav-toggle" aria-hidden="true" />

      <label for="nav-toggle" class="burger" aria-label="Ouvrir le menu" role="button">
        <span></span><span></span><span></span>
      </label>

      <a class="brand" href="index.php" aria-label="Retour à l’accueil">
        <img src="img/logo.png" alt="Logo Bali Dive Center" class="brand-logo" />
      </a>

      <a class="cart-link" href="panier.php" aria-label="Accéder au panier">
        <span class="cart-icon" aria-hidden="true">🛒</span>
      </a>
    </div>

    <div class="nav-overlay" aria-hidden="true"></div>

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
    <figure class="hero-video">
      <video class="hero-video__media" autoplay muted loop playsinline preload="metadata" poster="img/hero-poster.jpg">
        <source src="17809337-hd_1920_1080_60fps.mp4" type="video/mp4" />
      </video>

      <div class="hero-video__shade" aria-hidden="true"></div>

      <div class="hero-video__content">
        <h2>Bienvenue sous les tropiques</h2>
        <p>Plongez à Bali avec une équipe passionnée, des sites exceptionnels et une expérience sur mesure.</p>
      </div>

      <figcaption class="hero-video__caption">
        Vidéo : immersion sur récif à Bali — coraux, poissons tropicaux et ambiance grand bleu.
      </figcaption>
    </figure>

    <section class="section">
      <div class="container">
        <h2>Explorez les plus beaux sites de Bali</h2>
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
    </section>

    <section class="section section--alt">
      <div class="container">
        <h2>Des offres simples, une organisation fluide</h2>
        <p>
          Découvrez nos offres pour débuter, progresser ou enchaîner les plongées plaisir. Groupes à taille humaine, horaires clairs,
          et accompagnement personnalisé avant, pendant et après la mise à l’eau.
        </p>
        <p>
          Réservez facilement, ajoutez vos options, et retrouvez tout dans votre panier. Notre objectif : vous faire vivre une semaine
          de plongée sans stress, 100% plaisir.
        </p>
        <a class="btn" href="catalogue.php">Découvrir le catalogue</a>
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
