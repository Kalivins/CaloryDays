<?php

/* template.html */
class __TwigTemplate_bd75cca3b759d00d226b185fb8d1c0f3511190f16ef0686dd051aafa1860adef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'landing' => array($this, 'block_landing'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/css/style.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/css/materialize.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/css/materialize-stepper.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/font-awesome/css/font-awesome.min.css\">
    <title></title>
</head>

<body class=\"grey lighten-3\">

<div class=\"row logo\">
    <div class=\"col s12 center-align logos\">
        <p class=\"testes\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/img/frog.svg\" alt=\"logo\" height=\"50\" width=\"100\"><span>CALORYSDAYS</span></p>
    </div>

</div>
";
        // line 25
        $this->displayBlock('landing', $context, $blocks);
        // line 27
        echo "<nav>
    <div class=\"nav-wrapper yellow accent-1\">
        <ul id=\"nav-mobil\" class=\"left\">
            ";
        // line 30
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "result", array()) == true)) {
            // line 31
            echo "            <li><a href=\"#\" data-activates=\"slide-out\" class=\"collapse waves-effect\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></a></li>
            ";
        }
        // line 33
        echo "            <li><a href=\"";
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/home\" class=\"waves-effect\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i><span class=\"hide-on-med-and-down\"> Accueil</span></a></li>
        </ul>
        ";
        // line 35
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "result", array()) != true)) {
            // line 36
            echo "        <ul id=\"nav-mobile\" class=\"right\">
            <li><a href=\"#inscription\" class=\"waves-effect modal-trigger\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> <span class=\"hide-on-med-and-down\">Inscription</span></a></li>
            <li><a href=\"#connexion\" class=\"waves-effect modal-trigger\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> <span class=\"hide-on-med-and-down\">Connexion</span></a></li>
        </ul>
    </div>
</nav>
<div id=\"connexion\" class=\"modal\">
    <div class=\"modal-content\">
        <h4>Connexion</h4>
        <p>
        <form method=\"post\" action=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
            echo "/MyFridgeFood/connexion\">
            <input type=\"text\" placeholder=\"Email\" name=\"mail\">
            <input type=\"password\" placeholder=\"mot de passe\" name=\"mdp\">
            <input type=\"submit\" class=\"btn\">
        </form>
        </p>
    </div>
    <div class=\"modal-footer\">
        <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">Fermer</a>
    </div>
</div>

<div id=\"inscription\" class=\"modal\">
    <div class=\"modal-content\">
        <div class=\"section grey lighten-5\">
            <h3 class=\"light center-align blue-text\">Inscription</h3>
            <form id=\"register\" method=\"post\" action=\"";
            // line 62
            echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
            echo "/MyFridgeFood/register\">
                <ul class=\"stepper horizontal\">

                    <li class=\"step active\">
                        <div class=\"step-title waves-effect waves-dark\">Nom et Prénom</div>
                        <div class=\"step-content\">
                            <div class=\"row\">
                                <div class=\"input-field col s6\">
                                    <input id=\"nom\" name=\"nom\" type=\"text\" class=\"validate\" required>
                                    <label for=\"nom\">Votre nom</label>
                                </div>
                                <div class=\"input-field col s6\">
                                        <input id=\"prenom\" name=\"prenom\" type=\"text\" class=\"validate\" required>
                                        <label for=\"prenom\">Votre prénom</label>
                                    </div>
                                    <div class=\"input-field col s12\">
                                            <input id=\"pseudo\" name=\"pseudo\" type=\"text\" class=\"validate\" required>
                                            <label for=\"pseudo\">Votre pseudo</label>
                                        </div>
                            </div>
                            <div class=\"step-actions\">
                                <button class=\"waves-effect waves-dark btn next-step\">Continue</button>
                            </div>
                        </div>
                    </li>
                    <li class=\"step\">
                        <div class=\"step-title waves-effect waves-dark\">Email</div>
                        <div class=\"step-content\">
                            <div class=\"row\">
                                <div class=\"input-field col s6\">
                                    <input id=\"email\" name=\"email\" type=\"email\" class=\"validate\" required>
                                    <label for=\"email\">Votre email</label>
                                </div>
                            </div>
                            <div class=\"step-actions\">
                                <button class=\"waves-effect waves-dark btn next-step\">Continue</button>
                            </div>
                        </div>
                    </li>
                    <li class=\"step\">
                        <div class=\"step-title waves-effect waves-dark\">Mot de passe</div>
                        <div class=\"step-content\">
                            <div class=\"row\">
                                <div class=\"input-field col s6\">
                                    <input id=\"mdp\" name=\"mdp\" type=\"password\" class=\"validate\" required>
                                    <label for=\"mdp\">Votre mot de passe</label>
                                </div>
                            </div>
                            <div class=\"step-actions\">
                                <button type=\"submit\" class=\"waves-effect waves-dark btn\">Envoyer</button>
                                <button class=\"waves-effect waves-dark btn-flat previous-step\">BACK</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <div class=\"modal-footer\">
        <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">Fermer</a>
    </div>
</div>
";
        } else {
            // line 125
            echo "<ul id=\"nav-mobile\" class=\"right\">
    <li><a href=\"#profil\" class=\"waves-effect modal-trigger\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> <span class=\"hide-on-med-and-down\">Profil</span></a></li>
    <li><a href=\"deconnexion\" class=\"waves-effect modal-trigger\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> <span class=\"hide-on-med-and-down\">Déconnexion</span></a></li>
</ul>
</div>
</nav>

<div id=\"profil\" class=\"modal\">
    <div class=\"modal-content\">
        <h4>Profil</h4>
        <img src=\"\" alt=\"\">
        <p>Nom: ";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "nom", array()), "html", null, true);
            echo "</p>
        <p>Prenom: ";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "prenom", array()), "html", null, true);
            echo "</p>
        <p>Age : ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "age", array()), "html", null, true);
            echo " ans</p>
        <p>Email : ";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "mail", array()), "html", null, true);
            echo "</p>
    </div>
    <div class=\"modal-footer\">
        <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">Fermer</a>
    </div>
