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
        $__internal_f65487a289ec99311873e406000f834bc4b260271192765024a92437e4706049 = $this->env->getExtension("native_profiler");
        $__internal_f65487a289ec99311873e406000f834bc4b260271192765024a92437e4706049->enter($__internal_f65487a289ec99311873e406000f834bc4b260271192765024a92437e4706049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f65487a289ec99311873e406000f834bc4b260271192765024a92437e4706049->leave($__internal_f65487a289ec99311873e406000f834bc4b260271192765024a92437e4706049_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_50b48af56d56f471a5556abea93972aa6d0e5676444c73b19a62a956f10e169b = $this->env->getExtension("native_profiler");
        $__internal_50b48af56d56f471a5556abea93972aa6d0e5676444c73b19a62a956f10e169b->enter($__internal_50b48af56d56f471a5556abea93972aa6d0e5676444c73b19a62a956f10e169b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_50b48af56d56f471a5556abea93972aa6d0e5676444c73b19a62a956f10e169b->leave($__internal_50b48af56d56f471a5556abea93972aa6d0e5676444c73b19a62a956f10e169b_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_0ff42271555b05e020c5896e0d4af5800d0d2aa0f78fb60dfabbc43aa919717f = $this->env->getExtension("native_profiler");
        $__internal_0ff42271555b05e020c5896e0d4af5800d0d2aa0f78fb60dfabbc43aa919717f->enter($__internal_0ff42271555b05e020c5896e0d4af5800d0d2aa0f78fb60dfabbc43aa919717f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_0ff42271555b05e020c5896e0d4af5800d0d2aa0f78fb60dfabbc43aa919717f->leave($__internal_0ff42271555b05e020c5896e0d4af5800d0d2aa0f78fb60dfabbc43aa919717f_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_9c20828e3483dd4d678ad3f73fd6ead08f1d8059987cabd0d22e24bfbad5dbf1 = $this->env->getExtension("native_profiler");
        $__internal_9c20828e3483dd4d678ad3f73fd6ead08f1d8059987cabd0d22e24bfbad5dbf1->enter($__internal_9c20828e3483dd4d678ad3f73fd6ead08f1d8059987cabd0d22e24bfbad5dbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_9c20828e3483dd4d678ad3f73fd6ead08f1d8059987cabd0d22e24bfbad5dbf1->leave($__internal_9c20828e3483dd4d678ad3f73fd6ead08f1d8059987cabd0d22e24bfbad5dbf1_prof);

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
