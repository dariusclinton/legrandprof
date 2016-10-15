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
        $__internal_9c1ee68796ec7d61233fd9776cba6b1f5e75ac57bfba609dbec3910264a7abb6 = $this->env->getExtension("native_profiler");
        $__internal_9c1ee68796ec7d61233fd9776cba6b1f5e75ac57bfba609dbec3910264a7abb6->enter($__internal_9c1ee68796ec7d61233fd9776cba6b1f5e75ac57bfba609dbec3910264a7abb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c1ee68796ec7d61233fd9776cba6b1f5e75ac57bfba609dbec3910264a7abb6->leave($__internal_9c1ee68796ec7d61233fd9776cba6b1f5e75ac57bfba609dbec3910264a7abb6_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_69f58625e493568965e92286ac9384719e40f649b38cabb29d664bcb1b0d4f4d = $this->env->getExtension("native_profiler");
        $__internal_69f58625e493568965e92286ac9384719e40f649b38cabb29d664bcb1b0d4f4d->enter($__internal_69f58625e493568965e92286ac9384719e40f649b38cabb29d664bcb1b0d4f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_69f58625e493568965e92286ac9384719e40f649b38cabb29d664bcb1b0d4f4d->leave($__internal_69f58625e493568965e92286ac9384719e40f649b38cabb29d664bcb1b0d4f4d_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_085c905152caeeb73b2f5609948ade59053fd4a64d60d2bc0a5c89bc522e00fe = $this->env->getExtension("native_profiler");
        $__internal_085c905152caeeb73b2f5609948ade59053fd4a64d60d2bc0a5c89bc522e00fe->enter($__internal_085c905152caeeb73b2f5609948ade59053fd4a64d60d2bc0a5c89bc522e00fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_085c905152caeeb73b2f5609948ade59053fd4a64d60d2bc0a5c89bc522e00fe->leave($__internal_085c905152caeeb73b2f5609948ade59053fd4a64d60d2bc0a5c89bc522e00fe_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_66266d05accdbf6a07d99fea6d9ae5f6207141c10bb27d8668d34cb3bcd1686f = $this->env->getExtension("native_profiler");
        $__internal_66266d05accdbf6a07d99fea6d9ae5f6207141c10bb27d8668d34cb3bcd1686f->enter($__internal_66266d05accdbf6a07d99fea6d9ae5f6207141c10bb27d8668d34cb3bcd1686f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_66266d05accdbf6a07d99fea6d9ae5f6207141c10bb27d8668d34cb3bcd1686f->leave($__internal_66266d05accdbf6a07d99fea6d9ae5f6207141c10bb27d8668d34cb3bcd1686f_prof);

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
