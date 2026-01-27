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
  <div class="header-inner">
    <div class="header-left">
      <label class="burger">
        <span></span><span></span><span></span>
      </label>
    </div>

    <a class="brand" href="index.php">
      <img src="img/logo.png" alt="Logo BaliDive" class="brand-logo">
    </a>

    <div class="header-right">
      <a class="cart-link" href="panier.php">🛒 Panier</a>
    </div>
  </div>
</header>

<main>

  <!-- HERO VIDEO -->
  <section class="hero-video">
    <video class="hero-video__media" autoplay muted loop playsinline>
      <source src="img/videoentre.mp4" type="video/mp4">
    </video>
    <div class="hero-video__shade"></div>
    <div class="hero-video__content">
      <h2>Bienvenue sous les tropiques</h2>
      <p>Explorez les fonds marins balinais avec BaliDive</p>
    </div>
  </section>

  <!-- PRESENTATION -->
  <section class="section section--full">
    <div class="container split">
      <div>
        <h2>BaliDive</h2>
        <p>Découvrez les plus beaux spots de Bali accompagnés par des professionnels passionnés.</p>
        <p>Sécurité, plaisir et exploration sont au cœur de chaque plongée.</p>
      </div>
      <div>
        <img src="img/plongee1.jpg" alt="Plongée Bali" class="split__img">
      </div>
    </div>
  </section>

  <!-- OFFRES -->
  <section class="offers">
    <div class="offers__shade"></div>

    <div class="container offers__content">
      <div class="offers__intro">
        <h2>Découvrez nos offres</h2>
        <p>Choisissez la formule qui vous correspond</p>
      </div>

      <div class="offers__grid">

        <article class="offer-card">
          <h3>Offre essentiel</h3>
          <div class="offer-thumb">
            <img src="img/pres1.png" alt="">
          </div>
          <ul class="offer-list">
            <li>Organisation simple et rapide</li>
            <li>Spots adaptés à la météo</li>
            <li>Briefing clair et rassurant</li>
          </ul>
          <a class="offer-btn" href="#">En savoir plus</a>
        </article>

        <article class="offer-card">
          <h3>Offre avancé</h3>
          <div class="offer-thumb">
            <img src="img/pres2.png" alt="">
          </div>
          <ul class="offer-list">
            <li>Plus de plongées incluses</li>
            <li>Conseils personnalisés</li>
            <li>Progression encadrée</li>
          </ul>
          <a class="offer-btn" href="#">En savoir plus</a>
        </article>

        <article class="offer-card">
          <h3>Offre premium</h3>
          <div class="offer-thumb">
            <img src="img/pres3.png" alt="">
          </div>
          <ul class="offer-list">
            <li>Confort maximal</li>
            <li>Priorité de réservation</li>
            <li>Sorties sur mesure</li>
          </ul>
          <a class="offer-btn" href="#">En savoir plus</a>
        </article>

      </div>
    </div>
  </section>

</main>

<footer class="site-footer">
  <p>© <?php echo date('Y'); ?> Bali Dive Center</p>
</footer>

</body>
</html>
