<div class="row">
<?php
while ($data = $posts->fetch())
{
?>
        <div class="col s12 m4 l3">
          <div class="card products">
            <div class="card-image">
            <img src="<?= $data['photo'] ?>" width="300" height="250" alt="image de <?= $data['nom_recette'] ?>">
              <span class="card-title title-card"><?= htmlspecialchars($data['nom_recette']) ?></span>
            </div>
            <div class="card-content">
              <p class="truncate"><?= htmlspecialchars($data['preparation']) ?></p>
            </div>
            <div class="card-action actioncard">
              <a href="recipe/<?= $data['id_recette'] ?>">Voir la recette</a>
            </div>
          </div>
        </div>
    <?php } ?>
    </div>  
