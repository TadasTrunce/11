<?php
session_start();
require __DIR__.'/class/Cart.php';
require __DIR__.'/class/Products.php';
$products = new Products;
$cart = new Cart($products);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>
<div id="cart">
<!-- dedame krepseli -->
</div>

<div style="display: flex;">
    <?php foreach ($products->products as $id => $product) { ?>
    <section style="width:25%;">
        <h1><?= $product['title'] ?></h1>
        <img src="<?= $product['img'] ?>">
        <h2><?= $product['price'] ?> EUR</h2>
        <p>
        <?= $product['desc'] ?>
        </p>
        <div class="add-button">
        <input type="text" class="count" name="product_count" value="1">
        <input type="hidden"class="action" name="action" value="add">
        <button type="button"class="id" name="product_id" value="<?= $id ?>">ADD</button>
        </div>
    </section>
    <?php } ?>
 </div>
 <script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
  <script src="http://localhost/11/cartjs/cart.js"></script>
</body>
</html>