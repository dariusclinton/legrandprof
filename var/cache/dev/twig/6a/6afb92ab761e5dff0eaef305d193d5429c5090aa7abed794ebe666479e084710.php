<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_c42d2ab8babdfe7b7e472257a2e69280013e35136e1693955ba1cf1cb9fd0351 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085e274ff4bfcc5e7dee2e5247b440901ae167362153942977df5a12595964b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085e274ff4bfcc5e7dee2e5247b440901ae167362153942977df5a12595964b4->enter($__internal_085e274ff4bfcc5e7dee2e5247b440901ae167362153942977df5a12595964b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085e274ff4bfcc5e7dee2e5247b440901ae167362153942977df5a12595964b4->leave($__internal_085e274ff4bfcc5e7dee2e5247b440901ae167362153942977df5a12595964b4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fb10c7d7e8bf1b135d5f651e3aee68549ebac3f2aec9bd81eb76398826a3a9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb10c7d7e8bf1b135d5f651e3aee68549ebac3f2aec9bd81eb76398826a3a9a7->enter($__internal_fb10c7d7e8bf1b135d5f651e3aee68549ebac3f2aec9bd81eb76398826a3a9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_fb10c7d7e8bf1b135d5f651e3aee68549ebac3f2aec9bd81eb76398826a3a9a7->leave($__internal_fb10c7d7e8bf1b135d5f651e3aee68549ebac3f2aec9bd81eb76398826a3a9a7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
";
    }
}
