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

$maskColors = [
  "noir"  => "Noir",
  "bleu"  => "Bleu",
  "rouge" => "Rouge",
  "vert"  => "Vert",
];

if (!isset($_SESSION["cart"])) $_SESSION["cart"] = [];

/* Helpers */
function parse_cart_key(string $key): array {
  // retourne [baseId, color|null]
  if (strpos($key, "|") !== false) {
    $parts = explode("|", $key, 2);
    return [$parts[0], $parts[1] !== "" ? $parts[1] : null];
  }
  return [$key, null];
}

function normalize_cart_key(string $key, array $maskColors): string {
  // si on a "mask-aqua" sans couleur -> on force "mask-aqua|noir"
  [$base, $color] = parse_cart_key($key);
  if ($base === "mask-aqua") {
    if (!$color || !isset($maskColors[$color])) $color = "noir";
    return $base . "|" . $color;
  }
  return $base;
}

/* normalisation du panier (au cas où un ancien panier contient mask-aqua sans couleur) */
if (!empty($_SESSION["cart"])) {
  $newCart = [];
  foreach ($_SESSION["cart"] as $k => $qty) {
    $nk = normalize_cart_key((string)$k, $maskColors);
    $newCart[$nk] = ($newCart[$nk] ?? 0) + (int)$qty;
  }
  $_SESSION["cart"] = $newCart;
}

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

/* ✅ AJOUT depuis URL (si tu utilises ?add=...) */
if (isset($_GET["add"])) {
  $incoming = (string)$_GET["add"];
  [$base, $color] = parse_cart_key($incoming);

  if (isset($products[$base])) {
    $key = $incoming;

    if ($base === "mask-aqua") {
      $color = isset($maskColors[$color]) ? $color : "noir";
      $key = $base . "|" . $color;
    } else {
      $key = $base;
    }

    $_SESSION["cart"][$key] = ($_SESSION["cart"][$key] ?? 0) + 1;
    $_SESSION["flash"] = "✅ “" . $products[$base]["name"] . "” a été ajouté au panier.";
    header("Location: " . safe_back_url($allowedBack));
    exit;
  }
}

/* ✅ CHANGER COULEUR (uniquement mask-aqua) */
if (isset($_GET["set_color"]) && isset($_GET["id"])) {
  $newColor = (string)$_GET["set_color"];
  $oldKey = (string)$_GET["id"];

  [$base, $color] = parse_cart_key($oldKey);
  if ($base === "mask-aqua" && isset($maskColors[$newColor]) && isset($_SESSION["cart"][$oldKey])) {
    $qty = (int)$_SESSION["cart"][$oldKey];
    unset($_SESSION["cart"][$oldKey]);

    $newKey = $base . "|" . $newColor;
    $_SESSION["cart"][$newKey] = ($_SESSION["cart"][$newKey] ?? 0) + $qty;

    $_SESSION["flash"] = "🎨 Couleur du masque mise à jour : " . $maskColors[$newColor] . ".";
  }

  header("Location: panier.php");
  exit;
}

/* ✅ SUPPRESSION */
if (isset($_GET["remove"])) {
  $key = (string)$_GET["remove"];
  unset($_SESSION["cart"][$key]);
  $_SESSION["flash"] = "🗑️ Article supprimé du panier.";
  header("Location: panier.php");
  exit;
}

/* ✅ -1 */
if (isset($_GET["dec"]) && isset($_SESSION["cart"][$_GET["dec"]])) {
  $key = (string)$_GET["dec"];
  $_SESSION["cart"][$key] -= 1;
  if ($_SESSION["cart"][$key] <= 0) unset($_SESSION["cart"][$key]);
  header("Location: panier.php");
  exit;
}

/* ✅ +1 (valide seulement si produit de base existe) */
if (isset($_GET["inc"])) {
  $key = (string)$_GET["inc"];
  [$base, $color] = parse_cart_key($key);

  if (isset($products[$base])) {
    $realKey = $key;

    if ($base === "mask-aqua") {
      $color = isset($maskColors[$color]) ? $color : "noir";
      $realKey = $base . "|" . $color;
    } else {
      $realKey = $base;
    }

    $_SESSION["cart"][$realKey] = ($_SESSION["cart"][$realKey] ?? 0) + 1;
  }

  header("Location: panier.php");
  exit;
}

/* ✅ VIDER */
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
$activePage = "";
$showCartPill = true;

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
              <?php foreach ($_SESSION["cart"] as $key => $qty): ?>
                <?php
                  $key = (string)$key;
                  [$baseId, $color] = parse_cart_key($key);
                  if (!isset($products[$baseId])) continue;

                  $p = $products[$baseId];
                  $line = $p["price"] * (int)$qty;
                  $total += $line;

                  $displayName = $p["name"];
                  if ($baseId === "mask-aqua") {
                    $color = isset($maskColors[$color]) ? $color : "noir";
                    $displayName .= " — Couleur : " . $maskColors[$color];
                  }
                ?>
                <tr>
                  <td class="prod">
                    <div class="prod__name"><?php echo htmlspecialchars($displayName); ?></div>
                    <div class="prod__id"><?php echo htmlspecialchars($key); ?></div>

                    <?php if ($baseId === "mask-aqua"): ?>
                      <details class="color-switch">
                        <summary class="color-switch__summary">Changer la couleur</summary>
                        <div class="color-switch__options">
                          <?php foreach ($maskColors as $slug => $label): ?>
                            <a
                              class="color-chip <?php echo ($slug === $color) ? 'is-active' : ''; ?>"
                              href="panier.php?set_color=<?php echo urlencode($slug); ?>&id=<?php echo urlencode($key); ?>"
                              aria-label="<?php echo htmlspecialchars($label); ?>"
                            >
                              <?php echo htmlspecialchars($label); ?>
                            </a>
                          <?php endforeach; ?>
                        </div>
                      </details>
                    <?php endif; ?>
                  </td>

                  <td class="t-center">
                    <div class="qty">
                      <a class="qty__btn" href="panier.php?dec=<?php echo urlencode($key); ?>" aria-label="Diminuer">−</a>
                      <span class="qty__val"><?php echo (int)$qty; ?></span>
                      <a class="qty__btn" href="panier.php?inc=<?php echo urlencode($key); ?>" aria-label="Augmenter">+</a>
                    </div>
                  </td>

                  <td class="t-right"><?php echo number_format($p["price"], 2, ",", " "); ?> €</td>
                  <td class="t-right"><?php echo number_format($line, 2, ",", " "); ?> €</td>

                  <td class="t-center">
                    <a class="remove" href="panier.php?remove=<?php echo urlencode($key); ?>" aria-label="Supprimer">✕</a>
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
