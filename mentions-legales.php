<?php
/* mentions-legales.php */

$pageTitle  = "Mentions légales | Bali Dive Center";
$pageCss    = "css/mentions-legales.css";
$activePage = "";           // aucune entrée "Mentions" dans le menu principal
$showCartPill = false;      // pas besoin du badge panier ici

include __DIR__ . "/includes/header.php";
?>

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

<?php include __DIR__ . "/includes/footer.php"; ?>
