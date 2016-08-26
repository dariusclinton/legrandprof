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
        $__internal_a19535649f137b8c08d98756aa47f3c6f5f455bc2a5827e651ab62f0643a50c3 = $this->env->getExtension("native_profiler");
        $__internal_a19535649f137b8c08d98756aa47f3c6f5f455bc2a5827e651ab62f0643a50c3->enter($__internal_a19535649f137b8c08d98756aa47f3c6f5f455bc2a5827e651ab62f0643a50c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a19535649f137b8c08d98756aa47f3c6f5f455bc2a5827e651ab62f0643a50c3->leave($__internal_a19535649f137b8c08d98756aa47f3c6f5f455bc2a5827e651ab62f0643a50c3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_970457715893c4a7e2f011fbaaa04ce88e56c96ca67553fb4a16affde3596dd6 = $this->env->getExtension("native_profiler");
        $__internal_970457715893c4a7e2f011fbaaa04ce88e56c96ca67553fb4a16affde3596dd6->enter($__internal_970457715893c4a7e2f011fbaaa04ce88e56c96ca67553fb4a16affde3596dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_970457715893c4a7e2f011fbaaa04ce88e56c96ca67553fb4a16affde3596dd6->leave($__internal_970457715893c4a7e2f011fbaaa04ce88e56c96ca67553fb4a16affde3596dd6_prof);

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
