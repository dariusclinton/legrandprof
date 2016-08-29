<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69d3642caebae62c796840d2747d5b4bec9274144aca54a56cd35bfb6b81ef82 = $this->env->getExtension("native_profiler");
        $__internal_69d3642caebae62c796840d2747d5b4bec9274144aca54a56cd35bfb6b81ef82->enter($__internal_69d3642caebae62c796840d2747d5b4bec9274144aca54a56cd35bfb6b81ef82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69d3642caebae62c796840d2747d5b4bec9274144aca54a56cd35bfb6b81ef82->leave($__internal_69d3642caebae62c796840d2747d5b4bec9274144aca54a56cd35bfb6b81ef82_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_da165e7da8e13bedeedce64e7ed3a3ffd249b08c377031254d35057d11c6c690 = $this->env->getExtension("native_profiler");
        $__internal_da165e7da8e13bedeedce64e7ed3a3ffd249b08c377031254d35057d11c6c690->enter($__internal_da165e7da8e13bedeedce64e7ed3a3ffd249b08c377031254d35057d11c6c690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_da165e7da8e13bedeedce64e7ed3a3ffd249b08c377031254d35057d11c6c690->leave($__internal_da165e7da8e13bedeedce64e7ed3a3ffd249b08c377031254d35057d11c6c690_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
