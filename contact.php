<?php /* contact.php */ ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Contact | Bali Dive Center</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/contact.css" />
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
      <a class="drawer-link" href="offres.php">Offres</a>
      <a class="drawer-link" href="catalogue.php">Catalogue</a>
      <a class="drawer-link is-active" href="contact.php">Contact</a>
    </nav>
  </header>

  <?php
    $sent = false;
    $errors = [];

    $name = "";
    $email = "";
    $subject = "";
    $message = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $name = trim($_POST["name"] ?? "");
      $email = trim($_POST["email"] ?? "");
      $subject = trim($_POST["subject"] ?? "");
      $message = trim($_POST["message"] ?? "");

      if ($name === "") $errors[] = "Veuillez indiquer votre nom.";
      if ($email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Veuillez indiquer un email valide.";
      if ($subject === "") $errors[] = "Veuillez indiquer un sujet.";
      if ($message === "") $errors[] = "Veuillez écrire votre message.";

      if (!$errors) {
        $to = "contact@balidive.local";
        $safe_subject = "BaliDive - " . $subject;

        $body = "Nom: " . $name . "\n";
        $body .= "Email: " . $email . "\n\n";
        $body .= "Message:\n" . $message . "\n";

        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";

        @mail($to, $safe_subject, $body, $headers);
        $sent = true;

        $name = $email = $subject = $message = "";
      }
    }
  ?>

  <main class="site-main">
    <section class="contact-hero" aria-label="Contact">
      <div class="contact-hero__shade" aria-hidden="true"></div>
      <div class="container contact-hero__content">
        <h1>Contact</h1>
        <p>Une question sur nos plongées, nos offres ou le matériel ? Écrivez-nous.</p>
      </div>
    </section>

    <section class="contact-page" aria-label="Formulaire de contact">
      <div class="container">
        <div class="contact-grid">
          <div class="contact-card">
            <h2>Envoyez-nous un message</h2>

            <?php if ($sent): ?>
              <div class="notice notice--ok">Message envoyé. Nous vous répondrons dès que possible.</div>
            <?php endif; ?>

            <?php if ($errors): ?>
              <div class="notice notice--err">
                <ul>
                  <?php foreach ($errors as $e): ?>
                    <li><?php echo htmlspecialchars($e); ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>

            <form class="contact-form" method="post" action="contact.php" novalidate>
              <div class="field">
                <label for="name">Nom</label>
                <input id="name" name="name" type="text" autocomplete="name" required value="<?php echo htmlspecialchars($name); ?>">
              </div>

              <div class="field">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" autocomplete="email" required value="<?php echo htmlspecialchars($email); ?>">
              </div>

              <div class="field">
                <label for="subject">Sujet</label>
                <input id="subject" name="subject" type="text" required value="<?php echo htmlspecialchars($subject); ?>">
              </div>

              <div class="field">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="7" required><?php echo htmlspecialchars($message); ?></textarea>
              </div>

              <button class="btn btn--primary" type="submit">Envoyer</button>
            </form>
          </div>

          <aside class="info-card" aria-label="Coordonnées">
            <h2>Coordonnées</h2>

            <div class="info-list">
              <div class="info-item">
                <span class="info-k">Lieu</span>
                <span class="info-v">Bali, Indonésie</span>
              </div>

              <div class="info-item">
                <span class="info-k">Horaires</span>
                <span class="info-v">Tous les jours — 8h à 18h</span>
              </div>

              <div class="info-item">
                <span class="info-k">Téléphone</span>
                <span class="info-v">+62 000 000 000</span>
              </div>

              <div class="info-item">
                <span class="info-k">Email</span>
                <span class="info-v">contact@balidive.local</span>
              </div>
            </div>

            <div class="map-card" aria-label="Carte">
              <div class="map-placeholder">
                <div class="map-title">Carte</div>
                <div class="map-sub">Ajoutez une carte Google Maps ici</div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>
  </main>

<!-- REMPLACE TON FOOTER PAR CELUI-CI SUR TOUTES LES PAGES -->
<footer class="site-footer wave-footer">
  <div class="wave-footer__waves" aria-hidden="true">
    <svg class="wave-footer__svg" viewBox="0 0 1200 160" preserveAspectRatio="none">
      <defs>
        <linearGradient id="grad1" x1="0" y1="0" x2="1" y2="0">
          <stop offset="0%" stop-color="#1dd6c1" stop-opacity="0.55"/>
          <stop offset="100%" stop-color="#2f7dff" stop-opacity="0.45"/>
        </linearGradient>
        <linearGradient id="grad2" x1="0" y1="0" x2="1" y2="0">
          <stop offset="0%" stop-color="#2f7dff" stop-opacity="0.45"/>
          <stop offset="100%" stop-color="#1dd6c1" stop-opacity="0.35"/>
        </linearGradient>
        <linearGradient id="grad3" x1="0" y1="0" x2="1" y2="0">
          <stop offset="0%" stop-color="#0b1220" stop-opacity="0.55"/>
          <stop offset="100%" stop-color="#1dd6c1" stop-opacity="0.25"/>
        </linearGradient>

        <path id="wavePath" d="M0,70 C150,120 350,20 600,70 C850,120 1050,20 1200,70 L1200,160 L0,160 Z"></path>
      </defs>

      <g class="wave wave--back">
        <use href="#wavePath" x="0" y="0" fill="url(#grad3)"></use>
        <use href="#wavePath" x="1200" y="0" fill="url(#grad3)"></use>
      </g>

      <g class="wave wave--mid">
        <use href="#wavePath" x="0" y="8" fill="url(#grad2)"></use>
        <use href="#wavePath" x="1200" y="8" fill="url(#grad2)"></use>
      </g>

      <g class="wave wave--front">
        <use href="#wavePath" x="0" y="16" fill="url(#grad1)"></use>
        <use href="#wavePath" x="1200" y="16" fill="url(#grad1)"></use>
      </g>
    </svg>

    <a class="wave-footer__logo" href="#top" aria-label="Remonter en haut de la page">
      <img src="img/logo.png" alt="Logo Bali Dive Center" />
    </a>
  </div>

  <div class="footer-inner wave-footer__inner">
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
