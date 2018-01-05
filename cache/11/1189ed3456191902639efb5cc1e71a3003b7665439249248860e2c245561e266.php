<?php

/* recipeView.html */
class __TwigTemplate_37459be757b0d4dd96729f778252aa9f5c317f1fbf857838d014a2bd3356b63d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html", "recipeView.html", 1);
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

    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["recipe_user"] ?? null), "nom_recette", array()), "html", null, true);
        echo "</title>
";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
    <div class=\"col s12 m6 l6\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/upload/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["recipe_user"] ?? null), "photo", array()), "html", null, true);
        echo ".jpg); background-repeat:no-repeat; background-size:cover; height:500px;\">
    </div>
    <div class=\"col s12 m6 l6\">
        <p>
            <span class=\"nom_recette white-text\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["recipe_user"] ?? null), "nom_recette", array()), "html", null, true);
        echo "</span> <span class=\"pull-right\">ajouté par: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["recipe_user"] ?? null), "pseudo", array()), "html", null, true);
        echo "</span>
        </p>
        <ul class=\"postit\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredient"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredients"]) {
            // line 13
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
            echo "/MyFridgeFood/product/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ingredients"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ingredients"], "product_name", array()), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredients'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </ul>
    </div>
    <div class=\"col s12 m12 l12\">
        <p class=\"flow-text\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["recipe_user"] ?? null), "preparation", array()), "html", null, true);
        echo "</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "recipeView.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  78 => 15,  65 => 13,  61 => 12,  53 => 9,  44 => 5,  41 => 4,  38 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "recipeView.html", "C:\\wamp64\\www\\MyFridgeFood\\view\\RecipeView.html");
    }
}
