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
        $__internal_45bc7a63318a51deaec3f5aac0d45d7ea1e983bb45b19de650bd7559bbaba20f = $this->env->getExtension("native_profiler");
        $__internal_45bc7a63318a51deaec3f5aac0d45d7ea1e983bb45b19de650bd7559bbaba20f->enter($__internal_45bc7a63318a51deaec3f5aac0d45d7ea1e983bb45b19de650bd7559bbaba20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_45bc7a63318a51deaec3f5aac0d45d7ea1e983bb45b19de650bd7559bbaba20f->leave($__internal_45bc7a63318a51deaec3f5aac0d45d7ea1e983bb45b19de650bd7559bbaba20f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba420f3100a62a3f9ac3b2f0b647fedbcad56e5c9979d13790387575530cb54f = $this->env->getExtension("native_profiler");
        $__internal_ba420f3100a62a3f9ac3b2f0b647fedbcad56e5c9979d13790387575530cb54f->enter($__internal_ba420f3100a62a3f9ac3b2f0b647fedbcad56e5c9979d13790387575530cb54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ba420f3100a62a3f9ac3b2f0b647fedbcad56e5c9979d13790387575530cb54f->leave($__internal_ba420f3100a62a3f9ac3b2f0b647fedbcad56e5c9979d13790387575530cb54f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03b54cdcee1b6a89682081d01d90cf7d7f262b5100563edb5838ad560ae53758 = $this->env->getExtension("native_profiler");
        $__internal_03b54cdcee1b6a89682081d01d90cf7d7f262b5100563edb5838ad560ae53758->enter($__internal_03b54cdcee1b6a89682081d01d90cf7d7f262b5100563edb5838ad560ae53758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_03b54cdcee1b6a89682081d01d90cf7d7f262b5100563edb5838ad560ae53758->leave($__internal_03b54cdcee1b6a89682081d01d90cf7d7f262b5100563edb5838ad560ae53758_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_049dc981eaa03e5708da10e2510c208d8d37ce880b3bff9fbf8e9e19adae3f19 = $this->env->getExtension("native_profiler");
        $__internal_049dc981eaa03e5708da10e2510c208d8d37ce880b3bff9fbf8e9e19adae3f19->enter($__internal_049dc981eaa03e5708da10e2510c208d8d37ce880b3bff9fbf8e9e19adae3f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_049dc981eaa03e5708da10e2510c208d8d37ce880b3bff9fbf8e9e19adae3f19->leave($__internal_049dc981eaa03e5708da10e2510c208d8d37ce880b3bff9fbf8e9e19adae3f19_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9142bc029b66f446b2d01de802dc7285091f9f413d0c0c6e00308f3ce7a0328 = $this->env->getExtension("native_profiler");
        $__internal_d9142bc029b66f446b2d01de802dc7285091f9f413d0c0c6e00308f3ce7a0328->enter($__internal_d9142bc029b66f446b2d01de802dc7285091f9f413d0c0c6e00308f3ce7a0328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d9142bc029b66f446b2d01de802dc7285091f9f413d0c0c6e00308f3ce7a0328->leave($__internal_d9142bc029b66f446b2d01de802dc7285091f9f413d0c0c6e00308f3ce7a0328_prof);

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
