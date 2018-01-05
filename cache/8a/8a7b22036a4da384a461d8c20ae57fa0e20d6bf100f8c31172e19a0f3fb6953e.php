<?php

/* deconnexion.html */
class __TwigTemplate_8de87f04c3f0b731ec3fa3b58e33fa91d058726e921462aaf82b5122f1f63d7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html", "deconnexion.html", 1);
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
        echo "<title>A bientôt sur MyFridgeFood</title>
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>Vous venez de vous déconnecter.</p>
";
    }

    public function getTemplateName()
    {
        return "deconnexion.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "deconnexion.html", "C:\\wamp64\\www\\MyFridgeFood\\view\\deconnexion.html");
    }
}
