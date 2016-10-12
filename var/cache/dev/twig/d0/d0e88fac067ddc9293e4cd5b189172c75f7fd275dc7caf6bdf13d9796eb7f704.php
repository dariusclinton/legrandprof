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
        $__internal_931e387a3656b9d7fa54e79400118395df3bf4ac2751f6b7507136b8d355ba11 = $this->env->getExtension("native_profiler");
        $__internal_931e387a3656b9d7fa54e79400118395df3bf4ac2751f6b7507136b8d355ba11->enter($__internal_931e387a3656b9d7fa54e79400118395df3bf4ac2751f6b7507136b8d355ba11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_931e387a3656b9d7fa54e79400118395df3bf4ac2751f6b7507136b8d355ba11->leave($__internal_931e387a3656b9d7fa54e79400118395df3bf4ac2751f6b7507136b8d355ba11_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3400a0774bc9a494c9dc9139fd1cb1b7b953c5b509aabb4a6c5e3c52a89c5926 = $this->env->getExtension("native_profiler");
        $__internal_3400a0774bc9a494c9dc9139fd1cb1b7b953c5b509aabb4a6c5e3c52a89c5926->enter($__internal_3400a0774bc9a494c9dc9139fd1cb1b7b953c5b509aabb4a6c5e3c52a89c5926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3400a0774bc9a494c9dc9139fd1cb1b7b953c5b509aabb4a6c5e3c52a89c5926->leave($__internal_3400a0774bc9a494c9dc9139fd1cb1b7b953c5b509aabb4a6c5e3c52a89c5926_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8713cb9bda08ff618a4ed8432a1b6f56cad3e75f214075af5174ad5bb2d2a860 = $this->env->getExtension("native_profiler");
        $__internal_8713cb9bda08ff618a4ed8432a1b6f56cad3e75f214075af5174ad5bb2d2a860->enter($__internal_8713cb9bda08ff618a4ed8432a1b6f56cad3e75f214075af5174ad5bb2d2a860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8713cb9bda08ff618a4ed8432a1b6f56cad3e75f214075af5174ad5bb2d2a860->leave($__internal_8713cb9bda08ff618a4ed8432a1b6f56cad3e75f214075af5174ad5bb2d2a860_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7791313cef34a8e8bf8cbdad9f7fe2a23f9b6a886826694ab4d6eafbc4c97e58 = $this->env->getExtension("native_profiler");
        $__internal_7791313cef34a8e8bf8cbdad9f7fe2a23f9b6a886826694ab4d6eafbc4c97e58->enter($__internal_7791313cef34a8e8bf8cbdad9f7fe2a23f9b6a886826694ab4d6eafbc4c97e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7791313cef34a8e8bf8cbdad9f7fe2a23f9b6a886826694ab4d6eafbc4c97e58->leave($__internal_7791313cef34a8e8bf8cbdad9f7fe2a23f9b6a886826694ab4d6eafbc4c97e58_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b09fb38c396d78e91aba569ce7d55885740f14e5dd651f099d6c02964f621475 = $this->env->getExtension("native_profiler");
        $__internal_b09fb38c396d78e91aba569ce7d55885740f14e5dd651f099d6c02964f621475->enter($__internal_b09fb38c396d78e91aba569ce7d55885740f14e5dd651f099d6c02964f621475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b09fb38c396d78e91aba569ce7d55885740f14e5dd651f099d6c02964f621475->leave($__internal_b09fb38c396d78e91aba569ce7d55885740f14e5dd651f099d6c02964f621475_prof);

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
