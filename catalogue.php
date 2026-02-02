<?php
/* catalogue.php */
session_start();

$products = [
  [
    "id" => "mask-aqua",
    "name" => "Masque AquaView",
    "category" => "Materiel",
    "price" => 39.90,
    "img" => "img/catalogue-masque.jpg",
    "desc" => "Vision large, jupe silicone confortable."
  ],
  [
    "id" => "snorkel-flow",
    "name" => "Tuba FlowDry",
    "category" => "Materiel",
    "price" => 19.90,
    "img" => "img/catalogue-tuba.jpg",
    "desc" => "Embout doux, clapet anti-retour."
  ],
  [
    "id" => "fins-reef",
    "name" => "Palmes ReefFlex",
    "category" => "Materiel",
    "price" => 49.90,
    "img" => "img/catalogue-palmes.jpg",
    "desc" => "Puissance + confort, sangle réglable."
  ],
  [
    "id" => "rashguard-bali",
    "name" => "Rashguard BaliDive",
    "category" => "Materiel",
    "price" => 34.90,
    "img" => "img/catalogue-rashguard.jpg",
    "desc" => "Protection UV, séchage rapide."
  ],
  [
    "id" => "torch-mini",
    "name" => "Lampe MiniTorch",
    "category" => "Materiel",
    "price" => 29.90,
    "img" => "img/catalogue-lampe.jpg",
    "desc" => "Compacte, parfaite pour les récifs."
  ],
  [
    "id" => "bag-waterproof",
    "name" => "Sac étanche OceanBag 10L",
    "category" => "Materiel",
    "price" => 24.90,
    "img" => "img/catalogue-sac.jpg",
    "desc" => "Protège vos affaires du bateau à la plage."
  ],
  [
    "id" => "tee-sunset",
    "name" => "T-shirt souvenir “Sunset Bali”",
    "category" => "Souvenirs",
    "price" => 22.00,
    "img" => "img/catalogue-tee.jpg",
    "desc" => "Coton doux, coupe unisexe."
  ],
  [
    "id" => "cap-wave",
    "name" => "Casquette “Wave”",
    "category" => "Souvenirs",
    "price" => 18.00,
    "img" => "img/catalogue-casquette.jpg",
    "desc" => "Broderie, réglable, légère."
  ],
  [
    "id" => "sticker-pack",
    "name" => "Pack stickers BaliDive",
    "category" => "Souvenirs",
    "price" => 8.50,
    "img" => "img/catalogue-stickers.jpg",
    "desc" => "Vinyle waterproof, parfait pour gourde & ordi."
  ],
  [
    "id" => "postcards",
    "name" => "Cartes postales “Bali Underwater”",
    "category" => "Souvenirs",
    "price" => 9.90,
    "img" => "img/catalogue-cartes.jpg",
    "desc" => "Set de 6 cartes, photos sous-marines."
  ],
  [
    "id" => "bracelet-coral",
    "name" => "Bracelet “Coral”",
    "category" => "Souvenirs",
    "price" => 12.00,
    "img" => "img/catalogue-bracelet.jpg",
    "desc" => "Souvenir léger, style plage."
  ],
  [
    "id" => "mug-dive",
    "name" => "Mug “Dive More”",
    "category" => "Souvenirs",
    "price" => 14.90,
    "img" => "img/catalogue-mug.jpg",
    "desc" => "Céramique, idéal au retour de plongée."
  ],
];

if (!isset($_SESSION["cart"])) $_SESSION["cart"] = [];
$cartCount = array_sum($_SESSION["cart"]);

$filter = isset($_GET["cat"]) ? $_GET["cat"] : "Tous";
$allowed = ["Tous", "Materiel", "Souvenirs"];
if (!in_array($filter, $allowed, true)) $filter = "Tous";

$shown = array_values(array_filter($products, function($p) use ($filter) {
  return $filter === "Tous" ? true : $p["category"] === $filter;
}));
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Catalogue | Bali Dive Center</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/catalogue.css" />
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
      <a class="drawer-link is-active" href="catalogue.php">Catalogue</a>
      <a class="drawer-link" href="contact.php">Contact</a>
    </nav>
  </header>

  <main class="site-main">
    <section class="catalog-hero" aria-label="Catalogue">
      <div class="catalog-hero__shade" aria-hidden="true"></div>
      <div class="container catalog-hero__content">
        <h1>Catalogue</h1>
        <p>Matériel de plongée et souvenirs — tout pour prolonger l’expérience BaliDive.</p>

        <div class="catalog-filters" role="navigation" aria-label="Filtres du catalogue">
          <a class="chip <?php echo $filter==="Tous" ? "is-active" : ""; ?>" href="catalogue.php?cat=Tous">Tous</a>
          <a class="chip <?php echo $filter==="Materiel" ? "is-active" : ""; ?>" href="catalogue.php?cat=Materiel">Matériel</a>
          <a class="chip <?php echo $filter==="Souvenirs" ? "is-active" : ""; ?>" href="catalogue.php?cat=Souvenirs">Souvenirs</a>
        </div>
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
                <span class="product-badge"><?php echo htmlspecialchars($p["category"]); ?></span>
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
                    <a class="btn btn--ghost" href="<?php echo "produit.php?id=" . urlencode($p["id"]); ?>">Voir</a>

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
  </main>

  <footer class="site-footer">
    <div class="footer-inner">
      <div class="footer-spacer" aria-hidden="true"></div>

      <div class="footer-copy">
        © <?php echo date('Y'); ?> BaliDive — Tous droits réservés
      </div>

      <nav class="footer-nav" aria-label="Liens de pied de page">
        <a class="footer-link" href="contact.php">Contact</a>
        <a class="footer-link" href="mentions-legales.php">Mentions légales</a>
      </nav>
    </div>
  </footer>

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
</body>
</html>
