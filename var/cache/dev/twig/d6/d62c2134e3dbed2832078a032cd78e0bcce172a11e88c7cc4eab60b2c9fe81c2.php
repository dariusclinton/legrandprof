<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_d9931618c857776e01fc1acdc84ae5de17cb26361fc33c1ee1f19ccf9999620e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61866d8477516f8014eca15505bb5d549e2373a0162195a257fe4fc3a881e095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61866d8477516f8014eca15505bb5d549e2373a0162195a257fe4fc3a881e095->enter($__internal_61866d8477516f8014eca15505bb5d549e2373a0162195a257fe4fc3a881e095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61866d8477516f8014eca15505bb5d549e2373a0162195a257fe4fc3a881e095->leave($__internal_61866d8477516f8014eca15505bb5d549e2373a0162195a257fe4fc3a881e095_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
";
    }
}
