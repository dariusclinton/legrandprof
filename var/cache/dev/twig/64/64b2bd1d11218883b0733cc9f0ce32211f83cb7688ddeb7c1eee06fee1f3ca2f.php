<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_163b94fb60630fa898dadbf386aab2bca00255e34785a709000f968b3335a675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10a9ad6e270879c2bf9e781f9f69136147bca0f306f21caeac9b18beb589ff3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a9ad6e270879c2bf9e781f9f69136147bca0f306f21caeac9b18beb589ff3e->enter($__internal_10a9ad6e270879c2bf9e781f9f69136147bca0f306f21caeac9b18beb589ff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10a9ad6e270879c2bf9e781f9f69136147bca0f306f21caeac9b18beb589ff3e->leave($__internal_10a9ad6e270879c2bf9e781f9f69136147bca0f306f21caeac9b18beb589ff3e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9e71e416f35fc91096e75502df795259abdbd0646890bb7aab0b4c16c52091df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e71e416f35fc91096e75502df795259abdbd0646890bb7aab0b4c16c52091df->enter($__internal_9e71e416f35fc91096e75502df795259abdbd0646890bb7aab0b4c16c52091df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9e71e416f35fc91096e75502df795259abdbd0646890bb7aab0b4c16c52091df->leave($__internal_9e71e416f35fc91096e75502df795259abdbd0646890bb7aab0b4c16c52091df_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}
