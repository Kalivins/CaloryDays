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

            <li><a href="home" class="waves-effect"><i class="fa fa-home" aria-hidden="true"></i><span class="hide-on-med-and-down"> home</span></a></li>
        </ul>
        <ul id="nav-mobile" class="right">
            <li><a href="#modal1" class="waves-effect modal-trigger"><i class="fa fa-sign-in" aria-hidden="true"></i> <span class="hide-on-med-and-down">Inscription</span></a></li>
            <li><a class="waves-effect waves-light btn modal-trigger" href="#modal1"><span class="hide-on-med-and-down">connexion</span></a></i></li>
        </ul>
    </div>
</nav>
 <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Inscription</a>
 <a aria-hidden="true" href="#modal1">Inscription</a>
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
