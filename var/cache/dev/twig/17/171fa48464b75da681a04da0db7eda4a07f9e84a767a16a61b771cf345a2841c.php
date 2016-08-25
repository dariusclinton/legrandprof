<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a365c43e2283cc114ef69c3c9bced7663943658741742b5854409f8c840b4449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5eb1157598cff55b4fe89df130282f421ae7a779015a576e8f5d019d08863202 = $this->env->getExtension("native_profiler");
        $__internal_5eb1157598cff55b4fe89df130282f421ae7a779015a576e8f5d019d08863202->enter($__internal_5eb1157598cff55b4fe89df130282f421ae7a779015a576e8f5d019d08863202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_5eb1157598cff55b4fe89df130282f421ae7a779015a576e8f5d019d08863202->leave($__internal_5eb1157598cff55b4fe89df130282f421ae7a779015a576e8f5d019d08863202_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
