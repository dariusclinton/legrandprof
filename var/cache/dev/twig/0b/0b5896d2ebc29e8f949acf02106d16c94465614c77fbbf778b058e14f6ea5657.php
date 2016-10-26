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
        $__internal_c98a04455eb88675f5a9c21c8129107a392c2afa0ba63d4bb43509ce91282eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98a04455eb88675f5a9c21c8129107a392c2afa0ba63d4bb43509ce91282eeb->enter($__internal_c98a04455eb88675f5a9c21c8129107a392c2afa0ba63d4bb43509ce91282eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c98a04455eb88675f5a9c21c8129107a392c2afa0ba63d4bb43509ce91282eeb->leave($__internal_c98a04455eb88675f5a9c21c8129107a392c2afa0ba63d4bb43509ce91282eeb_prof);

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
