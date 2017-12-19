<div class="row">
        <div class="col s12 m12 l12">
            <img src="<?= $post['photo'] ?>" width="300" height="250" alt="image de <?= $post['nom_recette'] ?>">
            <p>Ajouté par: <?= $post['pseudo'] ?></p>
            <p><?= htmlspecialchars($post['nom_recette']) ?></p>
             <p>Ingrédients: 
             <ul>
                 <li><?= $post['Product_name'] ?></li>
             </ul></p>
              <p><?= htmlspecialchars($post['preparation']) ?></p>
          </div>
        </div>