</div>
<div id=\"connexion\" class=\"modal\">
    <div class=\"modal-content\">
        <h4>Connexion</h4>
        <p>
        <form method=\"post\" action=\"home\">
            <input type=\"text\" placeholder=\"Email\" name=\"mail\">
            <input type=\"password\" placeholder=\"mot de passe\" name=\"mdp\">
            <input type=\"submit\" class=\"btn\">
        </form>
        </p>
    </div>
    <div class=\"modal-footer\">
        <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">Fermer</a>
    </div>
</div>
";
        }
        // line 161
        echo "<ul id=\"slide-out\" class=\"side-nav\">
    <li>
        <div class=\"user-view\">
            <div class=\"background grey darken-1\">

            </div>
            <a href=\"#!user\"><img class=\"circle\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/img/i2.png\"></a>
            <a href=\"#!name\"><span class=\"white-text name\"> ";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "prenom", array()), "html", null, true);
        echo "</span></a>
            <a href=\"#!email\"><span class=\"white-text email\">";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "mail", array()), "html", null, true);
        echo "</span></a>
        </div>
    </li>
    <li><a class=\"subheader\" href=\"#!\"><i class=\"material-icons\">build</i>Modifier compte</a></li>
    <li><a href=\"#!\"><i class=\"material-icons\">add</i>Ajouter recette</a></li>
    <li>
        <div class=\"divider\"></div>
    </li>
    <li><a class=\"subheader\"><i class=\"material-icons\">comment</i> Ajouter article</a></li>
    <li><a class=\"subheader\" href=\"#!\"><i class=\"material-icons\">link</i> Contribuer</a></li>
</ul>

";
        // line 181
        $this->displayBlock('content', $context, $blocks);
        // line 182
        echo "

<footer>
        <div class=\"col s12 center-align grey lighten-2\">
            <a href=\"#\" class=\"brand-logo center \"><img src=\"";
        // line 186
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/img/romain.png\" alt=\"\" width=\"60\" height=\"60\" class=\"responsive-img\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/img/kevin.png\" alt=\"\" width=\"60\" height=\"60\" class=\"responsive-img\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/img/sandrine.png\"
                    alt=\"\" width=\"60\" height=\"60\" class=\"responsive-img\"></a>

        </div>
    </footer>

<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/js/jquery.js\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/js/materialize.min.js\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/js/jquery.validate.min.js\"></script>
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/js/materialize-stepper.min.js\"></script>
<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/js/d3.min.js\"></script>
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/js/d3pie.min.js\"></script>
<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/assets/js/app.js\"></script>
";
        // line 199
        $this->displayBlock('footer', $context, $blocks);
        // line 200
        echo "</body>

</html>";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 25
    public function block_landing($context, array $blocks = array())
    {
    }

    // line 181
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 199
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 199,  336 => 181,  331 => 25,  325 => 3,  319 => 200,  317 => 199,  313 => 198,  309 => 197,  305 => 196,  301 => 195,  297 => 194,  293 => 193,  289 => 192,  276 => 186,  270 => 182,  268 => 181,  253 => 169,  247 => 168,  243 => 167,  235 => 161,  210 => 139,  206 => 138,  202 => 137,  198 => 136,  185 => 125,  119 => 62,  100 => 46,  88 => 36,  86 => 35,  80 => 33,  76 => 31,  74 => 30,  69 => 27,  67 => 25,  60 => 21,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  29 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template.html", "/home/kevinv/public/MyFridgeFood/view/template.html");
    }
}
