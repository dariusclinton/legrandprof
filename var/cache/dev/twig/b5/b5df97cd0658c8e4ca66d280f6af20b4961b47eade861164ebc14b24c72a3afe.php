<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_35900011b63fc41f251da04bf6defe92731853108fcef19436602fc13704aa03 extends Twig_Template
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
        $__internal_3941897e846dd9455ae51aa47e45255de559a7c0916dc81f0d3c255b64d20697 = $this->env->getExtension("native_profiler");
        $__internal_3941897e846dd9455ae51aa47e45255de559a7c0916dc81f0d3c255b64d20697->enter($__internal_3941897e846dd9455ae51aa47e45255de559a7c0916dc81f0d3c255b64d20697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3941897e846dd9455ae51aa47e45255de559a7c0916dc81f0d3c255b64d20697->leave($__internal_3941897e846dd9455ae51aa47e45255de559a7c0916dc81f0d3c255b64d20697_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3c7b420f09a23c03d8277b7b51a839876c9a1ce0188be2c4c9ea6a08b1bdb80 = $this->env->getExtension("native_profiler");
        $__internal_b3c7b420f09a23c03d8277b7b51a839876c9a1ce0188be2c4c9ea6a08b1bdb80->enter($__internal_b3c7b420f09a23c03d8277b7b51a839876c9a1ce0188be2c4c9ea6a08b1bdb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b3c7b420f09a23c03d8277b7b51a839876c9a1ce0188be2c4c9ea6a08b1bdb80->leave($__internal_b3c7b420f09a23c03d8277b7b51a839876c9a1ce0188be2c4c9ea6a08b1bdb80_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_1ae1b5fa8c04d7595f4c4e12f9727aafd357c5aaa9fe4a8ad07d773944bff3d3 = $this->env->getExtension("native_profiler");
        $__internal_1ae1b5fa8c04d7595f4c4e12f9727aafd357c5aaa9fe4a8ad07d773944bff3d3->enter($__internal_1ae1b5fa8c04d7595f4c4e12f9727aafd357c5aaa9fe4a8ad07d773944bff3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1ae1b5fa8c04d7595f4c4e12f9727aafd357c5aaa9fe4a8ad07d773944bff3d3->leave($__internal_1ae1b5fa8c04d7595f4c4e12f9727aafd357c5aaa9fe4a8ad07d773944bff3d3_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_32456123b1902657b0d1cb6eb754ed79ff0dec7d05dee0f4454c46316222eb60 = $this->env->getExtension("native_profiler");
        $__internal_32456123b1902657b0d1cb6eb754ed79ff0dec7d05dee0f4454c46316222eb60->enter($__internal_32456123b1902657b0d1cb6eb754ed79ff0dec7d05dee0f4454c46316222eb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_32456123b1902657b0d1cb6eb754ed79ff0dec7d05dee0f4454c46316222eb60->leave($__internal_32456123b1902657b0d1cb6eb754ed79ff0dec7d05dee0f4454c46316222eb60_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_3de044518ea4b9ef795e812a9799b44de8783eef2def856f599034a0c3726a09 = $this->env->getExtension("native_profiler");
        $__internal_3de044518ea4b9ef795e812a9799b44de8783eef2def856f599034a0c3726a09->enter($__internal_3de044518ea4b9ef795e812a9799b44de8783eef2def856f599034a0c3726a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_3de044518ea4b9ef795e812a9799b44de8783eef2def856f599034a0c3726a09->leave($__internal_3de044518ea4b9ef795e812a9799b44de8783eef2def856f599034a0c3726a09_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_26824ec5eac23b25cc5a49196249a16b24193de3d0da237d2c60e056c4132977 = $this->env->getExtension("native_profiler");
        $__internal_26824ec5eac23b25cc5a49196249a16b24193de3d0da237d2c60e056c4132977->enter($__internal_26824ec5eac23b25cc5a49196249a16b24193de3d0da237d2c60e056c4132977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_26824ec5eac23b25cc5a49196249a16b24193de3d0da237d2c60e056c4132977->leave($__internal_26824ec5eac23b25cc5a49196249a16b24193de3d0da237d2c60e056c4132977_prof);

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
