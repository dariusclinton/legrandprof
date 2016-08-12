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
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9464ff2e3787e7ad1d29fb49654a52817844d403dc182d6cae89108ca5a9eea = $this->env->getExtension("native_profiler");
        $__internal_c9464ff2e3787e7ad1d29fb49654a52817844d403dc182d6cae89108ca5a9eea->enter($__internal_c9464ff2e3787e7ad1d29fb49654a52817844d403dc182d6cae89108ca5a9eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9464ff2e3787e7ad1d29fb49654a52817844d403dc182d6cae89108ca5a9eea->leave($__internal_c9464ff2e3787e7ad1d29fb49654a52817844d403dc182d6cae89108ca5a9eea_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_38e7a7712bc3d379110b614d885212d27036730a43b3f301300b5f0510f7dc03 = $this->env->getExtension("native_profiler");
        $__internal_38e7a7712bc3d379110b614d885212d27036730a43b3f301300b5f0510f7dc03->enter($__internal_38e7a7712bc3d379110b614d885212d27036730a43b3f301300b5f0510f7dc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_38e7a7712bc3d379110b614d885212d27036730a43b3f301300b5f0510f7dc03->leave($__internal_38e7a7712bc3d379110b614d885212d27036730a43b3f301300b5f0510f7dc03_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_69933e06c1f95b216faf92bb13852dffe22578f9eb2dbd2c79ca36b62e9b803d = $this->env->getExtension("native_profiler");
        $__internal_69933e06c1f95b216faf92bb13852dffe22578f9eb2dbd2c79ca36b62e9b803d->enter($__internal_69933e06c1f95b216faf92bb13852dffe22578f9eb2dbd2c79ca36b62e9b803d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_69933e06c1f95b216faf92bb13852dffe22578f9eb2dbd2c79ca36b62e9b803d->leave($__internal_69933e06c1f95b216faf92bb13852dffe22578f9eb2dbd2c79ca36b62e9b803d_prof);

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
        return array (  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     */
/*  */
/* {% endblock %}*/
