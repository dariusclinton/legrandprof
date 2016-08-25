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
        $__internal_73e42dbece41ba3031a2da4b8e755ba50db0fed361a2216863682225d407e4b2 = $this->env->getExtension("native_profiler");
        $__internal_73e42dbece41ba3031a2da4b8e755ba50db0fed361a2216863682225d407e4b2->enter($__internal_73e42dbece41ba3031a2da4b8e755ba50db0fed361a2216863682225d407e4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73e42dbece41ba3031a2da4b8e755ba50db0fed361a2216863682225d407e4b2->leave($__internal_73e42dbece41ba3031a2da4b8e755ba50db0fed361a2216863682225d407e4b2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_db5326df274c7c97c79a3a8ed10f51d0e972634a42346aa17bec7589165dc0c1 = $this->env->getExtension("native_profiler");
        $__internal_db5326df274c7c97c79a3a8ed10f51d0e972634a42346aa17bec7589165dc0c1->enter($__internal_db5326df274c7c97c79a3a8ed10f51d0e972634a42346aa17bec7589165dc0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_db5326df274c7c97c79a3a8ed10f51d0e972634a42346aa17bec7589165dc0c1->leave($__internal_db5326df274c7c97c79a3a8ed10f51d0e972634a42346aa17bec7589165dc0c1_prof);

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
