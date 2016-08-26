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
        $__internal_809dfa6a4a0f8e9a50afcfaa520abb010a69d5f67a3c8ca37fadbc4fce437161 = $this->env->getExtension("native_profiler");
        $__internal_809dfa6a4a0f8e9a50afcfaa520abb010a69d5f67a3c8ca37fadbc4fce437161->enter($__internal_809dfa6a4a0f8e9a50afcfaa520abb010a69d5f67a3c8ca37fadbc4fce437161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_809dfa6a4a0f8e9a50afcfaa520abb010a69d5f67a3c8ca37fadbc4fce437161->leave($__internal_809dfa6a4a0f8e9a50afcfaa520abb010a69d5f67a3c8ca37fadbc4fce437161_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c0700754bc3f55805461221cf8cbaae85568c1ffee840ddda016dca4c78bef4 = $this->env->getExtension("native_profiler");
        $__internal_7c0700754bc3f55805461221cf8cbaae85568c1ffee840ddda016dca4c78bef4->enter($__internal_7c0700754bc3f55805461221cf8cbaae85568c1ffee840ddda016dca4c78bef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_7c0700754bc3f55805461221cf8cbaae85568c1ffee840ddda016dca4c78bef4->leave($__internal_7c0700754bc3f55805461221cf8cbaae85568c1ffee840ddda016dca4c78bef4_prof);

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
