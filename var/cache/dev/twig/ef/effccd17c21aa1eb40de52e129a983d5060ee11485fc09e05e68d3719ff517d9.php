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
        $__internal_9da7476edf45673011490ca2cf0c7e6bcfe49f58a8b4e3dfe2a71e209c3639d1 = $this->env->getExtension("native_profiler");
        $__internal_9da7476edf45673011490ca2cf0c7e6bcfe49f58a8b4e3dfe2a71e209c3639d1->enter($__internal_9da7476edf45673011490ca2cf0c7e6bcfe49f58a8b4e3dfe2a71e209c3639d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9da7476edf45673011490ca2cf0c7e6bcfe49f58a8b4e3dfe2a71e209c3639d1->leave($__internal_9da7476edf45673011490ca2cf0c7e6bcfe49f58a8b4e3dfe2a71e209c3639d1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e53cffa41950ba588dfdedc61205e5c32f8da1454d65e40f2bf70cea45829051 = $this->env->getExtension("native_profiler");
        $__internal_e53cffa41950ba588dfdedc61205e5c32f8da1454d65e40f2bf70cea45829051->enter($__internal_e53cffa41950ba588dfdedc61205e5c32f8da1454d65e40f2bf70cea45829051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_e53cffa41950ba588dfdedc61205e5c32f8da1454d65e40f2bf70cea45829051->leave($__internal_e53cffa41950ba588dfdedc61205e5c32f8da1454d65e40f2bf70cea45829051_prof);

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
