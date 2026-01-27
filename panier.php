<?php
/* panier.php */
session_start();

$products = [
  "mask-aqua" => ["name"=>"Masque AquaView","price"=>39.90],
  "snorkel-flow" => ["name"=>"Tuba FlowDry","price"=>19.90],
  "fins-reef" => ["name"=>"Palmes ReefFlex","price"=>49.90],
  "rashguard-bali" => ["name"=>"Rashguard BaliDive","price"=>34.90],
  "torch-mini" => ["name"=>"Lampe MiniTorch","price"=>29.90],
  "bag-waterproof" => ["name"=>"Sac étanche OceanBag 10L","price"=>24.90],
  "tee-sunset" => ["name"=>"T-shirt souvenir “Sunset Bali”","price"=>22.00],
  "cap-wave" => ["name"=>"Casquette “Wave”","price"=>18.00],
  "sticker-pack" => ["name"=>"Pack stickers BaliDive","price"=>8.50],
  "postcards" => ["name"=>"Cartes postales “Bali Underwater”","price"=>9.90],
  "bracelet-coral" => ["name"=>"Bracelet “Coral”","price"=>12.00],
  "mug-dive" => ["name"=>"Mug “Dive More”","price"=>14.90],
  "offre-essentiel" => ["name" => "Offre essentiel", "price" => 89.00],
  "offre-avance"   => ["name" => "Offre avancé",   "price" => 149.00],
  "offre-premium"  => ["name" => "Offre premium",  "price" => 249.00],
];

if (!isset($_SESSION["cart"])) $_SESSION["cart"] = [];

$allowedBack = ["index.php","offres.php","catalogue.php","contact.php","produit.php","panier.php"];

function safe_back_url(array $allowedBack): string {
  $back = $_GET["back"] ?? "";
  if ($back) {
    $base = basename(parse_url($back, PHP_URL_PATH) ?? "");
    if (in_array($base, $allowedBack, true)) return $base . (parse_url($back, PHP_URL_QUERY) ? "?" . parse_url($back, PHP_URL_QUERY) : "");
  }
  $ref = $_SERVER["HTTP_REFERER"] ?? "";
  if ($ref) {
    $base = basename(parse_url($ref, PHP_URL_PATH) ?? "");
    if (in_array($base, $allowedBack, true)) {
      $q = parse_url($ref, PHP_URL_QUERY);
      return $base . ($q ? "?" . $q : "");
    }
  }
  return "catalogue.php";
}

if (isset($_GET["add"]) && isset($products[$_GET["add"]])) {
  $id = $_GET["add"];
  $_SESSION["cart"][$id] = ($_SESSION["cart"][$id] ?? 0) + 1;
  $_SESSION["flash"] = "✅ “" . $products[$id]["name"] . "” a été ajouté au panier.";
  header("Location: " . safe_back_url($allowedBack));
  exit;
}

if (isset($_GET["remove"])) {
  unset($_SESSION["cart"][$_GET["remove"]]);
  $_SESSION["flash"] = "🗑️ Article supprimé du panier.";
  header("Location: panier.php");
  exit;
}

if (isset($_GET["dec"]) && isset($_SESSION["cart"][$_GET["dec"]])) {
  $id = $_GET["dec"];
  $_SESSION["cart"][$id] -= 1;
  if ($_SESSION["cart"][$id] <= 0) unset($_SESSION["cart"][$id]);
  header("Location: panier.php");
  exit;
}

if (isset($_GET["inc"]) && isset($products[$_GET["inc"]])) {
  $id = $_GET["inc"];
  $_SESSION["cart"][$id] = ($_SESSION["cart"][$id] ?? 0) + 1;
  header("Location: panier.php");
  exit;
}

if (isset($_GET["clear"])) {
  $_SESSION["cart"] = [];
  $_SESSION["flash"] = "🧹 Panier vidé.";
  header("Location: panier.php");
  exit;
}

$cartCount = array_sum($_SESSION["cart"]);
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Panier | Bali Dive Center</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/panier.css" />
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
          <span class="cart-pill" aria-label="Nombre d’articles"><?php echo (int)$cartCount; ?></span>
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
      <a class="drawer-link" href="contact.php">Contact</a>
      <a class="drawer-link is-active" href="panier.php">Panier</a>
    </nav>
  </header>

  <main class="site-main">
    <section class="cart-hero" aria-label="Panier">
      <div class="cart-hero__shade" aria-hidden="true"></div>
      <div class="container cart-hero__content">
        <h1>Votre panier</h1>
        <p>Vérifiez vos articles avant de finaliser.</p>
      </div>
    </section>

    <section class="cart-page" aria-label="Contenu du panier">
      <div class="container">

        <?php if (!empty($_SESSION["flash"])): ?>
          <div class="flash"><?php echo htmlspecialchars($_SESSION["flash"]); ?></div>
          <?php unset($_SESSION["flash"]); ?>
        <?php endif; ?>

        <?php if (empty($_SESSION["cart"])): ?>
          <div class="cart-empty">
            <p>Votre panier est vide.</p>
            <a class="btn btn--primary" href="catalogue.php">Voir le catalogue</a>
          </div>
        <?php else: ?>
          <div class="cart-card">
            <div class="cart-table-wrap">
              <table class="cart-table">
                <thead>
                  <tr>
                    <th>Produit</th>
                    <th class="t-center">Qté</th>
                    <th class="t-right">Prix</th>
                    <th class="t-right">Total</th>
                    <th class="t-center"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $total = 0; ?>
                  <?php foreach ($_SESSION["cart"] as $id => $qty): ?>
                    <?php if (!isset($products[$id])) continue; ?>
                    <?php
                      $p = $products[$id];
                      $line = $p["price"] * $qty;
                      $total += $line;
                    ?>
                    <tr>
                      <td class="prod">
                        <div class="prod__name"><?php echo htmlspecialchars($p["name"]); ?></div>
                        <div class="prod__id"><?php echo htmlspecialchars($id); ?></div>
                      </td>

                      <td class="t-center">
                        <div class="qty">
                          <a class="qty__btn" href="panier.php?dec=<?php echo urlencode($id); ?>" aria-label="Diminuer">−</a>
                          <span class="qty__val"><?php echo (int)$qty; ?></span>
                          <a class="qty__btn" href="panier.php?inc=<?php echo urlencode($id); ?>" aria-label="Augmenter">+</a>
                        </div>
                      </td>

                      <td class="t-right"><?php echo number_format($p["price"], 2, ",", " "); ?> €</td>
                      <td class="t-right"><?php echo number_format($line, 2, ",", " "); ?> €</td>

                      <td class="t-center">
                        <a class="remove" href="panier.php?remove=<?php echo urlencode($id); ?>" aria-label="Supprimer">✕</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

            <div class="cart-summary">
              <div class="summary-line">
                <span>Sous-total</span>
                <strong><?php echo number_format($total, 2, ",", " "); ?> €</strong>
              </div>
              <div class="summary-line">
                <span>Livraison</span>
                <strong>—</strong>
              </div>
              <div class="summary-total">
                <span>Total</span>
                <strong><?php echo number_format($total, 2, ",", " "); ?> €</strong>
              </div>

              <div class="summary-actions">
                <a class="btn btn--ghost" href="catalogue.php">Continuer mes achats</a>
                <a class="btn btn--ghost" href="panier.php?clear=1">Vider le panier</a>
                <a class="btn btn--primary" href="#">Valider la commande</a>
              </div>
            </div>
          </div>
        <?php endif; ?>

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
