<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_4fd56c24e64a49dba94b46b6d84f84024e0048b6e701ee087ebfaaefc5b23fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_237422619a410ff092be6fc115e505dd87a096ee904eddef51a86d5f980d4982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237422619a410ff092be6fc115e505dd87a096ee904eddef51a86d5f980d4982->enter($__internal_237422619a410ff092be6fc115e505dd87a096ee904eddef51a86d5f980d4982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_237422619a410ff092be6fc115e505dd87a096ee904eddef51a86d5f980d4982->leave($__internal_237422619a410ff092be6fc115e505dd87a096ee904eddef51a86d5f980d4982_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_d82c83d04b72333c4e6dccc13735d518b86f6732c951c661b38ac2703ee93016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82c83d04b72333c4e6dccc13735d518b86f6732c951c661b38ac2703ee93016->enter($__internal_d82c83d04b72333c4e6dccc13735d518b86f6732c951c661b38ac2703ee93016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_d82c83d04b72333c4e6dccc13735d518b86f6732c951c661b38ac2703ee93016->leave($__internal_d82c83d04b72333c4e6dccc13735d518b86f6732c951c661b38ac2703ee93016_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_663276f6f7a4fddacfb676b09495cfbf8e9442f115240d81bcede38d4fd67bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663276f6f7a4fddacfb676b09495cfbf8e9442f115240d81bcede38d4fd67bb9->enter($__internal_663276f6f7a4fddacfb676b09495cfbf8e9442f115240d81bcede38d4fd67bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_663276f6f7a4fddacfb676b09495cfbf8e9442f115240d81bcede38d4fd67bb9->leave($__internal_663276f6f7a4fddacfb676b09495cfbf8e9442f115240d81bcede38d4fd67bb9_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_48b8805a108653d04f1e13cfea87f34bf1e7d2ee81319abfac8970cad9113fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b8805a108653d04f1e13cfea87f34bf1e7d2ee81319abfac8970cad9113fb5->enter($__internal_48b8805a108653d04f1e13cfea87f34bf1e7d2ee81319abfac8970cad9113fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_48b8805a108653d04f1e13cfea87f34bf1e7d2ee81319abfac8970cad9113fb5->leave($__internal_48b8805a108653d04f1e13cfea87f34bf1e7d2ee81319abfac8970cad9113fb5_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e9e6587ff3c0ca5b06a391bec1ff5126854511a423121028db2283c8de1795d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e6587ff3c0ca5b06a391bec1ff5126854511a423121028db2283c8de1795d6->enter($__internal_e9e6587ff3c0ca5b06a391bec1ff5126854511a423121028db2283c8de1795d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_e9e6587ff3c0ca5b06a391bec1ff5126854511a423121028db2283c8de1795d6->leave($__internal_e9e6587ff3c0ca5b06a391bec1ff5126854511a423121028db2283c8de1795d6_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_504e83e93fc7a53b76a1965847649ee1af5425d27a3b0eb7da147c2bfaa71f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504e83e93fc7a53b76a1965847649ee1af5425d27a3b0eb7da147c2bfaa71f60->enter($__internal_504e83e93fc7a53b76a1965847649ee1af5425d27a3b0eb7da147c2bfaa71f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_504e83e93fc7a53b76a1965847649ee1af5425d27a3b0eb7da147c2bfaa71f60->leave($__internal_504e83e93fc7a53b76a1965847649ee1af5425d27a3b0eb7da147c2bfaa71f60_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  126 => 35,  114 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{% block actions %}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{% endblock %}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}
{% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
";
    }
}
