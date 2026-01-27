<?php
/* panier.php */
session_start();

/* 🔹 Catalogue de produits (doit correspondre au catalogue.php) */
$products = [
  "mask-aqua" => ["name"=>"Masque AquaView","price"=>39.90],
  "snorkel-flow" => ["name"=>"Tuba FlowDry","price"=>19.90],
  "fins-reef" => ["name"=>"Palmes ReefFlex","price"=>49.90],
  "rashguard-bali" => ["name"=>"Rashguard BaliDive","price"=>34.90],
  "torch-mini" => ["name"=>"Lampe MiniTorch","price"=>29.90],
  "bag-waterproof" => ["name"=>"Sac étanche OceanBag","price"=>24.90],
  "tee-sunset" => ["name"=>"T-shirt Sunset Bali","price"=>22.00],
  "cap-wave" => ["name"=>"Casquette Wave","price"=>18.00],
  "sticker-pack" => ["name"=>"Pack stickers BaliDive","price"=>8.50],
  "postcards" => ["name"=>"Cartes postales Bali","price"=>9.90],
  "bracelet-coral" => ["name"=>"Bracelet Coral","price"=>12.00],
  "mug-dive" => ["name"=>"Mug Dive More","price"=>14.90],
];

/* 🔹 Initialisation panier */
if (!isset($_SESSION["cart"])) {
  $_SESSION["cart"] = [];
}

/* 🔹 Ajouter produit */
if (isset($_GET["add"]) && isset($products[$_GET["add"]])) {
  $id = $_GET["add"];
  $_SESSION["cart"][$id] = ($_SESSION["cart"][$id] ?? 0) + 1;
  header("Location: panier.php");
  exit;
}

/* 🔹 Supprimer produit */
if (isset($_GET["remove"])) {
  unset($_SESSION["cart"][$_GET["remove"]]);
  header("Location: panier.php");
  exit;
}

/* 🔹 Vider panier */
if (isset($_GET["clear"])) {
  $_SESSION["cart"] = [];
  header("Location: panier.php");
  exit;
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Panier | Bali Dive Center</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/panier.css">
</head>

<body>
<header class="site-header">
  <div class="header-inner">
    <a class="brand" href="index.php">
      <img src="img/logo.png" class="brand-logo" alt="Logo BaliDive">
    </a>
  </div>
</header>

<main class="site-main">
  <section class="cart-page">
    <div class="container">
      <h1>Votre panier</h1>

      <?php if (empty($_SESSION["cart"])): ?>
        <p class="cart-empty">Votre panier est vide.</p>
        <a href="catalogue.php" class="btn btn--primary">Voir le catalogue</a>

      <?php else: ?>
        <table class="cart-table">
          <thead>
            <tr>
              <th>Produit</th>
              <th>Quantité</th>
              <th>Prix</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php $total = 0; ?>
            <?php foreach ($_SESSION["cart"] as $id => $qty): ?>
              <?php
                $p = $products[$id];
                $line = $p["price"] * $qty;
                $total += $line;
              ?>
              <tr>
                <td><?= htmlspecialchars($p["name"]) ?></td>
                <td><?= $qty ?></td>
                <td><?= number_format($p["price"],2,","," ") ?> €</td>
                <td><?= number_format($line,2,","," ") ?> €</td>
                <td>
                  <a class="remove" href="panier.php?remove=<?= $id ?>">✕</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <div class="cart-total">
          <strong>Total :</strong>
          <span><?= number_format($total,2,","," ") ?> €</span>
        </div>

        <div class="cart-actions">
          <a href="catalogue.php" class="btn btn--ghost">Continuer mes achats</a>
          <a href="panier.php?clear=1" class="btn btn--ghost">Vider le panier</a>
          <a href="#" class="btn btn--primary">Valider la commande</a>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="footer-inner">
    © <?= date("Y") ?> Bali Dive Center
  </div>
</footer>
</body>
</html>
