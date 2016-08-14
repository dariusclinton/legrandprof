<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_76424bd045e9bf1a54203252e1f6641525ea7cb92f51655ae854943cac288d79 extends Twig_Template
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
        $__internal_3e3b2eba640742e0885f5c6cc07e6c8c5d384e4ae0901b4c19cc4340df1923ef = $this->env->getExtension("native_profiler");
        $__internal_3e3b2eba640742e0885f5c6cc07e6c8c5d384e4ae0901b4c19cc4340df1923ef->enter($__internal_3e3b2eba640742e0885f5c6cc07e6c8c5d384e4ae0901b4c19cc4340df1923ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e3b2eba640742e0885f5c6cc07e6c8c5d384e4ae0901b4c19cc4340df1923ef->leave($__internal_3e3b2eba640742e0885f5c6cc07e6c8c5d384e4ae0901b4c19cc4340df1923ef_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d480186f0422ff44e5833118de02d3904e7ee772058bcb249a18ce0c357d3658 = $this->env->getExtension("native_profiler");
        $__internal_d480186f0422ff44e5833118de02d3904e7ee772058bcb249a18ce0c357d3658->enter($__internal_d480186f0422ff44e5833118de02d3904e7ee772058bcb249a18ce0c357d3658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_d480186f0422ff44e5833118de02d3904e7ee772058bcb249a18ce0c357d3658->leave($__internal_d480186f0422ff44e5833118de02d3904e7ee772058bcb249a18ce0c357d3658_prof);

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
