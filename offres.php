<?php /* offres.php */ ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Offres de plongée | Bali Dive Center</title>

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
        <label for="nav-toggle" class="burger" aria-label="Ouvrir le menu" role="button">
          <span></span><span></span><span></span>
        </label>
      </div>

      <a class="brand" href="index.php" aria-label="Retour à l’accueil">
        <img src="img/logo.png" alt="Logo Bali Dive Center" class="brand-logo" />
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

      <a class="drawer-link" href="index.php">Accueil</a>
      <a class="drawer-link is-active" href="offres.php">Offres</a>
      <a class="drawer-link" href="catalogue.php">Catalogue</a>
      <a class="drawer-link" href="contact.php">Contact</a>
    </nav>
  </header>

  <main class="site-main">
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
                  <span class="price__value">89€</span>
                  <span class="price__unit">/ personne</span>
                </div>
                <div class="price__note">Matériel inclus</div>
              </div>
            </div>

            <div class="offer-big__body">
              <div class="specs">
                <div class="spec"><span class="spec__k">Durée</span><span class="spec__v">1 journée</span></div>
                <div class="spec"><span class="spec__k">Plongées</span><span class="spec__v">2 plongées</span></div>
                <div class="spec"><span class="spec__k">Niveau</span><span class="spec__v">Débutant → Intermédiaire</span></div>
                <div class="spec"><span class="spec__k">Sites</span><span class="spec__v">Sélection météo</span></div>
              </div>

              <ul class="bullets">
                <li>Briefing clair + encadrement rassurant</li>
                <li>Organisation simple, départs matinaux</li>
                <li>Petits groupes pour une plongée confortable</li>
                <li>Snacks & eau à bord</li>
              </ul>

              <div class="offer-big__actions">
                <a class="btn btn--primary" href="offre.php?plan=essentiel">Voir le détail</a>
                <a class="btn btn--ghost" href="catalogue.php">Voir le catalogue</a>
              </div>
            </div>
          </article>

          <article class="offer-big offer-big--accent">
            <div class="offer-big__badge">Le plus choisi</div>

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
                <div class="price__note">Matériel + guide inclus</div>
              </div>
            </div>

            <div class="offer-big__body">
              <div class="specs">
                <div class="spec"><span class="spec__k">Durée</span><span class="spec__v">2 jours</span></div>
                <div class="spec"><span class="spec__k">Plongées</span><span class="spec__v">4 plongées</span></div>
                <div class="spec"><span class="spec__k">Niveau</span><span class="spec__v">Intermédiaire</span></div>
                <div class="spec"><span class="spec__k">Sites</span><span class="spec__v">Récifs + tombants</span></div>
              </div>

              <ul class="bullets">
                <li>Conseils personnalisés pour progresser</li>
                <li>Rythme équilibré pour profiter à fond</li>
                <li>Choix de sites variés selon votre profil</li>
                <li>Assistance équipement et réglages</li>
              </ul>

              <div class="offer-big__actions">
                <a class="btn btn--primary" href="offre.php?plan=avance">Voir le détail</a>
                <a class="btn btn--ghost" href="contact.php">Nous contacter</a>
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
                <div class="price__note">Priorité réservation</div>
              </div>
            </div>

            <div class="offer-big__body">
              <div class="specs">
                <div class="spec"><span class="spec__k">Durée</span><span class="spec__v">3 jours</span></div>
                <div class="spec"><span class="spec__k">Plongées</span><span class="spec__v">6 plongées</span></div>
                <div class="spec"><span class="spec__k">Niveau</span><span class="spec__v">Intermédiaire → Avancé</span></div>
                <div class="spec"><span class="spec__k">Sites</span><span class="spec__v">Sélection sur mesure</span></div>
              </div>

              <ul class="bullets">
                <li>Flexibilité des horaires et priorités de réservation</li>
                <li>Sorties sélectionnées selon vos envies</li>
                <li>Confort maximal et accompagnement premium</li>
                <li>Options photo/vidéo sur demande</li>
              </ul>

              <div class="offer-big__actions">
                <a class="btn btn--primary" href="offre.php?plan=premium">Voir le détail</a>
                <a class="btn btn--ghost" href="contact.php">Demander un devis</a>
              </div>
            </div>
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
