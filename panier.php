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
    if (in_array($base, $allowedBack, true)) {
      return $base . (parse_url($back, PHP_URL_QUERY) ? "?" . parse_url($back, PHP_URL_QUERY) : "");
    }
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

/* variables header */
$pageTitle  = "Panier | Bali Dive Center";
$pageCss    = "css/panier.css";
$activePage = "";            // pas de lien "Panier" dans le menu principal
$showCartPill = true;        // on affiche le badge panier

include __DIR__ . "/includes/header.php";
?>

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

<?php include __DIR__ . "/includes/footer.php"; ?>
