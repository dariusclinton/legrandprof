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
        $__internal_5a9b9616a82282c1a4c14948e018267092ddc1c340e3173048837f962070e533 = $this->env->getExtension("native_profiler");
        $__internal_5a9b9616a82282c1a4c14948e018267092ddc1c340e3173048837f962070e533->enter($__internal_5a9b9616a82282c1a4c14948e018267092ddc1c340e3173048837f962070e533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5a9b9616a82282c1a4c14948e018267092ddc1c340e3173048837f962070e533->leave($__internal_5a9b9616a82282c1a4c14948e018267092ddc1c340e3173048837f962070e533_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca34b8e9a230ace9bd0721e561509f88c0cb9492c6d495ff8cac543fc5522b36 = $this->env->getExtension("native_profiler");
        $__internal_ca34b8e9a230ace9bd0721e561509f88c0cb9492c6d495ff8cac543fc5522b36->enter($__internal_ca34b8e9a230ace9bd0721e561509f88c0cb9492c6d495ff8cac543fc5522b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ca34b8e9a230ace9bd0721e561509f88c0cb9492c6d495ff8cac543fc5522b36->leave($__internal_ca34b8e9a230ace9bd0721e561509f88c0cb9492c6d495ff8cac543fc5522b36_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50e4eda9c62b906daf15cad1f27fead46c6fd617f20a360b96f1ba2efd16efad = $this->env->getExtension("native_profiler");
        $__internal_50e4eda9c62b906daf15cad1f27fead46c6fd617f20a360b96f1ba2efd16efad->enter($__internal_50e4eda9c62b906daf15cad1f27fead46c6fd617f20a360b96f1ba2efd16efad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_50e4eda9c62b906daf15cad1f27fead46c6fd617f20a360b96f1ba2efd16efad->leave($__internal_50e4eda9c62b906daf15cad1f27fead46c6fd617f20a360b96f1ba2efd16efad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6670532d5df51916eb906b7207b9c05bc0b9be51e2d97b299850cffcedcc89e7 = $this->env->getExtension("native_profiler");
        $__internal_6670532d5df51916eb906b7207b9c05bc0b9be51e2d97b299850cffcedcc89e7->enter($__internal_6670532d5df51916eb906b7207b9c05bc0b9be51e2d97b299850cffcedcc89e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6670532d5df51916eb906b7207b9c05bc0b9be51e2d97b299850cffcedcc89e7->leave($__internal_6670532d5df51916eb906b7207b9c05bc0b9be51e2d97b299850cffcedcc89e7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8ce8457a5213c6467984c138846aae617ead77c6a195e0a96b84f37e67176da6 = $this->env->getExtension("native_profiler");
        $__internal_8ce8457a5213c6467984c138846aae617ead77c6a195e0a96b84f37e67176da6->enter($__internal_8ce8457a5213c6467984c138846aae617ead77c6a195e0a96b84f37e67176da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8ce8457a5213c6467984c138846aae617ead77c6a195e0a96b84f37e67176da6->leave($__internal_8ce8457a5213c6467984c138846aae617ead77c6a195e0a96b84f37e67176da6_prof);

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
