<?php
while ($data = $posts->fetch())
{
?>
    <div class="products">
        <h3>
            <?= htmlspecialchars($data['product_name']) ?>
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['brands'])) ?>
            <br />
            <img src="<?= $data['image_small_url'] ?>" width="200" height="200" alt="image de <?= $data['product_name'] ?>">
        </p>
    </div>
    <?php } ?>