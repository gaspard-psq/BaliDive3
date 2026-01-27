<?php
/* cart_action.php */
session_start();

header("Content-Type: application/json; charset=utf-8");

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

  "offre-essentiel" => ["name"=>"Offre essentiel","price"=>89.00],
  "offre-avance" => ["name"=>"Offre avancé","price"=>149.00],
  "offre-premium" => ["name"=>"Offre premium","price"=>249.00],
];

if (!isset($_SESSION["cart"])) $_SESSION["cart"] = [];

$action = $_POST["action"] ?? $_GET["action"] ?? "";
$id = $_POST["id"] ?? $_GET["id"] ?? "";

if ($action !== "add" || !isset($products[$id])) {
  echo json_encode(["ok"=>false,"message"=>"Action invalide."]);
  exit;
}

$_SESSION["cart"][$id] = ($_SESSION["cart"][$id] ?? 0) + 1;

echo json_encode([
  "ok" => true,
  "message" => "✅ “".$products[$id]["name"]."” a été ajouté au panier.",
  "count" => array_sum($_SESSION["cart"])
]);
exit;
