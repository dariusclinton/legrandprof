<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_b61c660bcda86d95d5da2d71e3a18f9005c2df9d0f7bad1ef5a4e8fe1a8b924a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_173e49322a977edaf3c591287ce96f4351c74501844b6694b737fc7c399c14b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173e49322a977edaf3c591287ce96f4351c74501844b6694b737fc7c399c14b6->enter($__internal_173e49322a977edaf3c591287ce96f4351c74501844b6694b737fc7c399c14b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_173e49322a977edaf3c591287ce96f4351c74501844b6694b737fc7c399c14b6->leave($__internal_173e49322a977edaf3c591287ce96f4351c74501844b6694b737fc7c399c14b6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
";
    }
}
