<?php

/* home.html */
class __TwigTemplate_6b50a8d6454011c823426677449da19c5004aa687c417d4ab097cc5ac2217127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html", "home.html", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'landing' => array($this, 'block_landing'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<title>Bienvenue sur CaloryDays !</title>
";
    }

    // line 3
    public function block_landing($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"description\">
    <div class=\" slides carousel carousel-slider center\" data-indicators=\"true\">

        <div class=\"carousel-item red white-text\" style=\"text-shadow: 1px 1px 1px black; background-image: url(http://static.cuisineaz.com/610x610/i99425-hamburger.jpg); background-repeat:no-repeat; background-size:cover;\">
            <section class=\"caption center-align\">
                <h2>Bienvenue sur CalorysDays !</h2>
                <p>Nous espérons que vous passerez un bon moment</p>
            </section>
        </div>
        <div class=\"carousel-item amber white-text\" style=\"text-shadow: 1px 1px 1px black; background-image: url(http://www.pizzaduroy.fr/assets/images/slider/5.jpg); background-repeat:no-repeat; background-size:cover;\">
            <h2>Calcul de calorie</h2>
            <p>Calculer vos calories d'alimentation !</p>
            <a href=\"energy\" class=\"waves-effect waves-light yellow lighten-2 btn\">Accéder</a>
        </div>

        <div class=\"carousel-item green white-text\" style=\"text-shadow: 1px 1px 1px black; background-image: url(http://www.moulinex.fr/medias/Entete-Soupe2.jpg?context=bWFzdGVyfFZpc3VlbHMgQUNUVVN8MjE2NTMzfGltYWdlL2pwZWd8aDQzL2hkNC84ODQ4ODIxMzU0NTI2LmpwZ3xhZjJjN2FhMTdlYjU2YjkzNjliODJjYWM0OWE5MjhiNzJlYzY4YjcyZGZlOTg3YThjMzEyYzQ2ZDIyZmM5MTAz); background-repeat:no-repeat; background-size:cover;\">
            <h2 class=\"white-text\">Ajouter une recette</h2>
            <p class=\"white-text\">Partage ta recette avec la communauté !</p>
            ";
        // line 22
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "result", array()) == true)) {
            // line 23
            echo "            <a href=\"add_recipe\" class=\"waves-effect waves-light yellow lighten-2 btn\">Ajouter</a> ";
        } else {
            // line 24
            echo "            <a href=\"#connexion\" class=\"waves-effect waves-light modal-trigger btn\">Connectez-vous</a> ";
        }
        // line 25
        echo "        </div>
        <div class=\"carousel-item blue white-text\" style=\"background-image: url(https://search.chow.com/thumbnail/1200/0/www.chowstatic.com/assets/recipe_photos/29695_cherry_clafoutis3.jpg); background-repeat:no-repeat; background-size:cover;\">
            <h2 class=\"white-text\">Refrigerateur</h2>
            <p>Essaie encore !</p>
            <a href=\"refrigerateur\" class=\"btn pulse disabled\">Non disponible</a>
        </div>
    </div>
</section>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col s6 m6 l6\">
            <div class=\"card menu-home yellow lighten-5\">
                <div class=\"card-content cardcontent red-text\">
                    <span class=\"card-title center\" >Calcul de calorie</span>
                </div>
                <div class=\"card-action\">
                    <a href=\"energy\" class=\"waves-effect waves-light btn yellow lighten-2\" style=\"color: white !important; text-shadow: 1px 1px 1px black;\">Accéder</a>
                </div>
            </div>
        </div>
        <div class=\"col s6 m6 l6\">
            <div class=\"card menu-home yellow lighten-5\">
                <div class=\"card-content cardcontent grey-text\">
                    <span class=\"card-title center\">Ajouter une recette</span>
                </div>
                <div class=\"card-action\">
                        ";
        // line 52
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "result", array()) != true)) {
            // line 53
            echo "                        <a href=\"#connexion\" class=\"waves-effect waves-light modal-trigger yellow lighten-2 btn\">Connectez-vous</a>
                        ";
        } else {
            // line 55
            echo "                    <a href=\"add_recipe\" class=\"waves-effect waves-light btn yellow lighten-2\" style=\"color: white !important; text-shadow: 1px 1px 1px black;\">Accéder</a>
                    ";
        }
        // line 57
        echo "                </div>
            </div>
        </div>
