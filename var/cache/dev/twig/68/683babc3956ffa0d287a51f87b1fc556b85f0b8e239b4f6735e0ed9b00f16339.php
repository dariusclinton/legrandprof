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
        $__internal_71366aabe6fcfcc22015d8e242b6c7c75c0a513a83c3c375b5954513715ae651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71366aabe6fcfcc22015d8e242b6c7c75c0a513a83c3c375b5954513715ae651->enter($__internal_71366aabe6fcfcc22015d8e242b6c7c75c0a513a83c3c375b5954513715ae651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle:ProfAdmin:list_image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71366aabe6fcfcc22015d8e242b6c7c75c0a513a83c3c375b5954513715ae651->leave($__internal_71366aabe6fcfcc22015d8e242b6c7c75c0a513a83c3c375b5954513715ae651_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_391a11e43df8d6521f0940dd583c8fd73320dd4b137f597151a7a2384f1802ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391a11e43df8d6521f0940dd583c8fd73320dd4b137f597151a7a2384f1802ab->enter($__internal_391a11e43df8d6521f0940dd583c8fd73320dd4b137f597151a7a2384f1802ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_391a11e43df8d6521f0940dd583c8fd73320dd4b137f597151a7a2384f1802ab->leave($__internal_391a11e43df8d6521f0940dd583c8fd73320dd4b137f597151a7a2384f1802ab_prof);

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
