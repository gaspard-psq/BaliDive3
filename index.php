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

<!-- SLIDESHOW -->
<section class="slideshow" aria-label="Galerie photos">
  <div class="slideshow__shade" aria-hidden="true"></div>

  <div class="container slideshow__content">
    <div class="slideshow__intro">
      <h2>Nos moments à Bali</h2>
      <p>Quelques images pour vous mettre dans l’ambiance avant de choisir votre offre.</p>
    </div>

    <div class="slideshow__wrap">
      <button class="slideshow__arrow slideshow__arrow--left" type="button" aria-label="Image précédente">
        ‹
      </button>

      <div class="slideshow__viewport" id="slideshowViewport">
        <div class="slideshow__track" id="slideshowTrack">
          <!-- Utilise des images qui existent déjà dans ton dossier img/ -->
          <article class="slide">
            <img src="img/plongee1.jpg" alt="Plongée - récifs" loading="lazy" />
          </article>

          <article class="slide">
            <img src="img/vue.png" alt="Vue - Bali" loading="lazy" />
          </article>

          <article class="slide">
            <img src="img/palme2.jpg" alt="Matériel - palmes" loading="lazy" />
          </article>

          <article class="slide">
            <img src="img/masque.jpg" alt="Matériel - masque" loading="lazy" />
          </article>

          <article class="slide">
            <img src="img/rashguard.jpg" alt="Rashguard" loading="lazy" />
          </article>
        </div>
      </div>

      <button class="slideshow__arrow slideshow__arrow--right" type="button" aria-label="Image suivante">
        ›
      </button>
    </div>

    <div class="slideshow__dots" id="slideshowDots" aria-label="Pagination du slideshow"></div>
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

<script>
  (function () {
    const wrap = document.querySelector(".slideshow__wrap");
    const viewport = document.getElementById("slideshowViewport");
    const track = document.getElementById("slideshowTrack");
    const dotsWrap = document.getElementById("slideshowDots");
    if (!wrap || !viewport || !track || !dotsWrap) return;

    const btnPrev = wrap.querySelector(".slideshow__arrow--left");
    const btnNext = wrap.querySelector(".slideshow__arrow--right");
    const slides = Array.from(track.querySelectorAll(".slide"));
    if (!slides.length) return;

    let index = 0;
    let slideW = 0;

    function measure() {
      slideW = viewport.clientWidth;
      track.style.transform = "translateX(" + (-index * slideW) + "px)";
    }

    function clamp(i) {
      if (i < 0) return 0;
      if (i > slides.length - 1) return slides.length - 1;
      return i;
    }

    function goTo(i) {
      index = clamp(i);
      track.style.transform = "translateX(" + (-index * slideW) + "px)";
      updateDots();
      updateArrows();
    }

    function updateArrows() {
      if (btnPrev) btnPrev.disabled = (index === 0);
      if (btnNext) btnNext.disabled = (index === slides.length - 1);
    }

    function buildDots() {
      dotsWrap.innerHTML = "";
      slides.forEach((_, i) => {
        const b = document.createElement("button");
        b.type = "button";
        b.className = "slideshow__dot";
        b.setAttribute("aria-label", "Aller à l'image " + (i + 1));
        b.addEventListener("click", () => goTo(i));
        dotsWrap.appendChild(b);
      });
    }

    function updateDots() {
      const dots = Array.from(dotsWrap.querySelectorAll(".slideshow__dot"));
      dots.forEach((d, i) => d.classList.toggle("is-active", i === index));
    }

    function next() { goTo(index + 1); }
    function prev() { goTo(index - 1); }

    if (btnNext) btnNext.addEventListener("click", next);
    if (btnPrev) btnPrev.addEventListener("click", prev);

    document.addEventListener("keydown", (e) => {
      // navigation clavier quand on est sur la page
      if (e.key === "ArrowRight") next();
      if (e.key === "ArrowLeft") prev();
    });

    // init
    buildDots();
    measure();
    updateDots();
    updateArrows();

    window.addEventListener("resize", () => {
      // recalcul simple (sans jitter)
      measure();
    });

    // swipe mobile (facultatif mais pratique)
    let startX = 0;
    let isDown = false;

    viewport.addEventListener("pointerdown", (e) => {
      isDown = true;
      startX = e.clientX;
      viewport.setPointerCapture(e.pointerId);
    });

    viewport.addEventListener("pointerup", (e) => {
      if (!isDown) return;
      isDown = false;
      const dx = e.clientX - startX;
      if (Math.abs(dx) < 40) return;
      if (dx < 0) next();
      else prev();
    });
  })();
</script>

<?php include __DIR__ . "/includes/footer.php"; ?>
