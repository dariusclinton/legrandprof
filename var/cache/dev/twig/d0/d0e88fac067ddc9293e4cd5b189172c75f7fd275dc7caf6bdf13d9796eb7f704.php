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
        $__internal_3040d90a90a7489431e0b3af459d31afd283a3af1a9ab1206e48f8a44c601758 = $this->env->getExtension("native_profiler");
        $__internal_3040d90a90a7489431e0b3af459d31afd283a3af1a9ab1206e48f8a44c601758->enter($__internal_3040d90a90a7489431e0b3af459d31afd283a3af1a9ab1206e48f8a44c601758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3040d90a90a7489431e0b3af459d31afd283a3af1a9ab1206e48f8a44c601758->leave($__internal_3040d90a90a7489431e0b3af459d31afd283a3af1a9ab1206e48f8a44c601758_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b57003cff6ef2a2d9f76a6beff48d1a93fb43ced0b32d812edea8b0fb912eaa6 = $this->env->getExtension("native_profiler");
        $__internal_b57003cff6ef2a2d9f76a6beff48d1a93fb43ced0b32d812edea8b0fb912eaa6->enter($__internal_b57003cff6ef2a2d9f76a6beff48d1a93fb43ced0b32d812edea8b0fb912eaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b57003cff6ef2a2d9f76a6beff48d1a93fb43ced0b32d812edea8b0fb912eaa6->leave($__internal_b57003cff6ef2a2d9f76a6beff48d1a93fb43ced0b32d812edea8b0fb912eaa6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17d6c5be39caf6a5125139a559d8d429dc981e3176c54fa6ddaf56e9969a4e54 = $this->env->getExtension("native_profiler");
        $__internal_17d6c5be39caf6a5125139a559d8d429dc981e3176c54fa6ddaf56e9969a4e54->enter($__internal_17d6c5be39caf6a5125139a559d8d429dc981e3176c54fa6ddaf56e9969a4e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_17d6c5be39caf6a5125139a559d8d429dc981e3176c54fa6ddaf56e9969a4e54->leave($__internal_17d6c5be39caf6a5125139a559d8d429dc981e3176c54fa6ddaf56e9969a4e54_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c30ccb2b7febb500ef7d44b5260250875d3de0c1a264534d71063fdadfdaad3 = $this->env->getExtension("native_profiler");
        $__internal_1c30ccb2b7febb500ef7d44b5260250875d3de0c1a264534d71063fdadfdaad3->enter($__internal_1c30ccb2b7febb500ef7d44b5260250875d3de0c1a264534d71063fdadfdaad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c30ccb2b7febb500ef7d44b5260250875d3de0c1a264534d71063fdadfdaad3->leave($__internal_1c30ccb2b7febb500ef7d44b5260250875d3de0c1a264534d71063fdadfdaad3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8392cea042e26c5b754ca218cd7b919d240e8e4cfd7e3d1d9521b8d617888b6e = $this->env->getExtension("native_profiler");
        $__internal_8392cea042e26c5b754ca218cd7b919d240e8e4cfd7e3d1d9521b8d617888b6e->enter($__internal_8392cea042e26c5b754ca218cd7b919d240e8e4cfd7e3d1d9521b8d617888b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8392cea042e26c5b754ca218cd7b919d240e8e4cfd7e3d1d9521b8d617888b6e->leave($__internal_8392cea042e26c5b754ca218cd7b919d240e8e4cfd7e3d1d9521b8d617888b6e_prof);

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
