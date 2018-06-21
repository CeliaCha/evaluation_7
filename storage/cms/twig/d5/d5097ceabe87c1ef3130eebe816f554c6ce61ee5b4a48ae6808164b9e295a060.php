<?php

/* /Users/celiachazel/sandbox/october-celia/themes/themecelia/pages/404.htm */
class __TwigTemplate_7b70b9cc38381d2d1eb96c507c0bea0bbed0d8f06fe9bde7438f0ddb84068566 extends Twig_Template
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
        return "/Users/celiachazel/sandbox/october-celia/themes/themecelia/pages/404.htm";
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
</div>", "/Users/celiachazel/sandbox/october-celia/themes/themecelia/pages/404.htm", "");
    }
}
