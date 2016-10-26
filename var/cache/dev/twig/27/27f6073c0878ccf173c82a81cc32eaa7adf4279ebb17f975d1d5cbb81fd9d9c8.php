<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_36fa75712748c05be75d82ae08c29a65c604b59811bfc4a830df095ace9d3cde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1629f1e8d5bf06cfc3139c4965e0f0e13736cf3964be97f57a58b9049c2dfbfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1629f1e8d5bf06cfc3139c4965e0f0e13736cf3964be97f57a58b9049c2dfbfe->enter($__internal_1629f1e8d5bf06cfc3139c4965e0f0e13736cf3964be97f57a58b9049c2dfbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1629f1e8d5bf06cfc3139c4965e0f0e13736cf3964be97f57a58b9049c2dfbfe->leave($__internal_1629f1e8d5bf06cfc3139c4965e0f0e13736cf3964be97f57a58b9049c2dfbfe_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
";
    }
}
