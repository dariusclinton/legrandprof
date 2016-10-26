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
        $__internal_b785d857bdec2d05abdc584e856544f98c9e1925cd3f55f039489b03d249b906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b785d857bdec2d05abdc584e856544f98c9e1925cd3f55f039489b03d249b906->enter($__internal_b785d857bdec2d05abdc584e856544f98c9e1925cd3f55f039489b03d249b906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b785d857bdec2d05abdc584e856544f98c9e1925cd3f55f039489b03d249b906->leave($__internal_b785d857bdec2d05abdc584e856544f98c9e1925cd3f55f039489b03d249b906_prof);

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
