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
        $__internal_3773daf4e9a492220f86384b08ac77e4f128445b2f4c33aaf55657ea1b9a7f86 = $this->env->getExtension("native_profiler");
        $__internal_3773daf4e9a492220f86384b08ac77e4f128445b2f4c33aaf55657ea1b9a7f86->enter($__internal_3773daf4e9a492220f86384b08ac77e4f128445b2f4c33aaf55657ea1b9a7f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3773daf4e9a492220f86384b08ac77e4f128445b2f4c33aaf55657ea1b9a7f86->leave($__internal_3773daf4e9a492220f86384b08ac77e4f128445b2f4c33aaf55657ea1b9a7f86_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_add9daec1bbf38edbbe51d9e9dafce15715310d29e5623c6d88405dc270b87ed = $this->env->getExtension("native_profiler");
        $__internal_add9daec1bbf38edbbe51d9e9dafce15715310d29e5623c6d88405dc270b87ed->enter($__internal_add9daec1bbf38edbbe51d9e9dafce15715310d29e5623c6d88405dc270b87ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_add9daec1bbf38edbbe51d9e9dafce15715310d29e5623c6d88405dc270b87ed->leave($__internal_add9daec1bbf38edbbe51d9e9dafce15715310d29e5623c6d88405dc270b87ed_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_c7a6c636559b9a6d65b99ef719a8caea09769331e0ef246a4040fd04e5b94fab = $this->env->getExtension("native_profiler");
        $__internal_c7a6c636559b9a6d65b99ef719a8caea09769331e0ef246a4040fd04e5b94fab->enter($__internal_c7a6c636559b9a6d65b99ef719a8caea09769331e0ef246a4040fd04e5b94fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_c7a6c636559b9a6d65b99ef719a8caea09769331e0ef246a4040fd04e5b94fab->leave($__internal_c7a6c636559b9a6d65b99ef719a8caea09769331e0ef246a4040fd04e5b94fab_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_955e492747e9b23747df65e9510e38d7dc6da787c68fa2773061605866f00424 = $this->env->getExtension("native_profiler");
        $__internal_955e492747e9b23747df65e9510e38d7dc6da787c68fa2773061605866f00424->enter($__internal_955e492747e9b23747df65e9510e38d7dc6da787c68fa2773061605866f00424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_955e492747e9b23747df65e9510e38d7dc6da787c68fa2773061605866f00424->leave($__internal_955e492747e9b23747df65e9510e38d7dc6da787c68fa2773061605866f00424_prof);

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
