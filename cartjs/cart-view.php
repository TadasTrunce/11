<div class="cart" style="background: gray; padding: 5px; margin: 7px;">
<?php foreach ($cart->getCart() as $id => $count) { ?>
    <h3><span><?= $cart->getProduct($id)['title'].' X '.$count .' '. ($cart->getProduct($id)['price'] * $count) .' EUR'?><span>
    <span class="cart-remove">
        <input type="hidden" class="action" name="action" value="remove">
        <button type="button" class="id" name="product_id" value="<?= $id ?>" 
        style="font-size:30px;font-weight:bold;background:transparent;border:none;color:brown;">-</button>
    </span>
    </h3>
<?php } ?>
<h3>TOTAL: <?= $cart->cartTotal() ?> EUR</h3>
</div>