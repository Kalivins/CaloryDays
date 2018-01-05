<?php

/* add_recipe.html */
class __TwigTemplate_986d3b7ce9b97100d4700ba995ac06207f1c25a3b9bc960efe2cce22967233d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html", "add_recipe.html", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo " <title>Ajouter une Recette</title>
 ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo " ";
        if ((($context["session"] ?? null) != true)) {
            // line 7
            echo " <p>Connectez-vous pour accéder à cette fonctionnalité</p>
 ";
        } else {
            // line 9
            echo " <div class=\"container\">
 <div class=\"liste_nom\"></div>
 <form enctype=\"multipart/form-data\" action=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
            echo "/MyFridgeFood/add_recipe/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"adding_recipe\" method=\"post\">
    <ul class=\"stepper horizontal\">
        <li class=\"step active\">
                <div class=\"step-title waves-effect waves-dark\">Ingrédients</div>
                <div class=\"step-content\">
                <div id=\"products\">
                        <div class=\"searching-panel row\">
                        </div>
                    </div>
                    <div class=\"search col s12 m12 l12\">
                        <form class=\"filters\" action=\"";
            // line 21
            echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
            echo "/MyFridgeFood/search\" method=\"post\">
                            <div class=\"input-field l12\">
                                <i class=\"material-icons prefix\">search</i>
                                <input type=\"search\" maxlength=\"80\" size=\"80\" name=\"search\" id=\"autocomplete-input\" class=\"autocomplete searched\">
                                <label for=\"autocomplete-input\">Rechercher un produit</label>
                            </div>
                        </form>
                        <button type=\"button\" class=\"reset\">Reset</button>
                    </div>
                    <div class=\"input-field\">
                            <div class=\"chips\"></div>
                        </div>
                        <br/>
                    </div>
        </li>
    <li class=\"step\">
            <div class=\"step-title waves-effect waves-dark\">Infos de la recette</div>
            <div class=\"step-content\">
        <div class=\"input-field\">
        <label for=\"nom_recette\">Nom de la recette</label>
            <input type=\"text\" name=\"nom_recette\" id=\"nom_recette\">
        </div>
        <br/>
        <div class=\"input-field\">
            <input type=\"text\" name=\"time_prep\" id=\"time\"> <label for=\"time\">Temps de préparation</label>
        </div>
        <div class=\"input-field\">
            <input type=\"text\" name=\"person_for\" id=\"person\"> <label for=\"person\">Pour combien de personnes</label>
        </div>
                <div class=\"input-field\">
                    <select name=\"category\" id=\"category\">
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
        </div>
     </li>
     <li class=\"step\">
            <div class=\"step-title waves-effect waves-dark\">Difficulté et préparation de la recette</div>
            <div class=\"step-content\">
        <div class=\"input-field\">
            <select name=\"difficulty\" id=\"diff\">
                <option value=\"\" disabled selected>Difficulté de la recette</option>
                <option value=\"Facile\">Facile</option>
                <option value=\"Normal\">Normal</option>
                <option value=\"Intermédiaire\">Intermédiaire</option>
                <option value=\"Expert\">Expert</option>
            </select>
        </div>
        <div class=\"input-field\">
            <label for=\"preparation\">Préparation de la recette</label>
        <textarea type=\"text\" name=\"preparation\" id=\"preparation\"></textarea>
        </div>
        <br/>
     <div class=\"input-field\">
        <input type=\"file\" id=\"photo\" name=\"file\"> <label for=\"photo\"> Image de votre recette </label>
     </div>
     <input type=\"hidden\" name=\"id_food\" class=\"ids\" value=\"\">
     <input type=\"hidden\" name=\"name_food\" class=\"names\" value=\"\">
     <div class=\"input-field\">
     <input type=\"submit\" class=\"btn\" value=\"submit\" name=\"submit\">
     </div>
     </div>
     </li>
     </ul>
 </form>
 </div>
 ";
        }
        // line 95
        echo " ";
    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        // line 97
        echo "     <script type=\"text/javascript\">
         \$('.adding_recipe').submit(function (e) {
             var ids = listId.join(\",\");
             var names = listNames.join(\",\");
             \$('.ids').val(ids);
             \$('.names').val(names);
         });
         \$('.reset').click(function () {
             alphabet(\"default\");
             \$('.article_list').html('');
             listCalories = [];
             x = 0;
             CalorieUtilise = 0;
             utilise = 0;
             besoinRestant = 0;
         });
         alphabet(\"default\");
     </script>
     ";
    }

    public function getTemplateName()
    {
        return "add_recipe.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 97,  148 => 96,  144 => 95,  67 => 21,  52 => 11,  48 => 9,  44 => 7,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "add_recipe.html", "C:\\wamp64\\www\\MyFridgeFood\\view\\add_recipe.html");
    }
}
