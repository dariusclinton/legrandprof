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
        $__internal_ddfc6d279db86964c62527dc50f50eab88b99e0d1e588cc362d1346a108ec96d = $this->env->getExtension("native_profiler");
        $__internal_ddfc6d279db86964c62527dc50f50eab88b99e0d1e588cc362d1346a108ec96d->enter($__internal_ddfc6d279db86964c62527dc50f50eab88b99e0d1e588cc362d1346a108ec96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ddfc6d279db86964c62527dc50f50eab88b99e0d1e588cc362d1346a108ec96d->leave($__internal_ddfc6d279db86964c62527dc50f50eab88b99e0d1e588cc362d1346a108ec96d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cab5af5c13ac33c74c54f1fab2c5caf17482e245c0566a4c936a5499488731fc = $this->env->getExtension("native_profiler");
        $__internal_cab5af5c13ac33c74c54f1fab2c5caf17482e245c0566a4c936a5499488731fc->enter($__internal_cab5af5c13ac33c74c54f1fab2c5caf17482e245c0566a4c936a5499488731fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cab5af5c13ac33c74c54f1fab2c5caf17482e245c0566a4c936a5499488731fc->leave($__internal_cab5af5c13ac33c74c54f1fab2c5caf17482e245c0566a4c936a5499488731fc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2bb8f0ace86d64a8156e175fb487d9d73c06c6fb8c59f569188fb97be92f31ad = $this->env->getExtension("native_profiler");
        $__internal_2bb8f0ace86d64a8156e175fb487d9d73c06c6fb8c59f569188fb97be92f31ad->enter($__internal_2bb8f0ace86d64a8156e175fb487d9d73c06c6fb8c59f569188fb97be92f31ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2bb8f0ace86d64a8156e175fb487d9d73c06c6fb8c59f569188fb97be92f31ad->leave($__internal_2bb8f0ace86d64a8156e175fb487d9d73c06c6fb8c59f569188fb97be92f31ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_885ae1a40c7bf6993415d8fb99b390b26da49277d71fa10a5bfe399c7d484e24 = $this->env->getExtension("native_profiler");
        $__internal_885ae1a40c7bf6993415d8fb99b390b26da49277d71fa10a5bfe399c7d484e24->enter($__internal_885ae1a40c7bf6993415d8fb99b390b26da49277d71fa10a5bfe399c7d484e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_885ae1a40c7bf6993415d8fb99b390b26da49277d71fa10a5bfe399c7d484e24->leave($__internal_885ae1a40c7bf6993415d8fb99b390b26da49277d71fa10a5bfe399c7d484e24_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6fe28b44bb56864ddd1a5b0815e8efa09d49cdd709894646d0ee8a6e2ff60939 = $this->env->getExtension("native_profiler");
        $__internal_6fe28b44bb56864ddd1a5b0815e8efa09d49cdd709894646d0ee8a6e2ff60939->enter($__internal_6fe28b44bb56864ddd1a5b0815e8efa09d49cdd709894646d0ee8a6e2ff60939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6fe28b44bb56864ddd1a5b0815e8efa09d49cdd709894646d0ee8a6e2ff60939->leave($__internal_6fe28b44bb56864ddd1a5b0815e8efa09d49cdd709894646d0ee8a6e2ff60939_prof);

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
