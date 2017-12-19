<div class="logo">
<a href="#" class="titre-logo waves-effect">Logo</a>
</div>
<?php 
    if($parts_uri[2] == "home")
    {
        echo '<section class="description">
            Bienvenue dans My Fridge Food pour trouver des recettes pour vous !
        </section>';
    }
?>
<nav>
<div class="nav-wrapper">
    <ul id="nav-mobil" class="left">
        <li><a href="#" data-activates="slide-out" class="collapse waves-effect"><i class="fa fa-bars" aria-hidden="true"></i></a></li> 

            <li><a href="home" class="waves-effect"><i class="fa fa-home" aria-hidden="true"></i><span class="hide-on-med-and-down"> Accueil</span></a></li>
        </ul>
        <ul id="nav-mobile" class="right">
            <li><a href="#inscription" class="waves-effect modal-trigger"><i class="fa fa-sign-in" aria-hidden="true"></i> <span class="hide-on-med-and-down">Inscription</span></a></li>
            <li><a href="#connexion" class="waves-effect modal-trigger"><i class="fa fa-user" aria-hidden="true"></i> <span class="hide-on-med-and-down">Connexion</span></a></li>
        </ul>
    </div>
</nav>
 <!-- Modal -->
  <div id="connexion" class="modal">
    <div class="modal-content">
      <h4>Connexion</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
    </div>
  </div>

  <div id="inscription" class="modal">
    <div class="modal-content">
      <h4>Inscription</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
    </div>
  </div>
