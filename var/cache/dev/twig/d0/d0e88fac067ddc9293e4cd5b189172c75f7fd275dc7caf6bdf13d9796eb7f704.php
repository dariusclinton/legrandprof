<?php

/* ::base.html.twig */
class __TwigTemplate_7a2f2d95223c043aa62cb0a1e1e226295a550e70246b38a27b6b2e05caeedbe6 extends Twig_Template
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
        $__internal_b755f0c4f8764a4fdfd4fd15beb68fcd56e50c8395162ad69eecbf53bde5214b = $this->env->getExtension("native_profiler");
        $__internal_b755f0c4f8764a4fdfd4fd15beb68fcd56e50c8395162ad69eecbf53bde5214b->enter($__internal_b755f0c4f8764a4fdfd4fd15beb68fcd56e50c8395162ad69eecbf53bde5214b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b755f0c4f8764a4fdfd4fd15beb68fcd56e50c8395162ad69eecbf53bde5214b->leave($__internal_b755f0c4f8764a4fdfd4fd15beb68fcd56e50c8395162ad69eecbf53bde5214b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb72c2005870e1fc1db3e60b0f4484f1513f22e5b8b674e3b7e5282928b1c726 = $this->env->getExtension("native_profiler");
        $__internal_bb72c2005870e1fc1db3e60b0f4484f1513f22e5b8b674e3b7e5282928b1c726->enter($__internal_bb72c2005870e1fc1db3e60b0f4484f1513f22e5b8b674e3b7e5282928b1c726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bb72c2005870e1fc1db3e60b0f4484f1513f22e5b8b674e3b7e5282928b1c726->leave($__internal_bb72c2005870e1fc1db3e60b0f4484f1513f22e5b8b674e3b7e5282928b1c726_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f30eefd126ca6fa8e6bac9f0548d422a165184c68d735ea5cffed34961a83484 = $this->env->getExtension("native_profiler");
        $__internal_f30eefd126ca6fa8e6bac9f0548d422a165184c68d735ea5cffed34961a83484->enter($__internal_f30eefd126ca6fa8e6bac9f0548d422a165184c68d735ea5cffed34961a83484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f30eefd126ca6fa8e6bac9f0548d422a165184c68d735ea5cffed34961a83484->leave($__internal_f30eefd126ca6fa8e6bac9f0548d422a165184c68d735ea5cffed34961a83484_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_106a33a17faff5ca40a6c40a389838177482f12a2be95012705fbfa72b1cd345 = $this->env->getExtension("native_profiler");
        $__internal_106a33a17faff5ca40a6c40a389838177482f12a2be95012705fbfa72b1cd345->enter($__internal_106a33a17faff5ca40a6c40a389838177482f12a2be95012705fbfa72b1cd345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_106a33a17faff5ca40a6c40a389838177482f12a2be95012705fbfa72b1cd345->leave($__internal_106a33a17faff5ca40a6c40a389838177482f12a2be95012705fbfa72b1cd345_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0fcb0a8057cb2bfc26c2475cd494c5ed37ecf1fd72a4e11aec092cf57f17983a = $this->env->getExtension("native_profiler");
        $__internal_0fcb0a8057cb2bfc26c2475cd494c5ed37ecf1fd72a4e11aec092cf57f17983a->enter($__internal_0fcb0a8057cb2bfc26c2475cd494c5ed37ecf1fd72a4e11aec092cf57f17983a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0fcb0a8057cb2bfc26c2475cd494c5ed37ecf1fd72a4e11aec092cf57f17983a->leave($__internal_0fcb0a8057cb2bfc26c2475cd494c5ed37ecf1fd72a4e11aec092cf57f17983a_prof);

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

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
