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
        $__internal_fffc36a35ca37c26398ce2bffe9dbb1e91e3a06e58eec96a8f355e0caaf47010 = $this->env->getExtension("native_profiler");
        $__internal_fffc36a35ca37c26398ce2bffe9dbb1e91e3a06e58eec96a8f355e0caaf47010->enter($__internal_fffc36a35ca37c26398ce2bffe9dbb1e91e3a06e58eec96a8f355e0caaf47010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fffc36a35ca37c26398ce2bffe9dbb1e91e3a06e58eec96a8f355e0caaf47010->leave($__internal_fffc36a35ca37c26398ce2bffe9dbb1e91e3a06e58eec96a8f355e0caaf47010_prof);

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
