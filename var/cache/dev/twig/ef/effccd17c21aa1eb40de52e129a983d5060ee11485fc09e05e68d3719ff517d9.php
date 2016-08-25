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
        $__internal_090c66f9e0e3e539c6d1fdc42789833ed2ac22f2a9530fd6348a7a2c0f64d109 = $this->env->getExtension("native_profiler");
        $__internal_090c66f9e0e3e539c6d1fdc42789833ed2ac22f2a9530fd6348a7a2c0f64d109->enter($__internal_090c66f9e0e3e539c6d1fdc42789833ed2ac22f2a9530fd6348a7a2c0f64d109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_090c66f9e0e3e539c6d1fdc42789833ed2ac22f2a9530fd6348a7a2c0f64d109->leave($__internal_090c66f9e0e3e539c6d1fdc42789833ed2ac22f2a9530fd6348a7a2c0f64d109_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_86b4411b4e0a89290f354affbbb2be8a78973c26ba255b8b490c2527238c57bf = $this->env->getExtension("native_profiler");
        $__internal_86b4411b4e0a89290f354affbbb2be8a78973c26ba255b8b490c2527238c57bf->enter($__internal_86b4411b4e0a89290f354affbbb2be8a78973c26ba255b8b490c2527238c57bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_86b4411b4e0a89290f354affbbb2be8a78973c26ba255b8b490c2527238c57bf->leave($__internal_86b4411b4e0a89290f354affbbb2be8a78973c26ba255b8b490c2527238c57bf_prof);

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
