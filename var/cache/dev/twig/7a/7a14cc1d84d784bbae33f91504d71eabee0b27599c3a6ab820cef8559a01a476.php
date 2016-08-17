<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ea1010ea581a864e9fe1aa0bc32435a0fdaa2da2559efa6e1c104ca220be309e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e8c6b33bdd78e8aa2a32cf6cf0be35bac6cfbe7876900db654290afcd19b1fe = $this->env->getExtension("native_profiler");
        $__internal_0e8c6b33bdd78e8aa2a32cf6cf0be35bac6cfbe7876900db654290afcd19b1fe->enter($__internal_0e8c6b33bdd78e8aa2a32cf6cf0be35bac6cfbe7876900db654290afcd19b1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0e8c6b33bdd78e8aa2a32cf6cf0be35bac6cfbe7876900db654290afcd19b1fe->leave($__internal_0e8c6b33bdd78e8aa2a32cf6cf0be35bac6cfbe7876900db654290afcd19b1fe_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_983af6bb05eb553fc360ff739c0e20723371a5171ce351d6f85371d2b2893ea8 = $this->env->getExtension("native_profiler");
        $__internal_983af6bb05eb553fc360ff739c0e20723371a5171ce351d6f85371d2b2893ea8->enter($__internal_983af6bb05eb553fc360ff739c0e20723371a5171ce351d6f85371d2b2893ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_983af6bb05eb553fc360ff739c0e20723371a5171ce351d6f85371d2b2893ea8->leave($__internal_983af6bb05eb553fc360ff739c0e20723371a5171ce351d6f85371d2b2893ea8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
