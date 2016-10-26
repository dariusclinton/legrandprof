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
        $__internal_27720664ee265b74c2cde2a9d095b5f901e273c5cf62f2d3ad34f07874ec7b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27720664ee265b74c2cde2a9d095b5f901e273c5cf62f2d3ad34f07874ec7b8e->enter($__internal_27720664ee265b74c2cde2a9d095b5f901e273c5cf62f2d3ad34f07874ec7b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27720664ee265b74c2cde2a9d095b5f901e273c5cf62f2d3ad34f07874ec7b8e->leave($__internal_27720664ee265b74c2cde2a9d095b5f901e273c5cf62f2d3ad34f07874ec7b8e_prof);

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
