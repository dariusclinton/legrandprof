<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_fb28a3b015569241baeb6a53a2a4fa53daabe5ccb8093856ab696c4baf97df76 extends Twig_Template
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
        $__internal_0f4f7cd3539050588db9b4ba0ad7fb022f5b8413aa96bf022f8dbc5fa048983a = $this->env->getExtension("native_profiler");
        $__internal_0f4f7cd3539050588db9b4ba0ad7fb022f5b8413aa96bf022f8dbc5fa048983a->enter($__internal_0f4f7cd3539050588db9b4ba0ad7fb022f5b8413aa96bf022f8dbc5fa048983a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f4f7cd3539050588db9b4ba0ad7fb022f5b8413aa96bf022f8dbc5fa048983a->leave($__internal_0f4f7cd3539050588db9b4ba0ad7fb022f5b8413aa96bf022f8dbc5fa048983a_prof);

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