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
        $__internal_01adde7e23e3f174cf6e2703d5a431abe12ba09add9abf326a0bbb159276d8d8 = $this->env->getExtension("native_profiler");
        $__internal_01adde7e23e3f174cf6e2703d5a431abe12ba09add9abf326a0bbb159276d8d8->enter($__internal_01adde7e23e3f174cf6e2703d5a431abe12ba09add9abf326a0bbb159276d8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01adde7e23e3f174cf6e2703d5a431abe12ba09add9abf326a0bbb159276d8d8->leave($__internal_01adde7e23e3f174cf6e2703d5a431abe12ba09add9abf326a0bbb159276d8d8_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7b18d0d596f559d875ef2c42dcbcdab53b22f99790f390ba4ef817706cfc44ed = $this->env->getExtension("native_profiler");
        $__internal_7b18d0d596f559d875ef2c42dcbcdab53b22f99790f390ba4ef817706cfc44ed->enter($__internal_7b18d0d596f559d875ef2c42dcbcdab53b22f99790f390ba4ef817706cfc44ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_7b18d0d596f559d875ef2c42dcbcdab53b22f99790f390ba4ef817706cfc44ed->leave($__internal_7b18d0d596f559d875ef2c42dcbcdab53b22f99790f390ba4ef817706cfc44ed_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_286c40f043c529604db1fb828b7885b15f36283d2126ac2c139f2c130c522eeb = $this->env->getExtension("native_profiler");
        $__internal_286c40f043c529604db1fb828b7885b15f36283d2126ac2c139f2c130c522eeb->enter($__internal_286c40f043c529604db1fb828b7885b15f36283d2126ac2c139f2c130c522eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_286c40f043c529604db1fb828b7885b15f36283d2126ac2c139f2c130c522eeb->leave($__internal_286c40f043c529604db1fb828b7885b15f36283d2126ac2c139f2c130c522eeb_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_d20a9c91d8a53fe8711674f7c0c4ccf4b302b8dc29b27ad9f20b78b4a76a328d = $this->env->getExtension("native_profiler");
        $__internal_d20a9c91d8a53fe8711674f7c0c4ccf4b302b8dc29b27ad9f20b78b4a76a328d->enter($__internal_d20a9c91d8a53fe8711674f7c0c4ccf4b302b8dc29b27ad9f20b78b4a76a328d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_d20a9c91d8a53fe8711674f7c0c4ccf4b302b8dc29b27ad9f20b78b4a76a328d->leave($__internal_d20a9c91d8a53fe8711674f7c0c4ccf4b302b8dc29b27ad9f20b78b4a76a328d_prof);

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
