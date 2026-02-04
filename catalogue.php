<?php
/* catalogue.php */
session_start();

$products = [
  [
    "id" => "mask-aqua",
    "name" => "Masque AquaView",
    "category" => "Materiel",
    "price" => 39.90,
    "img" => "img/masque.jpg",
    "desc" => "Vision large, jupe silicone confortable."
  ],
  [
    "id" => "snorkel-flow",
    "name" => "Tuba FlowDry",
    "category" => "Materiel",
    "price" => 19.90,
    "img" => "img/tubaa.jpg",
    "desc" => "Embout doux, clapet anti-retour."
  ],
  [
    "id" => "fins-reef",
    "name" => "Palmes ReefFlex",
    "category" => "Materiel",
    "price" => 49.90,
    "img" => "img/palme2.jpg",
    "desc" => "Puissance + confort, sangle réglable."
  ],
  [
    "id" => "rashguard-bali",
    "name" => "Rashguard BaliDive",
    "category" => "Materiel",
    "price" => 34.90,
    "img" => "img/rashguard.jpg",
    "desc" => "Protection UV, séchage rapide."
  ],
  [
    "id" => "torch-mini",
    "name" => "Lampe MiniTorch",
    "category" => "Materiel",
    "price" => 29.90,
    "img" => "img/lampe-torche.jpg",
    "desc" => "Compacte, parfaite pour les récifs."
  ],
  [
    "id" => "bag-waterproof",
    "name" => "Sac étanche OceanBag 10L",
    "category" => "Materiel",
    "price" => 24.90,
    "img" => "img/sac2.jpg",
    "desc" => "Protège vos affaires du bateau à la plage."
  ],
];

/* panier */
if (!isset($_SESSION["cart"])) $_SESSION["cart"] = [];
$cartCount = array_sum($_SESSION["cart"]);

/* catalogue */
$shown = $products;

/* variables header */
$pageTitle  = "Catalogue | Bali Dive Center";
$pageCss    = "css/catalogue.css";   // ⚠️ compile ton SCSS en CSS
$activePage = "catalogue";
$showCartPill = true;               // on veut afficher le badge du panier

include __DIR__ . "/includes/header.php";
?>

<section class="catalog-hero" aria-label="Catalogue">
  <div class="catalog-hero__shade" aria-hidden="true"></div>
  <div class="container catalog-hero__content">
    <h1>Catalogue</h1>
    <p>Matériel de plongée — tout pour prolonger l’expérience BaliDive.</p>
  </div>
</section>

<section class="catalog" aria-label="Liste des produits">
  <div class="container">
    <div class="catalog-head">
      <div class="catalog-count">
        <span class="count-pill"><?php echo count($shown); ?></span>
        <span class="count-text">produit(s) affiché(s)</span>
      </div>
    </div>

    <div class="product-grid">
      <?php foreach ($shown as $p): ?>
        <article class="product-card" id="<?php echo htmlspecialchars($p["id"]); ?>">
          <a class="product-media" href="<?php echo "produit.php?id=" . urlencode($p["id"]); ?>" aria-label="<?php echo htmlspecialchars($p["name"]); ?>">
            <img src="<?php echo htmlspecialchars($p["img"]); ?>" alt="<?php echo htmlspecialchars($p["name"]); ?>" loading="lazy" />
            <span class="product-badge">Matériel</span>
          </a>

          <div class="product-body">
            <h2 class="product-title">
              <a href="<?php echo "produit.php?id=" . urlencode($p["id"]); ?>">
                <?php echo htmlspecialchars($p["name"]); ?>
              </a>
            </h2>

            <p class="product-desc"><?php echo htmlspecialchars($p["desc"]); ?></p>

            <div class="product-bottom">
              <div class="product-price">
                <span class="price-value"><?php echo number_format($p["price"], 2, ",", " "); ?>€</span>
              </div>

              <div class="product-actions">
                <button
                  type="button"
                  class="btn btn--primary js-add"
                  data-id="<?php echo htmlspecialchars($p["id"]); ?>"
                  data-name="<?php echo htmlspecialchars($p["name"]); ?>"
                >
                  Ajouter
                </button>
              </div>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="toast" id="toast" aria-live="polite" aria-atomic="true"></div>

<script>
  (function () {
    const toast = document.getElementById("toast");
    const cartPill = document.querySelector(".cart-pill");

    let toastTimer = null;

    function showToast(msg) {
      if (!toast) return;
      toast.textContent = msg;
      toast.classList.add("is-visible");
      clearTimeout(toastTimer);
      toastTimer = setTimeout(() => toast.classList.remove("is-visible"), 2400);
    }

    async function addToCart(id) {
      const fd = new FormData();
      fd.append("action", "add");
      fd.append("id", id);

      const res = await fetch("cart_action.php", {
        method: "POST",
        body: fd,
        headers: { "X-Requested-With": "XMLHttpRequest" }
      });

      const data = await res.json();
      if (!data || !data.ok) {
        showToast("❌ Impossible d’ajouter au panier.");
        return;
      }

      if (cartPill && typeof data.count !== "undefined") cartPill.textContent = data.count;
      showToast(data.message || "✅ Ajouté au panier.");
    }

    document.addEventListener("click", function (e) {
      const btn = e.target.closest(".js-add");
      if (!btn) return;

      e.preventDefault();
      btn.disabled = true;

      addToCart(btn.dataset.id)
        .catch(() => showToast("❌ Erreur réseau."))
        .finally(() => { btn.disabled = false; });
    });
  })();
</script>

<?php include __DIR__ . "/includes/footer.php"; ?>
