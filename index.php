<?php
$pageTitle  = "Centre de plongée à Bali | Bali Dive Center";
$pageCss    = "css/index.scss";
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

<!-- ✅ CAROUSEL (4 images: carou1 -> carou4) -->
<section class="section section--full">
  <div class="container">
    <h2 style="text-align:center;margin-bottom:1rem;">Nos spots en images</h2>

    <div class="carou" aria-label="Carrousel d'images">
      <button class="carou__btn carou__btn--prev" type="button" aria-label="Image précédente">
        &#10094;
      </button>

      <div class="carou__viewport">
        <div class="carou__track">
          <figure class="carou__slide">
            <img src="img/carou1.jpg" alt="carou1" class="carou__img" />
          </figure>
          <figure class="carou__slide">
            <img src="img/carou2.jpg" alt="carou2" class="carou__img" />
          </figure>
          <figure class="carou__slide">
            <img src="img/carou3.jpg" alt="carou3" class="carou__img" />
          </figure>
          <figure class="carou__slide">
            <img src="img/carou4.jpg" alt="carou4" class="carou__img" />
          </figure>
        </div>
      </div>

      <button class="carou__btn carou__btn--next" type="button" aria-label="Image suivante">
        &#10095;
      </button>

      <div class="carou__dots" role="tablist" aria-label="Pagination du carrousel">
        <button class="carou__dot is-active" type="button" aria-label="Aller à l'image 1"></button>
        <button class="carou__dot" type="button" aria-label="Aller à l'image 2"></button>
        <button class="carou__dot" type="button" aria-label="Aller à l'image 3"></button>
        <button class="carou__dot" type="button" aria-label="Aller à l'image 4"></button>
      </div>
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

<!-- ✅ JS du carrousel -->
<script>
(() => {
  const root = document.querySelector('.carou');
  if (!root) return;

  const track = root.querySelector('.carou__track');
  const slides = Array.from(root.querySelectorAll('.carou__slide'));
  const prevBtn = root.querySelector('.carou__btn--prev');
  const nextBtn = root.querySelector('.carou__btn--next');
  const dots = Array.from(root.querySelectorAll('.carou__dot'));

  let index = 0;

  const update = () => {
    track.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach((d, i) => d.classList.toggle('is-active', i === index));
    prevBtn.disabled = slides.length <= 1;
    nextBtn.disabled = slides.length <= 1;
  };

  const go = (i) => {
    index = (i + slides.length) % slides.length;
    update();
  };

  prevBtn.addEventListener('click', () => go(index - 1));
  nextBtn.addEventListener('click', () => go(index + 1));

  dots.forEach((dot, i) => dot.addEventListener('click', () => go(i)));

  // clavier (quand le carrousel est focus)
  root.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') go(index - 1);
    if (e.key === 'ArrowRight') go(index + 1);
  });

  // swipe mobile
  let startX = 0;
  let isDown = false;

  const onDown = (x) => { isDown = true; startX = x; };
  const onUp = (x) => {
    if (!isDown) return;
    isDown = false;
    const dx = x - startX;
    if (Math.abs(dx) < 40) return;
    if (dx > 0) go(index - 1);
    else go(index + 1);
  };

  root.addEventListener('touchstart', (e) => onDown(e.touches[0].clientX), { passive: true });
  root.addEventListener('touchend', (e) => onUp(e.changedTouches[0].clientX));

  update();
})();
</script>

<?php include __DIR__ . "/includes/footer.php"; ?>
