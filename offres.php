<?php
$pageTitle  = "Offres de plongée | Bali Dive Center";
$pageCss    = "css/offres.css";
$activePage = "offres";

include __DIR__ . "/includes/header.php";
?>

<section class="offers-hero" aria-label="Présentation des offres">
  <div class="offers-hero__shade" aria-hidden="true"></div>
  <div class="container offers-hero__content">
    <h1>Nos offres</h1>
    <p>Choisissez votre formule et vivez Bali sous l’eau, en toute sécurité.</p>
  </div>
</section>

<section class="offers-page" aria-label="Liste des offres">
  <div class="container">
    <div class="offers-page__grid">

      <article class="offer-big">
        <div class="offer-big__top">
          <div class="offer-big__title">
            <h2>Offre essentiel</h2>
            <p>Idéale pour démarrer et profiter des plus beaux spots.</p>
          </div>

          <div class="offer-big__price">
            <div class="price">
              <span class="price__value">69€</span>
              <span class="price__unit">/ personne</span>
            </div>
          </div>
        </div>

        <div class="offer-big__body">
          <div class="specs">
            <div class="spec">
              <span class="spec__k">Durée</span>
              <span class="spec__v">1 à 2 heures</span>
            </div>
            <div class="spec">
              <span class="spec__k">Niveau</span>
              <span class="spec__v">Débutant → Intermédiaire</span>
            </div>
            <div class="spec">
              <span class="spec__k">Lieux</span>
              <span class="spec__v">Faune locale</span>
            </div>
          </div>

          <div class="offer-text">
            Cette formule propose une plongée encadrée de 1 à 2 heures, accessible même aux débutants.
            Elle se déroule depuis un bateau confortable pouvant accueillir 6 à 8 personnes. Le parcours
            permet d’explorer les récifs et la faune locale. De l’eau est fournie à bord. Cette offre
            reste simple mais suffisante pour une première expérience.
          </div>

          <div class="offer-big__actions">
            <button type="button" class="btn btn--primary js-add-offer" data-id="offre-essentiel">Réserver</button>
          </div>
        </div>
      </article>

      <article class="offer-big">
        <div class="offer-big__top">
          <div class="offer-big__title">
            <h2>Offre avancé</h2>
            <p>Plus de plongées, plus de variété, progression encadrée.</p>
          </div>

          <div class="offer-big__price">
            <div class="price">
              <span class="price__value">149€</span>
              <span class="price__unit">/ personne</span>
            </div>
          </div>
        </div>

        <div class="offer-big__body">
          <div class="specs">
            <div class="spec">
              <span class="spec__k">Durée</span>
              <span class="spec__v">4 heures</span>
            </div>
            <div class="spec">
              <span class="spec__k">Niveau</span>
              <span class="spec__v">Intermédiaire</span>
            </div>
            <div class="spec">
              <span class="spec__k">Lieux</span>
              <span class="spec__v">Récifs + tombants</span>
            </div>
          </div>

          <div class="offer-text">
            Cette option s’étend sur une demi-journée d’environ 4 heures. Elle inclut la visite de deux
            sites différents et l’accompagnement avec des conseils personnalisés. Le bateau, plus spacieux,
            peut accueillir 10 à 12 personnes et dispose de toilettes à bord. Une collation et des boissons
            sont fournies. L’offre est plus complète et mieux adaptée aux personnes cherchant une exploration
            plus soutenue.
          </div>

          <div class="offer-big__actions">
            <button type="button" class="btn btn--primary js-add-offer" data-id="offre-avance">Réserver</button>
          </div>
        </div>
      </article>

      <article class="offer-big">
        <div class="offer-big__top">
          <div class="offer-big__title">
            <h2>Offre premium</h2>
            <p>Expérience complète et flexible, pensée sur mesure.</p>
          </div>

          <div class="offer-big__price">
            <div class="price">
              <span class="price__value">249€</span>
              <span class="price__unit">/ personne</span>
            </div>
          </div>
        </div>

        <div class="offer-big__body">
          <div class="specs">
            <div class="spec">
              <span class="spec__k">Durée</span>
              <span class="spec__v">8 heures</span>
            </div>
            <div class="spec">
              <span class="spec__k">Niveau</span>
              <span class="spec__v">Intermédiaire → Avancé</span>
            </div>
            <div class="spec">
              <span class="spec__k">Lieux</span>
              <span class="spec__v">Sélection sur mesure</span>
            </div>
          </div>

          <div class="offer-text">
            Cette formule couvre une journée entière d’environ 8 heures. Elle propose la visite de trois sites,
            avec un encadrement personnalisé. Le déplacement se fait sur un yacht équipé d’un buffet à volonté
            et d’un jacuzzi à bord. C’est l’offre la plus complète, conçue pour une expérience de plongée plus
            confortable et plus exclusive.
          </div>

          <div class="offer-big__actions">
            <button type="button" class="btn btn--primary js-add-offer" data-id="offre-premium">Réserver</button>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>

<div class="toast" id="toast" aria-live="polite" aria-atomic="true"></div>

<?php include __DIR__ . "/includes/footer.php"; ?>
