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
        $__internal_7ffad92cce1109f5d435ba1210529f77386aecc0d3af966154be2fb034e67aad = $this->env->getExtension("native_profiler");
        $__internal_7ffad92cce1109f5d435ba1210529f77386aecc0d3af966154be2fb034e67aad->enter($__internal_7ffad92cce1109f5d435ba1210529f77386aecc0d3af966154be2fb034e67aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ffad92cce1109f5d435ba1210529f77386aecc0d3af966154be2fb034e67aad->leave($__internal_7ffad92cce1109f5d435ba1210529f77386aecc0d3af966154be2fb034e67aad_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_062429a8a8e3904a6f83e5c0a40ba252e7cd4e29f80aa68e81a96374a8bed738 = $this->env->getExtension("native_profiler");
        $__internal_062429a8a8e3904a6f83e5c0a40ba252e7cd4e29f80aa68e81a96374a8bed738->enter($__internal_062429a8a8e3904a6f83e5c0a40ba252e7cd4e29f80aa68e81a96374a8bed738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_062429a8a8e3904a6f83e5c0a40ba252e7cd4e29f80aa68e81a96374a8bed738->leave($__internal_062429a8a8e3904a6f83e5c0a40ba252e7cd4e29f80aa68e81a96374a8bed738_prof);

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
