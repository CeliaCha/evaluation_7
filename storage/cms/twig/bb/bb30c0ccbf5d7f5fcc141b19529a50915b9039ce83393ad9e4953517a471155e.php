<?php

/* /Users/celiachazel/sandbox/october-celia/themes/themecelia/layouts/default.htm */
class __TwigTemplate_400ba9ae75ac8bceb9aadc86dba712069b3701d8c886a1ed4948d59fcbde6446 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
        <!-- <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\"> -->
        <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 15
        echo "    </head>
    <body>

             <!-- Header -->
            <header id=\"layout-header\">
                ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "            </header>
    
            <!-- Content -->
            <section id=\"layout-content\">
                ";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 26
        echo "            </section>
    
            <!-- Footer -->
            <footer id=\"layout-footer\">
                ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "            </footer>
    


        <!-- Scripts -->
        <script src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
        <!-- <script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script> -->
        <script src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>
        ";
        // line 39
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 40
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 41
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/celiachazel/sandbox/october-celia/themes/themecelia/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  114 => 40,  107 => 39,  103 => 38,  99 => 37,  95 => 36,  88 => 31,  84 => 30,  78 => 26,  76 => 25,  70 => 21,  66 => 20,  59 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        <!-- <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\"> -->
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
    </head>
    <body>

             <!-- Header -->
            <header id=\"layout-header\">
                {% partial 'site/header' %}
            </header>
    
            <!-- Content -->
            <section id=\"layout-content\">
                {% page %}
            </section>
    
            <!-- Footer -->
            <footer id=\"layout-footer\">
                {% partial 'site/footer' %}
            </footer>
    


        <!-- Scripts -->
        <script src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
        <!-- <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script> -->
        <script src=\"{{ 'assets/js/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "/Users/celiachazel/sandbox/october-celia/themes/themecelia/layouts/default.htm", "");
    }
}
