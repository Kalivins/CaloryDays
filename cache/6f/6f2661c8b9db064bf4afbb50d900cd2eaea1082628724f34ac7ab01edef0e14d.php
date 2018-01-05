<?php

/* recipe_result.html */
class __TwigTemplate_9bc67bc6790f56fdf57a5f436046b1d8c68a1cb8443b1471574d4d8625705f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html", "recipe_result.html", 1);
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
        if ((($context["bool"] ?? null) == false)) {
            // line 3
            echo "<title>Votre recette n'a pas été ajouté</title>
";
        } else {
            // line 5
            echo "<title>Votre recette a bien été ajouté</title>
";
        }
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        if ((($context["bool"] ?? null) == false)) {
            // line 10
            echo "<div class=\"container\">
    <p>Une erreur est survenue pendant l'ajout de la recette !</p>
</div>
";
        } else {
            // line 14
            echo "<div class=\"container\">
    <p>Votre recette a bien été ajouté !!</p>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "recipe_result.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  48 => 10,  46 => 9,  43 => 8,  37 => 5,  33 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "recipe_result.html", "C:\\wamp64\\www\\MyFridgeFood\\view\\recipe_result.html");
    }
}
