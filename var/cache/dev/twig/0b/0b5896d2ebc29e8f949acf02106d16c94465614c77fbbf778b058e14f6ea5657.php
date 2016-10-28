<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_0d0a8a5c5cbc23a0a548c4aede3fd17dd594f7187176da446c31a41dc8bc5594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a4fdeb89c2310e2b6b9b8802fba8b0cd1c5b27534eeb0e9f2f1dbb6e83ad1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4fdeb89c2310e2b6b9b8802fba8b0cd1c5b27534eeb0e9f2f1dbb6e83ad1cb->enter($__internal_8a4fdeb89c2310e2b6b9b8802fba8b0cd1c5b27534eeb0e9f2f1dbb6e83ad1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a4fdeb89c2310e2b6b9b8802fba8b0cd1c5b27534eeb0e9f2f1dbb6e83ad1cb->leave($__internal_8a4fdeb89c2310e2b6b9b8802fba8b0cd1c5b27534eeb0e9f2f1dbb6e83ad1cb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
";
    }
}
