<?php
session_start();
require __DIR__.'/class/Cart.php';
$cart = new Cart;
if (!empty($_POST)) {
    if ($_POST['action'] == 'add') {
        $cart->add($_POST['product_id'], $_POST['product_count']);
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
<div style="display: flex;">
    <?php foreach (require __DIR__.'/db.php' as $id => $product) { ?>
    <section style="width:25%;">
        <h1><?= $product['title'] ?></h1>
        <img src="<?= $product['img'] ?>">
        <h2><?= $product['price'] ?> EUR</h2>
        <p>
        <?= $product['desc'] ?>
        </p>
        <form action="" method="post">
        <input type="text" name="product_count" value="1">
        <input type="hidden" name="action" value="add">
        <button type="submit" name="product_id" value="<?= $id ?>">ADD</button>
        </form>
    </section>
    <?php } ?>
 </div>
</body>
</html>