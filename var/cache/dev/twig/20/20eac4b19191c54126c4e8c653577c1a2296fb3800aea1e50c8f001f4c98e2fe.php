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
        $__internal_91e5d28f2a8805f9fc66fec963872fd345847e6884c4246b6b0e133f9192fd83 = $this->env->getExtension("native_profiler");
        $__internal_91e5d28f2a8805f9fc66fec963872fd345847e6884c4246b6b0e133f9192fd83->enter($__internal_91e5d28f2a8805f9fc66fec963872fd345847e6884c4246b6b0e133f9192fd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_91e5d28f2a8805f9fc66fec963872fd345847e6884c4246b6b0e133f9192fd83->leave($__internal_91e5d28f2a8805f9fc66fec963872fd345847e6884c4246b6b0e133f9192fd83_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e724da86976d65c8636673591559f256148b0c96f530098e36fef2df3751f44 = $this->env->getExtension("native_profiler");
        $__internal_9e724da86976d65c8636673591559f256148b0c96f530098e36fef2df3751f44->enter($__internal_9e724da86976d65c8636673591559f256148b0c96f530098e36fef2df3751f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9e724da86976d65c8636673591559f256148b0c96f530098e36fef2df3751f44->leave($__internal_9e724da86976d65c8636673591559f256148b0c96f530098e36fef2df3751f44_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6427b9eef0210d8695964e963f066f41222a8f06a6f6e6da0ad98e59a5959314 = $this->env->getExtension("native_profiler");
        $__internal_6427b9eef0210d8695964e963f066f41222a8f06a6f6e6da0ad98e59a5959314->enter($__internal_6427b9eef0210d8695964e963f066f41222a8f06a6f6e6da0ad98e59a5959314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6427b9eef0210d8695964e963f066f41222a8f06a6f6e6da0ad98e59a5959314->leave($__internal_6427b9eef0210d8695964e963f066f41222a8f06a6f6e6da0ad98e59a5959314_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b365d135eb5938ed8a2306b32a22f5307b415e2d315c12d280e211f5e651a68 = $this->env->getExtension("native_profiler");
        $__internal_2b365d135eb5938ed8a2306b32a22f5307b415e2d315c12d280e211f5e651a68->enter($__internal_2b365d135eb5938ed8a2306b32a22f5307b415e2d315c12d280e211f5e651a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b365d135eb5938ed8a2306b32a22f5307b415e2d315c12d280e211f5e651a68->leave($__internal_2b365d135eb5938ed8a2306b32a22f5307b415e2d315c12d280e211f5e651a68_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b34629246a255e1a810f7ddb04254305d82aa8f4738d09859735a15d096b416a = $this->env->getExtension("native_profiler");
        $__internal_b34629246a255e1a810f7ddb04254305d82aa8f4738d09859735a15d096b416a->enter($__internal_b34629246a255e1a810f7ddb04254305d82aa8f4738d09859735a15d096b416a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b34629246a255e1a810f7ddb04254305d82aa8f4738d09859735a15d096b416a->leave($__internal_b34629246a255e1a810f7ddb04254305d82aa8f4738d09859735a15d096b416a_prof);

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
