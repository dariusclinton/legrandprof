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
        $__internal_5eb6428fa66381830b3b7abed60232d574a8cf4d1b38f24be07ac1665e4f5bfd = $this->env->getExtension("native_profiler");
        $__internal_5eb6428fa66381830b3b7abed60232d574a8cf4d1b38f24be07ac1665e4f5bfd->enter($__internal_5eb6428fa66381830b3b7abed60232d574a8cf4d1b38f24be07ac1665e4f5bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb6428fa66381830b3b7abed60232d574a8cf4d1b38f24be07ac1665e4f5bfd->leave($__internal_5eb6428fa66381830b3b7abed60232d574a8cf4d1b38f24be07ac1665e4f5bfd_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_23f329c0cf96006895b53232d932b5b6ca6bb02b2708a856018f7c53c0c03b25 = $this->env->getExtension("native_profiler");
        $__internal_23f329c0cf96006895b53232d932b5b6ca6bb02b2708a856018f7c53c0c03b25->enter($__internal_23f329c0cf96006895b53232d932b5b6ca6bb02b2708a856018f7c53c0c03b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_23f329c0cf96006895b53232d932b5b6ca6bb02b2708a856018f7c53c0c03b25->leave($__internal_23f329c0cf96006895b53232d932b5b6ca6bb02b2708a856018f7c53c0c03b25_prof);

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
