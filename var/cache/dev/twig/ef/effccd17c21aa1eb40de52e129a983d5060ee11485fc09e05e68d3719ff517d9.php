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
        $__internal_9b030905402362c6ea3284c0ea80311f5ae42025b0f91c75bc15cf14f0dd46aa = $this->env->getExtension("native_profiler");
        $__internal_9b030905402362c6ea3284c0ea80311f5ae42025b0f91c75bc15cf14f0dd46aa->enter($__internal_9b030905402362c6ea3284c0ea80311f5ae42025b0f91c75bc15cf14f0dd46aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b030905402362c6ea3284c0ea80311f5ae42025b0f91c75bc15cf14f0dd46aa->leave($__internal_9b030905402362c6ea3284c0ea80311f5ae42025b0f91c75bc15cf14f0dd46aa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5627b27a457eef3d2fe5ba089f228fd93feee863131ed751619a421c1f01e6b0 = $this->env->getExtension("native_profiler");
        $__internal_5627b27a457eef3d2fe5ba089f228fd93feee863131ed751619a421c1f01e6b0->enter($__internal_5627b27a457eef3d2fe5ba089f228fd93feee863131ed751619a421c1f01e6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_5627b27a457eef3d2fe5ba089f228fd93feee863131ed751619a421c1f01e6b0->leave($__internal_5627b27a457eef3d2fe5ba089f228fd93feee863131ed751619a421c1f01e6b0_prof);

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
