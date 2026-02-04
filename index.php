<?php
$pageTitle  = "Centre de plongée à Bali | Bali Dive Center";
$pageCss    = "css/index.css";
$activePage = "index";

include __DIR__ . "/includes/header.php";
?>

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
      <p>Partez à la découverte des fonds balinais avec Balidive. Entre récifs colorés, tombants impressionnants et rencontres inattendues, chaque plongée devient une petite aventure adaptée à votre niveau.</p>
      <p>Chaque sortie commence par un briefing simple et précis. Le matériel est prêt, l’équipe veille à votre sécurité.</p>
      <p>Que vous rêviez d’explorer des épaves ou de croiser les grands pélagiques, Balidive vous guide vers les meilleurs spots.</p>
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

<?php include __DIR__ . "/includes/footer.php"; ?>
