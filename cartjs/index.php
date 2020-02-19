<?php
session_start();
require __DIR__.'/class/Cart.php';
require __DIR__.'/class/Products.php';
$products = new Products;
$cart = new Cart($products);

if (!empty($_POST)) {
    if ($_POST['action'] == 'add') {
        $cart->add($_POST['product_id'], $_POST['product_count']);
    }
    if ($_POST['action'] == 'remove') {
        $cart->remove($_POST['product_id']);
    }

    header('Location: http://localhost/11/cart/');
}

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
<div class="cart" style="background: gray; padding: 5px; margin: 7px;">
<?php foreach ($cart->getCart() as $id => $count) { ?>
    <h3><span><?= $cart->getProduct($id)['title'].' X '.$count .' '. ($cart->getProduct($id)['price'] * $count) .' EUR'?><span>
    <form action="" method="post" style="display:inline-block;">
        <input type="hidden" name="action" value="remove">
        <button type="submit" name="product_id" value="<?= $id ?>" 
        style="font-size:30px;font-weight:bold;background:transparent;border:none;color:brown;">-</button>
    </form>
    </h3>
<?php } ?>
<h3>TOTAL: <?= $cart->cartTotal() ?> EUR</h3>
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