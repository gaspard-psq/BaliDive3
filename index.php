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
        <img src="img/logo balidive.png" alt="Logo Bali Dive Center" class="brand-logo" />
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
        <source src="img/videoentre.mp4" type="video/mp4" />
      </video>

      <div class="hero-video__shade" aria-hidden="true"></div>

      <div class="hero-video__content">
        <h2>Bienvenue sous les tropiques</h2>
        <p>Balidive vous accompagne pour une exploration sûre et confortable des fonds marins balinais.</p>
      </div>
    </section>

    <section class="section section--full">
      <div class="container split">
        <div class="split__text">
          <h2>BaliDive</h2>
          <p>
            Partez à la découverte des fonds balinais avec Balidive. Entre récifs colorés, tombants impressionnants et rencontres inattendues, chaque plongée devient une petite aventure adaptée à votre niveau. Nous choisissons les sites selon la météo, votre expérience et vos envies du moment.
          </p>
          <p>
            Chaque sortie commence par un briefing simple et précis. Le matériel est prêt, l’équipe veille à votre sécurité, et vous pouvez vous concentrer entièrement sur l’exploration.
          </p>
          <p>
            Que vous rêviez de dénicher de petites créatures cachées, d’explorer des épaves mystérieuses ou de croiser les grands pélagiques, Balidive vous guide vers les spots qui feront vibrer votre curiosité et votre passion pour la plongée.
          </p>
        </div>

        <div class="split__media">
          <img src="img/plongee1.jpg" alt="Plongée à Bali" class="split__img" />
        </div>
      </div>
    </section>

    <section class="offers" aria-label="Nos offres">
      <div class="offers__shade" aria-hidden="true"></div>

      <div class="container offers__content">
        <div class="offers__intro">
          <h2>C’est ici que vous pouvez découvrir nos offres</h2>
          <p>Trois formules : choisissez celle qui correspond à votre séjour.</p>
        </div>

        <div class="offers__grid">
          <article class="offer-card">
            <div class="offer-card__head">
              <h3>Offre essentiel</h3>
              <div class="offer-icon-wrap" aria-hidden="true">
                <img class="offer-icon" src="img/pres1.png" alt="" />
              </div>
            </div>

            <ul class="offer-list">
              <li>Organisation simple, idéale pour commencer</li>
              <li>Découverte des meilleurs spots selon la météo</li>
              <li>Encadrement rassurant et briefing clair</li>
            </ul>

            <a class="offer-btn" href="offre.php?plan=essentiel">En savoir plus</a>
          </article>

          <article class="offer-card">
            <div class="offer-card__head">
              <h3>Offre avancé</h3>
              <div class="offer-icon-wrap" aria-hidden="true">
                <img class="offer-icon" src="img/pres2.png" alt="" />
              </div>
            </div>

            <ul class="offer-list">
              <li>Plus de plongées et sites variés</li>
              <li>Conseils personnalisés pour progresser</li>
              <li>Rythme équilibré pour profiter à fond</li>
            </ul>

            <a class="offer-btn" href="offre.php?plan=avance">En savoir plus</a>
          </article>

          <article class="offer-card">
            <div class="offer-card__head">
              <h3>Offre premium</h3>
              <div class="offer-icon-wrap" aria-hidden="true">
                <img class="offer-icon" src="img/pres3.png" alt="" />
              </div>
            </div>

            <ul class="offer-list">
              <li>Confort maximal et expérience complète</li>
              <li>Priorités de réservation et flexibilité</li>
              <li>Sorties sélectionnées sur mesure</li>
            </ul>

            <a class="offer-btn" href="offre.php?plan=premium">En savoir plus</a>
          </article>
        </div>
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
