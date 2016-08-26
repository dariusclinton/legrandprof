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
        $__internal_71e1114da650f956e9676d3aa8d699f7c43833398b7e5013a2eb5e0e53665798 = $this->env->getExtension("native_profiler");
        $__internal_71e1114da650f956e9676d3aa8d699f7c43833398b7e5013a2eb5e0e53665798->enter($__internal_71e1114da650f956e9676d3aa8d699f7c43833398b7e5013a2eb5e0e53665798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e1114da650f956e9676d3aa8d699f7c43833398b7e5013a2eb5e0e53665798->leave($__internal_71e1114da650f956e9676d3aa8d699f7c43833398b7e5013a2eb5e0e53665798_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_da9aa669406c47acf49775d701d78cfed6b9c435d670f0291021c9c993bde9cf = $this->env->getExtension("native_profiler");
        $__internal_da9aa669406c47acf49775d701d78cfed6b9c435d670f0291021c9c993bde9cf->enter($__internal_da9aa669406c47acf49775d701d78cfed6b9c435d670f0291021c9c993bde9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_da9aa669406c47acf49775d701d78cfed6b9c435d670f0291021c9c993bde9cf->leave($__internal_da9aa669406c47acf49775d701d78cfed6b9c435d670f0291021c9c993bde9cf_prof);

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
