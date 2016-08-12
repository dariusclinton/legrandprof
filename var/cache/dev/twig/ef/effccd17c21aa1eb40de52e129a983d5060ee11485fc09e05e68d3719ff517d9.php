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
        $__internal_c4e7eb51bdb15dc3f2b0f0d4921f29bdc684c623bc39aca4bd9fc8bf63f5df27 = $this->env->getExtension("native_profiler");
        $__internal_c4e7eb51bdb15dc3f2b0f0d4921f29bdc684c623bc39aca4bd9fc8bf63f5df27->enter($__internal_c4e7eb51bdb15dc3f2b0f0d4921f29bdc684c623bc39aca4bd9fc8bf63f5df27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4e7eb51bdb15dc3f2b0f0d4921f29bdc684c623bc39aca4bd9fc8bf63f5df27->leave($__internal_c4e7eb51bdb15dc3f2b0f0d4921f29bdc684c623bc39aca4bd9fc8bf63f5df27_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3aba97fc0a07a7516ce822484253147339667d650cf959e01138c0a60fb06451 = $this->env->getExtension("native_profiler");
        $__internal_3aba97fc0a07a7516ce822484253147339667d650cf959e01138c0a60fb06451->enter($__internal_3aba97fc0a07a7516ce822484253147339667d650cf959e01138c0a60fb06451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3aba97fc0a07a7516ce822484253147339667d650cf959e01138c0a60fb06451->leave($__internal_3aba97fc0a07a7516ce822484253147339667d650cf959e01138c0a60fb06451_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1be35681ca64e17b65555d169fca33b9de8797eb7b3252bb71eed8ac5179770a = $this->env->getExtension("native_profiler");
        $__internal_1be35681ca64e17b65555d169fca33b9de8797eb7b3252bb71eed8ac5179770a->enter($__internal_1be35681ca64e17b65555d169fca33b9de8797eb7b3252bb71eed8ac5179770a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_1be35681ca64e17b65555d169fca33b9de8797eb7b3252bb71eed8ac5179770a->leave($__internal_1be35681ca64e17b65555d169fca33b9de8797eb7b3252bb71eed8ac5179770a_prof);

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
