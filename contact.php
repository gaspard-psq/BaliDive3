<?php
/* contact.php */

$pageTitle  = "Contact | Bali Dive Center";
$pageCss    = "css/contact.css";
$activePage = "contact";
$showCartPill = false; // pas de compteur panier ici

/* logique formulaire */
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

    $body  = "Nom: " . $name . "\n";
    $body .= "Email: " . $email . "\n\n";
    $body .= "Message:\n" . $message . "\n";

    $headers  = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    @mail($to, $safe_subject, $body, $headers);
    $sent = true;

    $name = $email = $subject = $message = "";
  }
}

/* include header */
include __DIR__ . "/includes/header.php";
?>

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
          <div class="notice notice--ok">
            Message envoyé. Nous vous répondrons dès que possible.
          </div>
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
            <input id="name" name="name" type="text" autocomplete="name" required
                   value="<?php echo htmlspecialchars($name); ?>">
          </div>

          <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" autocomplete="email" required
                   value="<?php echo htmlspecialchars($email); ?>">
          </div>

          <div class="field">
            <label for="subject">Sujet</label>
            <input id="subject" name="subject" type="text" required
                   value="<?php echo htmlspecialchars($subject); ?>">
          </div>

          <div class="field">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="7" required><?php
              echo htmlspecialchars($message);
            ?></textarea>
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

<?php include __DIR__ . "/includes/footer.php"; ?>
