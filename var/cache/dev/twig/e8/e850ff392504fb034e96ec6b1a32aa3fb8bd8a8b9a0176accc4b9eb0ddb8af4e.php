<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_1e77f20e59205b26e809a0b2164b2daea4f3bdffe239bebc9aaabf370b45bdd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f390ddddb0296c3e779dfb19d45bd046f0329217910597955ff90641b737dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f390ddddb0296c3e779dfb19d45bd046f0329217910597955ff90641b737dca->enter($__internal_5f390ddddb0296c3e779dfb19d45bd046f0329217910597955ff90641b737dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f390ddddb0296c3e779dfb19d45bd046f0329217910597955ff90641b737dca->leave($__internal_5f390ddddb0296c3e779dfb19d45bd046f0329217910597955ff90641b737dca_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_99ac480e291c589ec20663cf5dbf42da3729e9a4098353370df766572cac3915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ac480e291c589ec20663cf5dbf42da3729e9a4098353370df766572cac3915->enter($__internal_99ac480e291c589ec20663cf5dbf42da3729e9a4098353370df766572cac3915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_99ac480e291c589ec20663cf5dbf42da3729e9a4098353370df766572cac3915->leave($__internal_99ac480e291c589ec20663cf5dbf42da3729e9a4098353370df766572cac3915_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}
