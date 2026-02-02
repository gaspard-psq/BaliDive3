<?php /* mentions-legales.php */ ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Mentions légales | Bali Dive Center</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/mentions-legales.css" />
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
    <a class="drawer-link" href="offres.php">Offres</a>
    <a class="drawer-link" href="catalogue.php">Catalogue</a>
    <a class="drawer-link" href="contact.php">Contact</a>
  </nav>
</header>

<main class="site-main">

  <section class="legal-hero">
    <div class="legal-hero__shade"></div>
    <div class="container legal-hero__content">
      <h1>Mentions légales</h1>
      <p>Informations relatives à l’éditeur et à l’utilisation du site Bali Dive Center.</p>
    </div>
  </section>

  <section class="legal-page">
    <div class="container">
      <div class="legal-card">

        <h2>1. Éditeur du site</h2>
        <p>
          Le site <strong>Bali Dive Center</strong> est édité par :
        </p>
        <ul>
          <li><strong>Responsables :</strong> Gaspard Pasquier et Aloïs Oriol</li>
          <li><strong>Adresse :</strong> Bali, Indonésie</li>
          <li><strong>Email :</strong> contactbalidive@gmail.com</li>
          <li><strong>Téléphone :</strong> 000000000</li>
          <li><strong>Directeurs de publication :</strong> Gaspard Pasquier et Aloïs Oriol</li>
        </ul>

        <h2>2. Hébergement</h2>
        <p>
          Le site est hébergé par :
        </p>
        <ul>
          <li><strong>Hébergeur :</strong> IUT de Chambéry</li>
          <li><strong>Adresse :</strong> Chambéry, France</li>
        </ul>

        <h2>3. Propriété intellectuelle</h2>
        <p>
          L’ensemble du contenu présent sur le site BaliDive (textes, images, vidéos, logos,
          éléments graphiques, structure, code source) est protégé par les lois relatives à la
          propriété intellectuelle.
        </p>
        <p>
          Toute reproduction, représentation, modification ou diffusion, totale ou partielle,
          sans autorisation écrite préalable, est strictement interdite.
        </p>

        <h2>4. Responsabilité</h2>
        <p>
          Les informations diffusées sur le site sont fournies à titre informatif. Malgré le soin
          apporté à leur rédaction, l’éditeur ne peut garantir l’exactitude ou l’exhaustivité des
          contenus.
        </p>
        <p>
          L’éditeur ne pourra être tenu responsable de l’utilisation faite des informations
          présentes sur le site ni des éventuels dommages directs ou indirects pouvant en découler.
        </p>

        <h2>5. Données personnelles</h2>
        <p>
          Les données personnelles collectées via le formulaire de contact (nom, adresse email,
          message) sont utilisées uniquement pour répondre aux demandes des utilisateurs.
        </p>
        <p>
          Aucune donnée personnelle n’est vendue, échangée ou transmise à des tiers.
          Conformément à la réglementation applicable, vous pouvez demander la suppression de vos
          données en écrivant à : <strong>contactbalidive@gmail.com</strong>.
        </p>

        <h2>6. Cookies</h2>
        <p>
          Le site Bali Dive Center n’utilise aucun cookie de suivi, de mesure d’audience ou de
          publicité.
        </p>

        <h2>7. Droit applicable</h2>
        <p>
          Les présentes mentions légales sont soumises au droit applicable au lieu
          d’établissement de l’éditeur. En cas de litige, une solution amiable sera privilégiée
          avant toute action judiciaire.
        </p>

        <p class="legal-updated">
          Dernière mise à jour : <?php echo date('d/m/Y'); ?>
        </p>

      </div>
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
