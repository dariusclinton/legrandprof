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
        $__internal_cb05b63c74a2fb75b8b6cb6894294b06a4f9842e619b0e7a5428d44484469c27 = $this->env->getExtension("native_profiler");
        $__internal_cb05b63c74a2fb75b8b6cb6894294b06a4f9842e619b0e7a5428d44484469c27->enter($__internal_cb05b63c74a2fb75b8b6cb6894294b06a4f9842e619b0e7a5428d44484469c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb05b63c74a2fb75b8b6cb6894294b06a4f9842e619b0e7a5428d44484469c27->leave($__internal_cb05b63c74a2fb75b8b6cb6894294b06a4f9842e619b0e7a5428d44484469c27_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_92152c7b791b5042651980570786b3688c36d3f90424501c21b64734a3005b61 = $this->env->getExtension("native_profiler");
        $__internal_92152c7b791b5042651980570786b3688c36d3f90424501c21b64734a3005b61->enter($__internal_92152c7b791b5042651980570786b3688c36d3f90424501c21b64734a3005b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_92152c7b791b5042651980570786b3688c36d3f90424501c21b64734a3005b61->leave($__internal_92152c7b791b5042651980570786b3688c36d3f90424501c21b64734a3005b61_prof);

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
