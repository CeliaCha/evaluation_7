<?php

/* /Users/celiachazel/sandbox/install-master/themes/themecelia/layouts/fallback.htm */
class __TwigTemplate_fa372b855f3b18f79412858eaaa14a43b9108e3c5328dea1bed4b8e9d36ad29e extends Twig_Template
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
        return "/Users/celiachazel/sandbox/install-master/themes/themecelia/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/Users/celiachazel/sandbox/install-master/themes/themecelia/layouts/fallback.htm", "");
    }
}
