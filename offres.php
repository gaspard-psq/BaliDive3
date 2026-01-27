<?php /* offres.php */ ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Nos offres | Bali Dive Center</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/offres.css" />
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

    <a class="drawer-link" href="index.php">Accueil</a>
    <a class="drawer-link is-active" href="offres.php">Offres</a>
    <a class="drawer-link" href="catalogue.php">Catalogue</a>
    <a class="drawer-link" href="contact.php">Contact</a>
  </nav>
</header>

<main class="site-main">

  <!-- HERO -->
  <section class="offers-hero">
    <div class="offers-hero__shade"></div>
    <div class="container offers-hero__content">
      <h1>Nos offres de plongée</h1>
      <p>Trois formules pour découvrir Bali sous l’eau, selon votre rythme et vos envies.</p>
    </div>
  </section>

  <!-- OFFRES DETAIL -->
  <section class="offers-page">
    <div class="container offers-page__grid">

      <!-- ESSENTIEL -->
      <article class="offer-big">
        <div class="offer-big__top">
          <h2>Offre essentiel</h2>
        </div>

        <div class="offer-big__body">
          <p>
            Cette formule propose une plongée encadrée de 1 à 2 heures, accessible même aux débutants.
            Elle se déroule depuis un bateau confortable pouvant accueillir 6 à 8 personnes.
            Le parcours permet d’explorer les récifs et la faune locale.
            De l’eau est fournie à bord.
            Cette offre reste simple mais suffisante pour une première expérience.
          </p>

          <div class="offer-big__actions">
            <a class="btn btn--primary" href="contact.php">Réserver</a>
          </div>
        </div>
      </article>

      <!-- AVANCE -->
      <article class="offer-big offer-big--accent">
        <div class="offer-big__top">
          <h2>Offre avancé</h2>
        </div>

        <div class="offer-big__body">
          <p>
            Cette option s’étend sur une demi-journée d’environ 4 heures.
            Elle inclut la visite de deux sites différents et l’accompagnement avec des conseils personnalisés.
            Le bateau, plus spacieux, peut accueillir 10 à 12 personnes et dispose de toilettes à bord.
            Une collation et des boissons sont fournies.
            L’offre est plus complète et mieux adaptée aux personnes cherchant une exploration plus soutenue.
          </p>

          <div class="offer-big__actions">
            <a class="btn btn--primary" href="contact.php">Réserver</a>
          </div>
        </div>
      </article>

      <!-- PREMIUM -->
      <article class="offer-big">
        <div class="offer-big__top">
          <h2>Offre premium</h2>
        </div>

        <div class="offer-big__body">
          <p>
            Cette formule couvre une journée entière d’environ 8 heures.
            Elle propose la visite de trois sites, avec un encadrement personnalisé.
            Le déplacement se fait sur un yacht équipé d’un buffet à volonté et d’un jacuzzi à bord.
            C’est l’offre la plus complète, conçue pour une expérience de plongée plus confortable et plus exclusive.
          </p>

          <div class="offer-big__actions">
            <a class="btn btn--primary" href="contact.php">Réserver</a>
          </div>
        </div>
      </article>

    </div>
  </section>

</main>

<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-spacer"></div>
    <div class="footer-copy">
      © <?php echo date('Y'); ?> Bali Dive Center — Tous droits réservés
    </div>
    <nav class="footer-nav">
      <a class="footer-link" href="contact.php">Contact</a>
      <a class="footer-link" href="mentions-legales.php">Mentions légales</a>
    </nav>
  </div>
</footer>
</body>
</html>
