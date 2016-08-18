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
        $__internal_0e0cbf2bd9c5ee25dad73c5e76a05271ebf9edda6b0d6c103f6cbbf89433ecaa = $this->env->getExtension("native_profiler");
        $__internal_0e0cbf2bd9c5ee25dad73c5e76a05271ebf9edda6b0d6c103f6cbbf89433ecaa->enter($__internal_0e0cbf2bd9c5ee25dad73c5e76a05271ebf9edda6b0d6c103f6cbbf89433ecaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e0cbf2bd9c5ee25dad73c5e76a05271ebf9edda6b0d6c103f6cbbf89433ecaa->leave($__internal_0e0cbf2bd9c5ee25dad73c5e76a05271ebf9edda6b0d6c103f6cbbf89433ecaa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_941ca0e28e159002469b10dc4ea528dbda7f76f328fe077cd27475fe86f5233a = $this->env->getExtension("native_profiler");
        $__internal_941ca0e28e159002469b10dc4ea528dbda7f76f328fe077cd27475fe86f5233a->enter($__internal_941ca0e28e159002469b10dc4ea528dbda7f76f328fe077cd27475fe86f5233a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_941ca0e28e159002469b10dc4ea528dbda7f76f328fe077cd27475fe86f5233a->leave($__internal_941ca0e28e159002469b10dc4ea528dbda7f76f328fe077cd27475fe86f5233a_prof);

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
