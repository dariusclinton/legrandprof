<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_bce1bb802bb656bbd80e7c9e316e6b3d65f008edbd75e80524ad97eb15f07994 extends Twig_Template
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
        $__internal_0004982f0597a57a8fde9c9af94abec9c52e0af903bc8a934fb0fed9ab37df2f = $this->env->getExtension("native_profiler");
        $__internal_0004982f0597a57a8fde9c9af94abec9c52e0af903bc8a934fb0fed9ab37df2f->enter($__internal_0004982f0597a57a8fde9c9af94abec9c52e0af903bc8a934fb0fed9ab37df2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0004982f0597a57a8fde9c9af94abec9c52e0af903bc8a934fb0fed9ab37df2f->leave($__internal_0004982f0597a57a8fde9c9af94abec9c52e0af903bc8a934fb0fed9ab37df2f_prof);

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
