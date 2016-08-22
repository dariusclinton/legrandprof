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
        $__internal_2cdd02ae2e70c6e5d25cb2b49cecae6fac2308d0decdccab9560ebe57429a3b2 = $this->env->getExtension("native_profiler");
        $__internal_2cdd02ae2e70c6e5d25cb2b49cecae6fac2308d0decdccab9560ebe57429a3b2->enter($__internal_2cdd02ae2e70c6e5d25cb2b49cecae6fac2308d0decdccab9560ebe57429a3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cdd02ae2e70c6e5d25cb2b49cecae6fac2308d0decdccab9560ebe57429a3b2->leave($__internal_2cdd02ae2e70c6e5d25cb2b49cecae6fac2308d0decdccab9560ebe57429a3b2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_45b52bb66bce086ce15553bb8ad9aefdc3f9dbabdaf2652ab83ff2bb09606ecf = $this->env->getExtension("native_profiler");
        $__internal_45b52bb66bce086ce15553bb8ad9aefdc3f9dbabdaf2652ab83ff2bb09606ecf->enter($__internal_45b52bb66bce086ce15553bb8ad9aefdc3f9dbabdaf2652ab83ff2bb09606ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_45b52bb66bce086ce15553bb8ad9aefdc3f9dbabdaf2652ab83ff2bb09606ecf->leave($__internal_45b52bb66bce086ce15553bb8ad9aefdc3f9dbabdaf2652ab83ff2bb09606ecf_prof);

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
