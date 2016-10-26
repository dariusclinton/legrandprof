<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_cac7c49c5c257517a6303ea40dbef17bb336b7f902dbc347b0804d750fd6d844 extends Twig_Template
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
        $__internal_8cc9b1fb9f2abeda4237f6dd5f536e641b2718494cf8d1ad84434295cc016f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc9b1fb9f2abeda4237f6dd5f536e641b2718494cf8d1ad84434295cc016f8e->enter($__internal_8cc9b1fb9f2abeda4237f6dd5f536e641b2718494cf8d1ad84434295cc016f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cc9b1fb9f2abeda4237f6dd5f536e641b2718494cf8d1ad84434295cc016f8e->leave($__internal_8cc9b1fb9f2abeda4237f6dd5f536e641b2718494cf8d1ad84434295cc016f8e_prof);

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
