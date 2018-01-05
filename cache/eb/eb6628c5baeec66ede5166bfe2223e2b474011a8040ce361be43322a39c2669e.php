<?php

/* productView.html */
class __TwigTemplate_58b7dadc08a6cde0e3aab2866cabcef7c06bba5688fb0521a80360661cad746e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html", "productView.html", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "<title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "product_name", array()), "html", null, true);
        echo "</title>
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
    <div class=\"col s12 m6 l6\">
        ";
        // line 8
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "product_image_url", array()) != "")) {
            // line 9
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "image_url", array()), "html", null, true);
            echo "\" width=\"100%\" alt=\"image de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "product_name", array()), "html", null, true);
            echo "\">
        ";
        } else {
            // line 11
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
            echo "/MyFridgeFood/assets/img/void.png\" width=\"100%\" alt=\"image de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "product_name", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 13
        echo "    </div>
    <div class=\"col s12 m6 l6\">
        <p>
            <span class=\"nom_produit white-text\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "product_name", array()), "html", null, true);
        echo "</span>
        </p>
        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "ingredients_text", array()) != "")) {
            // line 19
            echo "        <ul class=\"postit\">
            <li><b>Ingrédients :</b> <br>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "ingredients_text", array()), "html", null, true);
            echo "</a></li>
        </ul>
        ";
        } else {
            // line 23
            echo "        <span> <b>Ingrédients manquant !</b></span>
        ";
        }
        // line 25
        echo "    </div>
    <div class=\"col s12 m12 l12\">
        <p class=\"infos\">
            ";
        // line 28
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "allergens_fr", array()) != "")) {
            // line 29
            echo "            <span class=\"allergens\"> <b>Allergenes:</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "allergens_fr", array()), "html", null, true);
            echo "</span><br>
            ";
        } else {
            // line 31
            echo "            <span><b>Allergenes manquant !</b></span><br>
            ";
        }
        // line 33
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "brands", array()) != "")) {
            // line 34
            echo "            <span class=\"brands\"> <b>Marque:</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "brands", array()), "html", null, true);
            echo "</span><br>
            ";
        } else {
            // line 36
            echo "            <span><b>Marque manquante !</b></span>
            ";
        }
        // line 38
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "quantity", array()) != "")) {
            // line 39
            echo "            <span class=\"quantity\"><b>Quantité:</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "quantity", array()), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 41
            echo "            <span><b>Quantité manquante !</b></span>
            ";
        }
        // line 43
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "additives_fr", array()) != "")) {
            // line 44
            echo "            <span class=\"additive\"> <b>Additifs:</b>
                <ul>
                    <li>>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "additives_fr", array()), "html", null, true);
            echo "</li>
                </ul>
            </span><br>
            ";
        } else {
            // line 50
            echo "            <span><b>Additifs manquant !</b></span><br>
            ";
        }
        // line 52
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "nutrition_grade_fr", array()) != (0 || ""))) {
            // line 53
            echo "            <span><b>Nutri-score: </b></span><br>
                <img src=\"https://static.openfoodfacts.org/images/misc/nutriscore-";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "nutrition_grade_fr", array()), "html", null, true);
            echo ".svg\" alt=\"Nutri-score de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "product_name", array()), "html", null, true);
            echo "\">
            ";
        }
        // line 56
        echo "        </p>
        <p>
            <table id=\"nutrition_data_table\" class=\"data_table\">
            <thead class=\"nutriment_header\">
            <th>
                Informations nutritionnelles (pour 100 g)</th>
            </thead>
            <tbody>
            ";
        // line 64
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "energy_100g", array()) != (0 || ""))) {
            // line 65
            echo "            <tr id=\"nutriment_energy_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Énergie</td>

                <td class=\"nutriment_value\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "energy_100g", array()), "html", null, true);
            echo " kj<br>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "calorie_100g", array()), "html", null, true);
            echo " kcal)</td>
            </tr>
            ";
        } else {
            // line 71
            echo "            <tr id=\"nutriment_energy_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Énergie</td>

                <td class=\"nutriment_value\">Valeur manquante !</td>
            </tr>
            ";
        }
        // line 77
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "cholesterol_100g", array()) != (0 || ""))) {
            // line 78
            echo "            <tr id=\"nutriment_cholesterol_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Cholesterol</td>

                <td class=\"nutriment_value\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "cholesterol_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        }
        // line 84
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "sucrose_100g", array()) != (0 || ""))) {
            // line 85
            echo "            <tr id=\"nutriment_sucrose_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Sucrose</td>

                <td class=\"nutriment_value\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "sucrose_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        }
        // line 91
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "alcohol_100g", array()) != (0 || ""))) {
            // line 92
            echo "            <tr id=\"nutriment_alcohol_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Alcohol</td>

                <td class=\"nutriment_value\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "alcohol_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        }
        // line 98
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "lactose_100g", array()) != (0 || ""))) {
            // line 99
            echo "            <tr id=\"nutriment_lactose_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Lactose</td>

                <td class=\"nutriment_value\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "lactose_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        }
        // line 105
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "fructose_100g", array()) != (0 || ""))) {
            // line 106
            echo "            <tr id=\"nutriment_fructose_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Fructose</td>

                <td class=\"nutriment_value\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "fructose_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        }
        // line 112
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "maltose_100g", array()) != (0 || ""))) {
            // line 113
            echo "            <tr id=\"nutriment_maltose_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Maltose</td>

                <td class=\"nutriment_value\">";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "maltose_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        }
        // line 119
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "fiber_100g", array()) != (0 || ""))) {
            // line 120
            echo "            <tr id=\"nutriment_fiber_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Fibre</td>

                <td class=\"nutriment_value\">";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "fiber_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        }
        // line 126
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "glucose_100g", array()) != (0 || ""))) {
            // line 127
            echo "            <tr id=\"nutriment_glucose_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Glucose</td>

                <td class=\"nutriment_value\">";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "glucose_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        }
        // line 133
        echo "            ";
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "energy", array()) - ($context["from"] ?? null)) - ($context["fat_100g"] ?? null)) != (0 || ""))) {
            // line 134
            echo "            <tr id=\"nutriment_fat_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Matières grasses / Lipides</td>

                <td class=\"nutriment_value\">";
            // line 137
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "energy", array()) - ($context["from"] ?? null)) - ($context["fat_100g"] ?? null)), "html", null, true);
            echo " g</td>
            </tr>
            ";
        } else {
            // line 140
            echo "            <tr id=\"nutriment_fat_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Matières grasses / Lipides</td>

                <td class=\"nutriment_value\">Valeur manquante !</td>
            </tr>
            ";
        }
        // line 146
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "fat_100g", array()) != (0 || ""))) {
            // line 147
            echo "            <tr id=\"nutriment_saturated-fat_tr\" class=\"nutriment_sub\">
                <td class=\"nutriment_label\">dont Acides gras saturés</td>

                <td class=\"nutriment_value\" property=\"food:saturatedFatPer100g\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "fat_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        } else {
            // line 153
            echo "            <tr id=\"nutriment_saturated-fat_tr\" class=\"nutriment_sub\">
                <td class=\"nutriment_label\">dont Acides gras saturés</td>

                <td class=\"nutriment_value\" property=\"food:saturatedFatPer100g\">Valeur manquante !</td>
            </tr>
            ";
        }
        // line 159
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "carbohydrates_100g", array()) != (0 || ""))) {
            // line 160
            echo "            <tr id=\"nutriment_carbohydrates_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Glucides</td>

                <td class=\"nutriment_value\" property=\"food:carbohydratesPer100g\">";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "carbohydrates_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        } else {
            // line 166
            echo "            <tr id=\"nutriment_carbohydrates_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Glucides</td>

                <td class=\"nutriment_value\" property=\"food:carbohydratesPer100g\">Valeur manquante !</td>
            </tr>
            ";
        }
        // line 172
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "sugars_100g", array()) != (0 || ""))) {
            // line 173
            echo "            <tr id=\"nutriment_sugars_tr\" class=\"nutriment_sub\">
                <td class=\"nutriment_label\">dont Sucres</td>

                <td class=\"nutriment_value\" property=\"food:sugarsPer100g\">";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "sugars_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        } else {
            // line 179
            echo "            <tr id=\"nutriment_sugars_tr\" class=\"nutriment_sub\">
                <td class=\"nutriment_label\">dont Sucres</td>

                <td class=\"nutriment_value\" property=\"food:sugarsPer100g\">Valeur manquante !</td>
            </tr>
            ";
        }
        // line 185
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "proteins_100g", array()) != (0 || ""))) {
            // line 186
            echo "            <tr id=\"nutriment_proteins_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Protéines</td>

                <td class=\"nutriment_value\" property=\"food:proteinsPer100g\" content=\"5.5\">";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "proteins_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        } else {
            // line 192
            echo "            <tr id=\"nutriment_proteins_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Protéines</td>

                <td class=\"nutriment_value\" property=\"food:proteinsPer100g\" content=\"5.5\">Valeur manquante !</td>
            </tr>
            ";
        }
        // line 198
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "salt_100g", array()) != (0 || ""))) {
            // line 199
            echo "            <tr id=\"nutriment_salt_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Sel</td>

                <td class=\"nutriment_value\" property=\"food:saltPer100g\" content=\"0.1\">";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "salt_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        } else {
            // line 205
            echo "            <tr id=\"nutriment_salt_tr\" class=\"nutriment_main\">
                <td class=\"nutriment_label\">Sel</td>

                <td class=\"nutriment_value\" property=\"food:saltPer100g\" content=\"0.1\">";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "salt_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        }
        // line 211
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "sodium_100g", array()) != (0 || ""))) {
            // line 212
            echo "            <tr id=\"nutriment_sodium_tr\" class=\"nutriment_sub\">
                <td class=\"nutriment_label\">
                    Sodium</td>
                <td class=\"nutriment_value\" property=\"food:sodiumEquivalentPer100g\" content=\"0.0394\">";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "sodium_100g", array()), "html", null, true);
            echo " g</td>
            </tr>
            ";
        } else {
            // line 218
            echo "            <tr id=\"nutriment_sodium_tr\" class=\"nutriment_sub\">
                <td class=\"nutriment_label\">
                    Sodium</td>
                <td class=\"nutriment_value\" property=\"food:sodiumEquivalentPer100g\" content=\"0.0394\">Valeur manquante !</td>
            </tr>
            ";
        }
        // line 224
        echo "            </tbody>
    </table>
        </p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "productView.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 224,  457 => 218,  451 => 215,  446 => 212,  443 => 211,  437 => 208,  432 => 205,  426 => 202,  421 => 199,  418 => 198,  410 => 192,  404 => 189,  399 => 186,  396 => 185,  388 => 179,  382 => 176,  377 => 173,  374 => 172,  366 => 166,  360 => 163,  355 => 160,  352 => 159,  344 => 153,  338 => 150,  333 => 147,  330 => 146,  322 => 140,  316 => 137,  311 => 134,  308 => 133,  302 => 130,  297 => 127,  294 => 126,  288 => 123,  283 => 120,  280 => 119,  274 => 116,  269 => 113,  266 => 112,  260 => 109,  255 => 106,  252 => 105,  246 => 102,  241 => 99,  238 => 98,  232 => 95,  227 => 92,  224 => 91,  218 => 88,  213 => 85,  210 => 84,  204 => 81,  199 => 78,  196 => 77,  188 => 71,  180 => 68,  175 => 65,  173 => 64,  163 => 56,  156 => 54,  153 => 53,  150 => 52,  146 => 50,  139 => 46,  135 => 44,  132 => 43,  128 => 41,  122 => 39,  119 => 38,  115 => 36,  109 => 34,  106 => 33,  102 => 31,  96 => 29,  94 => 28,  89 => 25,  85 => 23,  79 => 20,  76 => 19,  74 => 18,  69 => 16,  64 => 13,  56 => 11,  48 => 9,  46 => 8,  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "productView.html", "C:\\wamp64\\www\\MyFridgeFood\\view\\productView.html");
    }
}
