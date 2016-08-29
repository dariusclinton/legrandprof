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
        $__internal_e02e3d7485b3dc4f942dde36b950506b7d2126e83f0c497254f34e79fd7d3721 = $this->env->getExtension("native_profiler");
        $__internal_e02e3d7485b3dc4f942dde36b950506b7d2126e83f0c497254f34e79fd7d3721->enter($__internal_e02e3d7485b3dc4f942dde36b950506b7d2126e83f0c497254f34e79fd7d3721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e02e3d7485b3dc4f942dde36b950506b7d2126e83f0c497254f34e79fd7d3721->leave($__internal_e02e3d7485b3dc4f942dde36b950506b7d2126e83f0c497254f34e79fd7d3721_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecf00d52fdaa27fc3d7fdde1218b36b3e6f0e028b9e8c04504e85e36ee51bff8 = $this->env->getExtension("native_profiler");
        $__internal_ecf00d52fdaa27fc3d7fdde1218b36b3e6f0e028b9e8c04504e85e36ee51bff8->enter($__internal_ecf00d52fdaa27fc3d7fdde1218b36b3e6f0e028b9e8c04504e85e36ee51bff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_ecf00d52fdaa27fc3d7fdde1218b36b3e6f0e028b9e8c04504e85e36ee51bff8->leave($__internal_ecf00d52fdaa27fc3d7fdde1218b36b3e6f0e028b9e8c04504e85e36ee51bff8_prof);

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
