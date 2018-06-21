<?php

/* /Users/celiachazel/sandbox/october-celia/themes/themecelia/layouts/fallback.htm */
class __TwigTemplate_6c6c3e63b5fb742102ca3742090eefcfa4deb6ce806418453e0c8d117169bddf extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/Users/celiachazel/sandbox/october-celia/themes/themecelia/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/Users/celiachazel/sandbox/october-celia/themes/themecelia/layouts/fallback.htm", "");
    }
}
