<?php

/* /Users/celiachazel/sandbox/october-celia/themes/themecelia/partials/site/header.htm */
class __TwigTemplate_2e6c8a20571d28583066e2338b00afaf64bdeb42bbe709fac7509bd95b2bc143 extends Twig_Template
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
        echo "<header class=\"header\">
    <div class=\"header_a\">October - Celia</div>
    <div class=\"header_b\">Je suis</div>
    <div class=\"header_c\">un header</div>
    <div class=\"header_d\">structuré via</div>
    <div class=\"header_e\">css grid</div>
</header>";
    }

    public function getTemplateName()
    {
        return "/Users/celiachazel/sandbox/october-celia/themes/themecelia/partials/site/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"header\">
    <div class=\"header_a\">October - Celia</div>
    <div class=\"header_b\">Je suis</div>
    <div class=\"header_c\">un header</div>
    <div class=\"header_d\">structuré via</div>
    <div class=\"header_e\">css grid</div>
</header>", "/Users/celiachazel/sandbox/october-celia/themes/themecelia/partials/site/header.htm", "");
    }
}
