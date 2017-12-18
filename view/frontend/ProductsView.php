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
            <img src="<?= $data['image_url'] ?>" alt="image du product">
        </p>
    </div>
    <?php } ?>