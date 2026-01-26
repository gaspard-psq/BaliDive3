<?php /* index.php */ ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Centre de plongée à Bali | Bali Dive Center</title>

  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/index.css" />
</head>

<body>
  <header class="site-header">
    <div class="header-inner">
      <a class="brand" href="index.php" aria-label="Retour à l’accueil">
        <img src="img/logo.png" alt="Logo Bali Dive Center" class="brand-logo" />
      </a>

      <h1 class="site-title">Bali Dive Center</h1>

      <a class="cart-link" href="panier.php" aria-label="Accéder au panier">
        <span class="cart-icon" aria-hidden="true">🛒</span>
        <span class="cart-text">Panier</span>
      </a>
    </div>

    <nav class="site-nav" aria-label="Navigation principale">
      <a class="nav-link is-active" href="index.php">Accueil</a>
      <a class="nav-link" href="catalogue.php">Produits</a>
      <a class="nav-link" href="contact.php">Contact</a>
    </nav>
  </header>

  <main class="site-main">
    <section class="hero">
      <div class="container">
        <h2>Bienvenue sous les tropiques</h2>
        <p>
          Découvrez la plongée à Bali avec une équipe passionnée, des briefings clairs et une ambiance conviviale.
          Que vous soyez débutant ou déjà certifié, nous vous accompagnons pour vivre des immersions inoubliables.
        </p>
        <p>
          Nos sorties privilégient la sécurité, le respect du milieu marin et le plaisir de l’exploration.
          Épaves, récifs colorés, tombants, macro et grands pélagiques : Bali offre une diversité exceptionnelle.
        </p>
        <p>
          Matériel entretenu, groupes à taille humaine, sites choisis selon la météo et votre niveau :
          tout est pensé pour que vous profitiez pleinement de chaque plongée.
        </p>
      </div>
    </section>

    <section class="content">
      <div class="container grid">
        <div class="card">
          <h2>Une expérience sur mesure</h2>
          <p>
            Vous cherchez une première immersion, un pack de plongées loisir ou un programme plus complet ?
            Notre catalogue regroupe trois gammes d’offres adaptées à votre rythme et à vos envies.
          </p>
          <p>
            Avant chaque mise à l’eau, nous faisons un briefing détaillé : plan du site, profondeur, conditions,
            procédures de sécurité et points d’intérêt. Vous plongez ainsi en toute confiance.
          </p>
          <p>
            Entre deux sorties, profitez d’un moment de détente : conseils, logbook, photos, et recommandations
            de spots à découvrir autour de notre base.
          </p>
          <a class="btn" href="catalogue.php">Voir le catalogue</a>
        </div>

        <figure class="video-block">
          <video class="dive-video" controls preload="metadata" playsinline>
            <source src="img/plongee-bali.mp4" type="video/mp4" />
            Votre navigateur ne supporte pas la lecture vidéo.
          </video>
          <figcaption>
            Vidéo : aperçu d’une plongée sur récif à Bali — coraux, bancs de poissons tropicaux et ambiance grand bleu.
          </figcaption>
        </figure>
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
