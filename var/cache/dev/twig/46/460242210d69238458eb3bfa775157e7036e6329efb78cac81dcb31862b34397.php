<?php

/* SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_49749f9605a1f0a1596888abf50a0768ab664d42a2d96ca89d3b3a923ec8da23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f5c2562a908ceecef4966282cf541d2ca93275374fd1a0cd71c6c63bd618f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5c2562a908ceecef4966282cf541d2ca93275374fd1a0cd71c6c63bd618f38->enter($__internal_8f5c2562a908ceecef4966282cf541d2ca93275374fd1a0cd71c6c63bd618f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f5c2562a908ceecef4966282cf541d2ca93275374fd1a0cd71c6c63bd618f38->leave($__internal_8f5c2562a908ceecef4966282cf541d2ca93275374fd1a0cd71c6c63bd618f38_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig";
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
";
    }
}