</div>
<div class=\"container\">
    <div class=\"search\">
        <div class=\"row\">
            <div class=\"input-field col l12\">
                <form action=\"http://localhost/MyFridgeFood/search_r\" method=\"post\" class=\"filters col s12 m12 l12\">
                    <input type=\"text\" name=\"search\" id=\"autocomplete-input\" class=\"search2 autocomplete-recipe\">
                    <label for=\"autocomplete-input\" class=\"search1\">Recherche</label>
                </form>
                <form action=\"";
        // line 69
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/difficulty\" class=\"filters col s6 m6 l6\" method=\"post\">
                    <div class=\"input-field\">
                        <select name=\"difficulty\" id=\"diff\">
                            <option value=\"\" disabled selected>Sélectionner une difficulté</option>
                            <option class=\"diff\" value=\"Facile\">Facile</option>
                            <option class=\"diff\" value=\"Normal\">Normal</option>
                            <option class=\"diff\" value=\"Intermédiaire\">Intermédiaire</option>
                            <option class=\"diff\" value=\"Expert\">Expert</option>
                        </select>
                    </div>
                </form>
                <form action=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/category_r\" class=\"filters col s6 m6 l6\" method=\"post\">
                    <div class=\"input-field\">
                        <select name=\"category\" id=\"category_r\">
                            <option value=\"\" disabled selected>Sélectionner une catégorie</option>
                            <option value=\"Entrée\">Entrée</option>
                            <option value=\"Apéritifs\">Apéritifs</option>
                            <option value=\"Soupes\">Soupes</option>
                            <option value=\"Plats\">Plats</option>
                            <option value=\"Viande\">Viande</option>
                            <option value=\"Dessert\">Dessert</option>
                            <option value=\"Végétarien\">Végétarien</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class=\"row\">
    <div class=\"searching-recipe\">
    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["re"]) {
            // line 103
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["re"]);
            foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                // line 104
                echo "    <div class=\"col s12 m4 l3\">
        <div class=\"card products\">
            <div class=\"card-image\" style=\"background-image: url(http://localhost/MyFridgeFood/upload/";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["recipe"], "photo", array()), "html", null, true);
                echo ".jpg); background-repeat:no-repeat; background-size:cover; height:250px;\">
                <span class=\"card-title title-card\" style=\"text-shadow: 1px 1px 1px black;\">";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["recipe"], "nom_recette", array()), "html", null, true);
                echo "</span>
            </div>
            <div class=\"card-content\">
                    <p class=\"truncate donnee_rec\"><span><i class=\"material-icons\">keyboard_arrow_right</i> ";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["recipe"], "difficulty", array()), "html", null, true);
                echo "</span><br/><span><i class=\"material-icons\">access_alarm</i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["recipe"], "time_prep", array()), "html", null, true);
                echo "</span> <span><i class=\"material-icons\">group</i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["recipe"], "person_for", array()), "html", null, true);
                echo " personnes</span></p>
                </div>
            <div class=\"card-action actioncard\">
                    <a class=\"btn yellow lighten-2\" style=\"text-shadow: 1px 1px 1px black;\" href=\"recipe/";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["recipe"], "id_recette", array()), "html", null, true);
                echo "\">Voir la recette</a>
            </div>
        </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['re'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 119,  210 => 118,  199 => 113,  189 => 110,  183 => 107,  179 => 106,  175 => 104,  170 => 103,  166 => 102,  141 => 80,  127 => 69,  113 => 57,  109 => 55,  105 => 53,  103 => 52,  83 => 34,  80 => 33,  68 => 25,  65 => 24,  62 => 23,  60 => 22,  40 => 4,  37 => 3,  32 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html", "C:\\wamp64\\www\\MyFridgeFood\\view\\home.html");
    }
}
