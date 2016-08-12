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
        $__internal_a7dcd36a97acd93027b6992c554d472518c39daa520b1fbb565c20c46686ec73 = $this->env->getExtension("native_profiler");
        $__internal_a7dcd36a97acd93027b6992c554d472518c39daa520b1fbb565c20c46686ec73->enter($__internal_a7dcd36a97acd93027b6992c554d472518c39daa520b1fbb565c20c46686ec73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a7dcd36a97acd93027b6992c554d472518c39daa520b1fbb565c20c46686ec73->leave($__internal_a7dcd36a97acd93027b6992c554d472518c39daa520b1fbb565c20c46686ec73_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_22a06256bbf51b08c1dab45c4773131e942cc7faa6ddee2aa5957c358f9030df = $this->env->getExtension("native_profiler");
        $__internal_22a06256bbf51b08c1dab45c4773131e942cc7faa6ddee2aa5957c358f9030df->enter($__internal_22a06256bbf51b08c1dab45c4773131e942cc7faa6ddee2aa5957c358f9030df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_22a06256bbf51b08c1dab45c4773131e942cc7faa6ddee2aa5957c358f9030df->leave($__internal_22a06256bbf51b08c1dab45c4773131e942cc7faa6ddee2aa5957c358f9030df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9440545b193baa4c127481b105b9597b3a0c59b24fc58ec5550724e76b268cab = $this->env->getExtension("native_profiler");
        $__internal_9440545b193baa4c127481b105b9597b3a0c59b24fc58ec5550724e76b268cab->enter($__internal_9440545b193baa4c127481b105b9597b3a0c59b24fc58ec5550724e76b268cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9440545b193baa4c127481b105b9597b3a0c59b24fc58ec5550724e76b268cab->leave($__internal_9440545b193baa4c127481b105b9597b3a0c59b24fc58ec5550724e76b268cab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_938789467c1cac6fb9ebfaf0504dba5b283b81f1da89a75cd277838bb42dd1a4 = $this->env->getExtension("native_profiler");
        $__internal_938789467c1cac6fb9ebfaf0504dba5b283b81f1da89a75cd277838bb42dd1a4->enter($__internal_938789467c1cac6fb9ebfaf0504dba5b283b81f1da89a75cd277838bb42dd1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_938789467c1cac6fb9ebfaf0504dba5b283b81f1da89a75cd277838bb42dd1a4->leave($__internal_938789467c1cac6fb9ebfaf0504dba5b283b81f1da89a75cd277838bb42dd1a4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee17748daa69d288c48fd03e82f7e8965cbd9be3da913f30cd04b4cda0a81ae7 = $this->env->getExtension("native_profiler");
        $__internal_ee17748daa69d288c48fd03e82f7e8965cbd9be3da913f30cd04b4cda0a81ae7->enter($__internal_ee17748daa69d288c48fd03e82f7e8965cbd9be3da913f30cd04b4cda0a81ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ee17748daa69d288c48fd03e82f7e8965cbd9be3da913f30cd04b4cda0a81ae7->leave($__internal_ee17748daa69d288c48fd03e82f7e8965cbd9be3da913f30cd04b4cda0a81ae7_prof);

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
