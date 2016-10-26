<?php

/* LGPAdminBundle:ProfAdmin:list_image.html.twig */
class __TwigTemplate_38dcd204856cbc0e3296dcd9e4406e8f561ebc26984d924673442e2db525503f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "LGPAdminBundle:ProfAdmin:list_image.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32a7ed833eecb0c24b38d71d6b7991f9a5affc688521be4b00678dc9642039cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a7ed833eecb0c24b38d71d6b7991f9a5affc688521be4b00678dc9642039cf->enter($__internal_32a7ed833eecb0c24b38d71d6b7991f9a5affc688521be4b00678dc9642039cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle:ProfAdmin:list_image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32a7ed833eecb0c24b38d71d6b7991f9a5affc688521be4b00678dc9642039cf->leave($__internal_32a7ed833eecb0c24b38d71d6b7991f9a5affc688521be4b00678dc9642039cf_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_e0073d7aadc084c32894fa595ff62d1b5e891a7b00064169cf423871d7a7d927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0073d7aadc084c32894fa595ff62d1b5e891a7b00064169cf423871d7a7d927->enter($__internal_e0073d7aadc084c32894fa595ff62d1b5e891a7b00064169cf423871d7a7d927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "image", array()))) {
            // line 5
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "image", array()), "imageName", array()), "html", null, true);
            echo "\"
             class=\"img-circle img-responsive\">
    ";
        }
        
        $__internal_e0073d7aadc084c32894fa595ff62d1b5e891a7b00064169cf423871d7a7d927->leave($__internal_e0073d7aadc084c32894fa595ff62d1b5e891a7b00064169cf423871d7a7d927_prof);

    }

    public function getTemplateName()
    {
        return "LGPAdminBundle:ProfAdmin:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}

{% block field %}
    {% if object.image is not null %}
        <img src=\"{{ asset(object.image.webPath) }}\" alt=\"{{ object.image.imageName }}\"
             class=\"img-circle img-responsive\">
    {% endif %}
{% endblock %}
";
    }
}
