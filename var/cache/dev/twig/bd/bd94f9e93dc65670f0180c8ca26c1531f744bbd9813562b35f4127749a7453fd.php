<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_4521d676946951738cb56724d2c52591d8716f7f5a7fa46afcb86c386a78aa7e extends Twig_Template
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
        $__internal_59418be6ac88a288bd17f7afe4d0ae8cf6012769140c04f9c8d2534801cb660b = $this->env->getExtension("native_profiler");
        $__internal_59418be6ac88a288bd17f7afe4d0ae8cf6012769140c04f9c8d2534801cb660b->enter($__internal_59418be6ac88a288bd17f7afe4d0ae8cf6012769140c04f9c8d2534801cb660b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59418be6ac88a288bd17f7afe4d0ae8cf6012769140c04f9c8d2534801cb660b->leave($__internal_59418be6ac88a288bd17f7afe4d0ae8cf6012769140c04f9c8d2534801cb660b_prof);

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
