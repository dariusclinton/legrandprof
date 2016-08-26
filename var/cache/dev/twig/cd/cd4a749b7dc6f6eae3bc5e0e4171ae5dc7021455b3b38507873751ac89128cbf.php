<?php

/* @LGPCore/layout.html.twig */
class __TwigTemplate_129db1a7c18cdf2c8efd1b285948969fd5157eb8c89b733fd29a1b46cfa64f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LGPCore/layout.html.twig", 2);
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
        $__internal_b3122dcdcc0e5a108feb0afb40cfdd1694265902326c6afc55f490ce4032e608 = $this->env->getExtension("native_profiler");
        $__internal_b3122dcdcc0e5a108feb0afb40cfdd1694265902326c6afc55f490ce4032e608->enter($__internal_b3122dcdcc0e5a108feb0afb40cfdd1694265902326c6afc55f490ce4032e608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3122dcdcc0e5a108feb0afb40cfdd1694265902326c6afc55f490ce4032e608->leave($__internal_b3122dcdcc0e5a108feb0afb40cfdd1694265902326c6afc55f490ce4032e608_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c48ca3161ff2861a473769a9c80b4598499e4d4914cbf0c1626b34d806e24edc = $this->env->getExtension("native_profiler");
        $__internal_c48ca3161ff2861a473769a9c80b4598499e4d4914cbf0c1626b34d806e24edc->enter($__internal_c48ca3161ff2861a473769a9c80b4598499e4d4914cbf0c1626b34d806e24edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_c48ca3161ff2861a473769a9c80b4598499e4d4914cbf0c1626b34d806e24edc->leave($__internal_c48ca3161ff2861a473769a9c80b4598499e4d4914cbf0c1626b34d806e24edc_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCore/layout.html.twig";
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
