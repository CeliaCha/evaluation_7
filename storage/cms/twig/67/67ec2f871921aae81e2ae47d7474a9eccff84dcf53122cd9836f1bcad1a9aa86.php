<?php

/* /Users/celiachazel/sandbox/install-master/themes/themecelia/pages/404.htm */
class __TwigTemplate_da5b6dd21e468f904d6af0102fe17a86ac33053d4699f3f64e68580afcc25295 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Erreur 404</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/celiachazel/sandbox/install-master/themes/themecelia/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Erreur 404</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>", "/Users/celiachazel/sandbox/install-master/themes/themecelia/pages/404.htm", "");
    }
}
