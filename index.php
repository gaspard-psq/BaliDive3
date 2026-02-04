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

<!-- CAROUSEL -->
<section class="home-carousel">
  <div class="container">
    <div class="home-carousel__head">
      <h2>Nos plongées en images</h2>
      <p>Faites défiler pour découvrir l’ambiance Balidive</p>
    </div>

    <div class="home-carousel__wrap">
      <button class="home-carousel__nav home-carousel__nav--prev" type="button" aria-label="Image précédente">‹</button>

      <div class="home-carousel__track" id="homeCarousel" tabindex="0" aria-label="Carrousel d’images">
        <figure class="home-carousel__slide">
          <img src="img/carou1.jpg" alt="Balidive - photo 1" loading="lazy">
        </figure>
        <figure class="home-carousel__slide">
          <img src="img/carou2.jpg" alt="Balidive - photo 2" loading="lazy">
        </figure>
        <figure class="home-carousel__slide">
          <img src="img/carou3.jpg" alt="Balidive - photo 3" loading="lazy">
        </figure>
        <figure class="home-carousel__slide">
          <img src="img/carou4.jpg" alt="Balidive - photo 4" loading="lazy">
        </figure>
      </div>

      <button class="home-carousel__nav home-carousel__nav--next" type="button" aria-label="Image suivante">›</button>
    </div>

    <div class="home-carousel__dots" aria-hidden="true">
      <span class="home-carousel__dot is-active"></span>
      <span class="home-carousel__dot"></span>
      <span class="home-carousel__dot"></span>
      <span class="home-carousel__dot"></span>
    </div>
  </div>
</section>

<script>
(function () {
  const track = document.getElementById("homeCarousel");
  if (!track) return;

  const prev = document.querySelector(".home-carousel__nav--prev");
  const next = document.querySelector(".home-carousel__nav--next");
  const dots = Array.from(document.querySelectorAll(".home-carousel__dot"));

  function slideWidth() {
    const first = track.querySelector(".home-carousel__slide");
    if (!first) return 0;
    const gap = parseFloat(getComputedStyle(track).columnGap || getComputedStyle(track).gap || 0);
    return first.getBoundingClientRect().width + gap;
  }

  function goBy(dir) {
    track.scrollBy({ left: dir * slideWidth(), behavior: "smooth" });
  }

  prev?.addEventListener("click", () => goBy(-1));
  next?.addEventListener("click", () => goBy(1));

  function updateDots() {
    const w = slideWidth() || 1;
    const index = Math.round(track.scrollLeft / w);
    const clamped = Math.max(0, Math.min(dots.length - 1, index));
    dots.forEach((d, i) => d.classList.toggle("is-active", i === clamped));
  }

  track.addEventListener("scroll", () => window.requestAnimationFrame(updateDots));
  window.addEventListener("resize", updateDots);
  updateDots();
})();
</script>

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
