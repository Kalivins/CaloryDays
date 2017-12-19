<div class="row">
<?php
while ($data = $posts->fetch())
{
?>
        <div class="col s12 m4 l3">
          <div class="card products">
            <div class="card-image">
            <img src="<?= $data['image_small_url'] ?>" width="300" height="250" alt="image de <?= $data['product_name'] ?>">
              <span class="card-title title-card"><?= htmlspecialchars($data['product_name']) ?></span>
            </div>
            <div class="card-content">
              <?= nl2br(htmlspecialchars($data['brands'])) ?>
              <p class="truncate">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action actioncard">
              <a href="#">Voir la recette</a>
            </div>
          </div>
        </div>
    <?php } ?>
    </div>  
