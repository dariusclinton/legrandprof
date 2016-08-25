<?php

/* base.html.twig */
class __TwigTemplate_07e59192eb905907e6fafe1e40d079c5d535cc051e569b6414a97f546e436d49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69ffae830100f1ec4a96b907ddaa22466f92864403eee472253bfd1e3e159af4 = $this->env->getExtension("native_profiler");
        $__internal_69ffae830100f1ec4a96b907ddaa22466f92864403eee472253bfd1e3e159af4->enter($__internal_69ffae830100f1ec4a96b907ddaa22466f92864403eee472253bfd1e3e159af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_69ffae830100f1ec4a96b907ddaa22466f92864403eee472253bfd1e3e159af4->leave($__internal_69ffae830100f1ec4a96b907ddaa22466f92864403eee472253bfd1e3e159af4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d978cdddfffdd5353f30f65e9d9e7f61882e08bd02c0efceeb3a3707e680f2c = $this->env->getExtension("native_profiler");
        $__internal_3d978cdddfffdd5353f30f65e9d9e7f61882e08bd02c0efceeb3a3707e680f2c->enter($__internal_3d978cdddfffdd5353f30f65e9d9e7f61882e08bd02c0efceeb3a3707e680f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3d978cdddfffdd5353f30f65e9d9e7f61882e08bd02c0efceeb3a3707e680f2c->leave($__internal_3d978cdddfffdd5353f30f65e9d9e7f61882e08bd02c0efceeb3a3707e680f2c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8b25515f2591f323775ae6aa6784b524d28efe2ed942960720e05ceb4adeb17 = $this->env->getExtension("native_profiler");
        $__internal_e8b25515f2591f323775ae6aa6784b524d28efe2ed942960720e05ceb4adeb17->enter($__internal_e8b25515f2591f323775ae6aa6784b524d28efe2ed942960720e05ceb4adeb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e8b25515f2591f323775ae6aa6784b524d28efe2ed942960720e05ceb4adeb17->leave($__internal_e8b25515f2591f323775ae6aa6784b524d28efe2ed942960720e05ceb4adeb17_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f15b0a86e36ad56ecf532c526ac74a739438e144e6488d2f9f3c91477a26eb4 = $this->env->getExtension("native_profiler");
        $__internal_0f15b0a86e36ad56ecf532c526ac74a739438e144e6488d2f9f3c91477a26eb4->enter($__internal_0f15b0a86e36ad56ecf532c526ac74a739438e144e6488d2f9f3c91477a26eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0f15b0a86e36ad56ecf532c526ac74a739438e144e6488d2f9f3c91477a26eb4->leave($__internal_0f15b0a86e36ad56ecf532c526ac74a739438e144e6488d2f9f3c91477a26eb4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6abda1e2305b7eda1fae9c1e01a4f7664b63aa564fcd1f4a38ee404858dbfff = $this->env->getExtension("native_profiler");
        $__internal_e6abda1e2305b7eda1fae9c1e01a4f7664b63aa564fcd1f4a38ee404858dbfff->enter($__internal_e6abda1e2305b7eda1fae9c1e01a4f7664b63aa564fcd1f4a38ee404858dbfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e6abda1e2305b7eda1fae9c1e01a4f7664b63aa564fcd1f4a38ee404858dbfff->leave($__internal_e6abda1e2305b7eda1fae9c1e01a4f7664b63aa564fcd1f4a38ee404858dbfff_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
