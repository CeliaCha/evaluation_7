<?php

/* /Users/celiachazel/sandbox/install-master/themes/themecelia/pages/home.htm */
class __TwigTemplate_4ca78637dbaf5916968f4bde533297a7d0e6e621adf04178ebd95ce5f02c4ffc extends Twig_Template
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
        echo "<h1>Hello Simplon</h1>

<!-- Advance Slider -->
<div class=\"container-fluid\">
    ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("myslider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "</div>
<!-- End Advanced Slider -->";
    }

    public function getTemplateName()
    {
        return "/Users/celiachazel/sandbox/install-master/themes/themecelia/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Hello Simplon</h1>

<!-- Advance Slider -->
<div class=\"container-fluid\">
    {% component 'myslider' %}
</div>
<!-- End Advanced Slider -->", "/Users/celiachazel/sandbox/install-master/themes/themecelia/pages/home.htm", "");
    }
}
