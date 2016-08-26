<?php

/* ::base.html.twig */
class __TwigTemplate_8fa811fc65623047773a627e091d7f138fe251551514b074c0f87dfe051c38a9 extends Twig_Template
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
        $__internal_b3dc148e25747717ac336c1702a6e84b7e338a82830e6df4676dffae42b0b960 = $this->env->getExtension("native_profiler");
        $__internal_b3dc148e25747717ac336c1702a6e84b7e338a82830e6df4676dffae42b0b960->enter($__internal_b3dc148e25747717ac336c1702a6e84b7e338a82830e6df4676dffae42b0b960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b3dc148e25747717ac336c1702a6e84b7e338a82830e6df4676dffae42b0b960->leave($__internal_b3dc148e25747717ac336c1702a6e84b7e338a82830e6df4676dffae42b0b960_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cad0f2de3a383aa801225cd416d4b453417c29f44581abcc213b06f64970f04 = $this->env->getExtension("native_profiler");
        $__internal_8cad0f2de3a383aa801225cd416d4b453417c29f44581abcc213b06f64970f04->enter($__internal_8cad0f2de3a383aa801225cd416d4b453417c29f44581abcc213b06f64970f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8cad0f2de3a383aa801225cd416d4b453417c29f44581abcc213b06f64970f04->leave($__internal_8cad0f2de3a383aa801225cd416d4b453417c29f44581abcc213b06f64970f04_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2881d38be721f099680475793f06c87f9177249572d3f93a6643456ab05759ce = $this->env->getExtension("native_profiler");
        $__internal_2881d38be721f099680475793f06c87f9177249572d3f93a6643456ab05759ce->enter($__internal_2881d38be721f099680475793f06c87f9177249572d3f93a6643456ab05759ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2881d38be721f099680475793f06c87f9177249572d3f93a6643456ab05759ce->leave($__internal_2881d38be721f099680475793f06c87f9177249572d3f93a6643456ab05759ce_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a557bfcdaf2654f25aa6a28dc286ea6490a46a2823f14cdcedc9d6c4af0987e4 = $this->env->getExtension("native_profiler");
        $__internal_a557bfcdaf2654f25aa6a28dc286ea6490a46a2823f14cdcedc9d6c4af0987e4->enter($__internal_a557bfcdaf2654f25aa6a28dc286ea6490a46a2823f14cdcedc9d6c4af0987e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a557bfcdaf2654f25aa6a28dc286ea6490a46a2823f14cdcedc9d6c4af0987e4->leave($__internal_a557bfcdaf2654f25aa6a28dc286ea6490a46a2823f14cdcedc9d6c4af0987e4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_867da2f84ba0b7904d0f2fcd12e7d2826a7639d66340cad56a3f7e34d4c68dc1 = $this->env->getExtension("native_profiler");
        $__internal_867da2f84ba0b7904d0f2fcd12e7d2826a7639d66340cad56a3f7e34d4c68dc1->enter($__internal_867da2f84ba0b7904d0f2fcd12e7d2826a7639d66340cad56a3f7e34d4c68dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_867da2f84ba0b7904d0f2fcd12e7d2826a7639d66340cad56a3f7e34d4c68dc1->leave($__internal_867da2f84ba0b7904d0f2fcd12e7d2826a7639d66340cad56a3f7e34d4c68dc1_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
