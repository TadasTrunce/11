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