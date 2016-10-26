<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_06aa842736d8155f8855fc3a1edcc64cc61734118ac7a81b06a85529b5ce0a7d extends Twig_Template
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
        $__internal_d0697c988ca3d84a4e4e4a374c85dd961b733676048746c1ae9c010de4845f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0697c988ca3d84a4e4e4a374c85dd961b733676048746c1ae9c010de4845f0b->enter($__internal_d0697c988ca3d84a4e4e4a374c85dd961b733676048746c1ae9c010de4845f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0697c988ca3d84a4e4e4a374c85dd961b733676048746c1ae9c010de4845f0b->leave($__internal_d0697c988ca3d84a4e4e4a374c85dd961b733676048746c1ae9c010de4845f0b_prof);

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
