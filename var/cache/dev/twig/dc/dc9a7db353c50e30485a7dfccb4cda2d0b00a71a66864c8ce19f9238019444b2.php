<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_376cedbffd1475f18b038bf1bddbc61f36bfa1f96c35dfcc6dc930b0d5aebe11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3a537c7a1aad9be1a9818c1380176b3cc6a51c35db1adaa976aa4dcb3cfffa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a537c7a1aad9be1a9818c1380176b3cc6a51c35db1adaa976aa4dcb3cfffa6->enter($__internal_e3a537c7a1aad9be1a9818c1380176b3cc6a51c35db1adaa976aa4dcb3cfffa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3a537c7a1aad9be1a9818c1380176b3cc6a51c35db1adaa976aa4dcb3cfffa6->leave($__internal_e3a537c7a1aad9be1a9818c1380176b3cc6a51c35db1adaa976aa4dcb3cfffa6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
";
    }
}
