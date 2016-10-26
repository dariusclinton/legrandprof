<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_ea9233481bcc689b5829e47e0a5842291b015311709ce399f86c807049ea1046 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32c240a09602fba72303a5e27989bfa516673abdab3630821d4a25a1424fd863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c240a09602fba72303a5e27989bfa516673abdab3630821d4a25a1424fd863->enter($__internal_32c240a09602fba72303a5e27989bfa516673abdab3630821d4a25a1424fd863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32c240a09602fba72303a5e27989bfa516673abdab3630821d4a25a1424fd863->leave($__internal_32c240a09602fba72303a5e27989bfa516673abdab3630821d4a25a1424fd863_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b24be1e3962a1c6a03f9f5d5523aae8720f407db790b1206af80ba816091aecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24be1e3962a1c6a03f9f5d5523aae8720f407db790b1206af80ba816091aecb->enter($__internal_b24be1e3962a1c6a03f9f5d5523aae8720f407db790b1206af80ba816091aecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b24be1e3962a1c6a03f9f5d5523aae8720f407db790b1206af80ba816091aecb->leave($__internal_b24be1e3962a1c6a03f9f5d5523aae8720f407db790b1206af80ba816091aecb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
