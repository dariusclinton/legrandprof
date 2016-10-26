<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_1c7ced3a42052fa275849b8d3605614c52819d9cd23b06a9bd1679935a19c87f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4751cf1d18240099aac870ff82bf80d310e22624baaa043eb956e7c9f1288e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4751cf1d18240099aac870ff82bf80d310e22624baaa043eb956e7c9f1288e81->enter($__internal_4751cf1d18240099aac870ff82bf80d310e22624baaa043eb956e7c9f1288e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4751cf1d18240099aac870ff82bf80d310e22624baaa043eb956e7c9f1288e81->leave($__internal_4751cf1d18240099aac870ff82bf80d310e22624baaa043eb956e7c9f1288e81_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
";
    }
}
