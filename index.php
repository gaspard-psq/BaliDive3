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
<section class="home-carousel" aria-label="Galerie BaliDive">
  <div class="home-carousel__viewport" data-carousel>
    <div class="home-carousel__track">
      <figure class="home-carousel__slide">
        <img src="img/carou1.jpg" alt="BaliDive - Photo 1" loading="lazy">
      </figure>
      <figure class="home-carousel__slide">
        <img src="img/carou2.jpg" alt="BaliDive - Photo 2" loading="lazy">
      </figure>
      <figure class="home-carousel__slide">
        <img src="img/carou3.jpg" alt="BaliDive - Photo 3" loading="lazy">
      </figure>
      <figure class="home-carousel__slide">
        <img src="img/carou4.jpg" alt="BaliDive - Photo 4" loading="lazy">
      </figure>
    </div>

    <button class="home-carousel__btn home-carousel__btn--prev" type="button" aria-label="Image précédente" data-prev>
      ‹
    </button>
    <button class="home-carousel__btn home-carousel__btn--next" type="button" aria-label="Image suivante" data-next>
      ›
    </button>

    <div class="home-carousel__dots" role="tablist" aria-label="Pagination" data-dots></div>
  </div>
</section>

<script>
(() => {
  const root = document.querySelector('[data-carousel]');
  if (!root) return;

  const track = root.querySelector('.home-carousel__track');
  const slides = Array.from(root.querySelectorAll('.home-carousel__slide'));
  const btnPrev = root.querySelector('[data-prev]');
  const btnNext = root.querySelector('[data-next]');
  const dotsWrap = root.querySelector('[data-dots]');

  let index = 0;
  let timer = null;

  // Dots
  const dots = slides.map((_, i) => {
    const b = document.createElement('button');
    b.type = 'button';
    b.className = 'home-carousel__dot';
    b.setAttribute('aria-label', `Aller à l'image ${i + 1}`);
    b.addEventListener('click', () => goTo(i));
    dotsWrap.appendChild(b);
    return b;
  });

  function update() {
    track.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach((d, i) => d.toggleAttribute('data-active', i === index));
  }

  function goTo(i) {
    index = (i + slides.length) % slides.length;
    update();
    restart();
  }

  function next() { goTo(index + 1); }
  function prev() { goTo(index - 1); }

  btnNext.addEventListener('click', next);
  btnPrev.addEventListener('click', prev);

  // Auto-play (pause au survol / focus)
  function start() { timer = setInterval(next, 4500); }
  function stop() { if (timer) clearInterval(timer); timer = null; }
  function restart() { stop(); start(); }

  root.addEventListener('mouseenter', stop);
  root.addEventListener('mouseleave', start);
  root.addEventListener('focusin', stop);
  root.addEventListener('focusout', start);

  // Swipe mobile
  let startX = 0;
  root.addEventListener('touchstart', (e) => { startX = e.touches[0].clientX; }, {passive:true});
  root.addEventListener('touchend', (e) => {
    const dx = e.changedTouches[0].clientX - startX;
    if (Math.abs(dx) > 40) (dx < 0 ? next() : prev());
  }, {passive:true});

  // Init
  update();
  start();
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
