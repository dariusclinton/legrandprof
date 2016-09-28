<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_252f0aa29ac9450faf926649ec2f89fadd817f73218b3a8cc1f88360463af22d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7312fd00771853f12472ac4a09977efa998702870d2a8bd9adab0e49e7b412c4 = $this->env->getExtension("native_profiler");
        $__internal_7312fd00771853f12472ac4a09977efa998702870d2a8bd9adab0e49e7b412c4->enter($__internal_7312fd00771853f12472ac4a09977efa998702870d2a8bd9adab0e49e7b412c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7312fd00771853f12472ac4a09977efa998702870d2a8bd9adab0e49e7b412c4->leave($__internal_7312fd00771853f12472ac4a09977efa998702870d2a8bd9adab0e49e7b412c4_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6036ec72d887f2683a3dabe5a6b9ea1841344d845ecbd8c962700236cb48b600 = $this->env->getExtension("native_profiler");
        $__internal_6036ec72d887f2683a3dabe5a6b9ea1841344d845ecbd8c962700236cb48b600->enter($__internal_6036ec72d887f2683a3dabe5a6b9ea1841344d845ecbd8c962700236cb48b600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_6036ec72d887f2683a3dabe5a6b9ea1841344d845ecbd8c962700236cb48b600->leave($__internal_6036ec72d887f2683a3dabe5a6b9ea1841344d845ecbd8c962700236cb48b600_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_a873805aed114a166f690c6b1412c09c3c07157020a3ef654f75114eeed47ea8 = $this->env->getExtension("native_profiler");
        $__internal_a873805aed114a166f690c6b1412c09c3c07157020a3ef654f75114eeed47ea8->enter($__internal_a873805aed114a166f690c6b1412c09c3c07157020a3ef654f75114eeed47ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_a873805aed114a166f690c6b1412c09c3c07157020a3ef654f75114eeed47ea8->leave($__internal_a873805aed114a166f690c6b1412c09c3c07157020a3ef654f75114eeed47ea8_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc86715ff077bc7bc3cce8d0dab2038764c7ef8f2a00017ffa2fd34e5771e446 = $this->env->getExtension("native_profiler");
        $__internal_cc86715ff077bc7bc3cce8d0dab2038764c7ef8f2a00017ffa2fd34e5771e446->enter($__internal_cc86715ff077bc7bc3cce8d0dab2038764c7ef8f2a00017ffa2fd34e5771e446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_cc86715ff077bc7bc3cce8d0dab2038764c7ef8f2a00017ffa2fd34e5771e446->leave($__internal_cc86715ff077bc7bc3cce8d0dab2038764c7ef8f2a00017ffa2fd34e5771e446_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{% block actions %}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{% endblock %}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
";
    }
}
