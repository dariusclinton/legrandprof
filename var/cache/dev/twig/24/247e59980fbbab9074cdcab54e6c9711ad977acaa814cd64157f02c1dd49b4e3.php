<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_c494ff52b964fcbd35e9af7b0c5f8ea3a79e5ab554c10f913f10a311d50c52a6 extends Twig_Template
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
        $__internal_4c3db3e6eb25f97e7c49737e0c8920780bde4e57b74f6fd82d4184e09440691a = $this->env->getExtension("native_profiler");
        $__internal_4c3db3e6eb25f97e7c49737e0c8920780bde4e57b74f6fd82d4184e09440691a->enter($__internal_4c3db3e6eb25f97e7c49737e0c8920780bde4e57b74f6fd82d4184e09440691a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c3db3e6eb25f97e7c49737e0c8920780bde4e57b74f6fd82d4184e09440691a->leave($__internal_4c3db3e6eb25f97e7c49737e0c8920780bde4e57b74f6fd82d4184e09440691a_prof);

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