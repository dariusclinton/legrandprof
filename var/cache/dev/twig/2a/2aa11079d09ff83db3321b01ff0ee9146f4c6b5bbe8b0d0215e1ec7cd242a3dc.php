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
        $__internal_b30179eb11bb4603c13b4d1ce975f801a3b913014e6e27d70660402548b9005a = $this->env->getExtension("native_profiler");
        $__internal_b30179eb11bb4603c13b4d1ce975f801a3b913014e6e27d70660402548b9005a->enter($__internal_b30179eb11bb4603c13b4d1ce975f801a3b913014e6e27d70660402548b9005a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b30179eb11bb4603c13b4d1ce975f801a3b913014e6e27d70660402548b9005a->leave($__internal_b30179eb11bb4603c13b4d1ce975f801a3b913014e6e27d70660402548b9005a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_62ae1332200f36af13e42f861f88aca20ac9d1e253c2c2b23ac77dc399cb44f5 = $this->env->getExtension("native_profiler");
        $__internal_62ae1332200f36af13e42f861f88aca20ac9d1e253c2c2b23ac77dc399cb44f5->enter($__internal_62ae1332200f36af13e42f861f88aca20ac9d1e253c2c2b23ac77dc399cb44f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_62ae1332200f36af13e42f861f88aca20ac9d1e253c2c2b23ac77dc399cb44f5->leave($__internal_62ae1332200f36af13e42f861f88aca20ac9d1e253c2c2b23ac77dc399cb44f5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6684529b2be34d4b8b08a14ae7ff5abc355319450f7f22c29edaf51d6d32b6da = $this->env->getExtension("native_profiler");
        $__internal_6684529b2be34d4b8b08a14ae7ff5abc355319450f7f22c29edaf51d6d32b6da->enter($__internal_6684529b2be34d4b8b08a14ae7ff5abc355319450f7f22c29edaf51d6d32b6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6684529b2be34d4b8b08a14ae7ff5abc355319450f7f22c29edaf51d6d32b6da->leave($__internal_6684529b2be34d4b8b08a14ae7ff5abc355319450f7f22c29edaf51d6d32b6da_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dd90b1cee25978472180043396ca9d9a3a9a462810bb9f6eb3189273f512375 = $this->env->getExtension("native_profiler");
        $__internal_0dd90b1cee25978472180043396ca9d9a3a9a462810bb9f6eb3189273f512375->enter($__internal_0dd90b1cee25978472180043396ca9d9a3a9a462810bb9f6eb3189273f512375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0dd90b1cee25978472180043396ca9d9a3a9a462810bb9f6eb3189273f512375->leave($__internal_0dd90b1cee25978472180043396ca9d9a3a9a462810bb9f6eb3189273f512375_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24fc52001135292458418f09dba174eba0d38b7fc243cea413e0f91260e3b804 = $this->env->getExtension("native_profiler");
        $__internal_24fc52001135292458418f09dba174eba0d38b7fc243cea413e0f91260e3b804->enter($__internal_24fc52001135292458418f09dba174eba0d38b7fc243cea413e0f91260e3b804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_24fc52001135292458418f09dba174eba0d38b7fc243cea413e0f91260e3b804->leave($__internal_24fc52001135292458418f09dba174eba0d38b7fc243cea413e0f91260e3b804_prof);

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
