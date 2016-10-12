<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_c2083813bd3fe89d2459fc3e92814d2efdf9222d54481cd5966e20ee6aab6817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a880d76ce81cc4a9858ed11584f08e1be0c4c3c00662f72a713dcf7bf7fcf1a0 = $this->env->getExtension("native_profiler");
        $__internal_a880d76ce81cc4a9858ed11584f08e1be0c4c3c00662f72a713dcf7bf7fcf1a0->enter($__internal_a880d76ce81cc4a9858ed11584f08e1be0c4c3c00662f72a713dcf7bf7fcf1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a880d76ce81cc4a9858ed11584f08e1be0c4c3c00662f72a713dcf7bf7fcf1a0->leave($__internal_a880d76ce81cc4a9858ed11584f08e1be0c4c3c00662f72a713dcf7bf7fcf1a0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
";
    }
}
