<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_9e0f572e0c0280647b9b8a875421bc470ad68898f8274e3f86adaabe18101334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2931a928d0158790e717cfafb6fe3365b6a078dc8c8886613700967c759cc99e = $this->env->getExtension("native_profiler");
        $__internal_2931a928d0158790e717cfafb6fe3365b6a078dc8c8886613700967c759cc99e->enter($__internal_2931a928d0158790e717cfafb6fe3365b6a078dc8c8886613700967c759cc99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2931a928d0158790e717cfafb6fe3365b6a078dc8c8886613700967c759cc99e->leave($__internal_2931a928d0158790e717cfafb6fe3365b6a078dc8c8886613700967c759cc99e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
";
    }
}
