<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_c772c9bbe2fd09ded2fdd8eaf4e54492df376cea0b8cd1dc5235d97727122a53 extends Twig_Template
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
        $__internal_bfaa9ceb2ad1cdcf61f9285c126384551dafb05311b9d587dc8598265a5a9934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfaa9ceb2ad1cdcf61f9285c126384551dafb05311b9d587dc8598265a5a9934->enter($__internal_bfaa9ceb2ad1cdcf61f9285c126384551dafb05311b9d587dc8598265a5a9934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfaa9ceb2ad1cdcf61f9285c126384551dafb05311b9d587dc8598265a5a9934->leave($__internal_bfaa9ceb2ad1cdcf61f9285c126384551dafb05311b9d587dc8598265a5a9934_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_71c69b0aed545e7b406d6480860207140002efcf61c291c303ace4bac44506c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c69b0aed545e7b406d6480860207140002efcf61c291c303ace4bac44506c0->enter($__internal_71c69b0aed545e7b406d6480860207140002efcf61c291c303ace4bac44506c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_71c69b0aed545e7b406d6480860207140002efcf61c291c303ace4bac44506c0->leave($__internal_71c69b0aed545e7b406d6480860207140002efcf61c291c303ace4bac44506c0_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_cd3c38ec7babe9380bf2c3da44ff7711efefb38674a2577a0a322637c26211ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3c38ec7babe9380bf2c3da44ff7711efefb38674a2577a0a322637c26211ee->enter($__internal_cd3c38ec7babe9380bf2c3da44ff7711efefb38674a2577a0a322637c26211ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_cd3c38ec7babe9380bf2c3da44ff7711efefb38674a2577a0a322637c26211ee->leave($__internal_cd3c38ec7babe9380bf2c3da44ff7711efefb38674a2577a0a322637c26211ee_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_3da344587b0b159d98094b08ae2e446440f5c3ec0efe724363bd6407553d2e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da344587b0b159d98094b08ae2e446440f5c3ec0efe724363bd6407553d2e2b->enter($__internal_3da344587b0b159d98094b08ae2e446440f5c3ec0efe724363bd6407553d2e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_3da344587b0b159d98094b08ae2e446440f5c3ec0efe724363bd6407553d2e2b->leave($__internal_3da344587b0b159d98094b08ae2e446440f5c3ec0efe724363bd6407553d2e2b_prof);

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
