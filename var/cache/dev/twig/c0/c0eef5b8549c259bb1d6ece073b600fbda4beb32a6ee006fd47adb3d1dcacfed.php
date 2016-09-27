<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_f708112ace9a205ca0dce281fcf5dd56a097a77817bb1f4060617fd1f07b3d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caad6791492785863a3d8cea26ed6ecdd4c8f639c0bdc9fdd72d0fb42af7e50e = $this->env->getExtension("native_profiler");
        $__internal_caad6791492785863a3d8cea26ed6ecdd4c8f639c0bdc9fdd72d0fb42af7e50e->enter($__internal_caad6791492785863a3d8cea26ed6ecdd4c8f639c0bdc9fdd72d0fb42af7e50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caad6791492785863a3d8cea26ed6ecdd4c8f639c0bdc9fdd72d0fb42af7e50e->leave($__internal_caad6791492785863a3d8cea26ed6ecdd4c8f639c0bdc9fdd72d0fb42af7e50e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
";
    }
}
