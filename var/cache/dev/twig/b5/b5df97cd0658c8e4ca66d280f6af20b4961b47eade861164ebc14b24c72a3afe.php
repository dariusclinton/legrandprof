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
        $__internal_95c10084b33208aba215ccb0ddf4c5766e2271ba841773e23a35515d473b1bab = $this->env->getExtension("native_profiler");
        $__internal_95c10084b33208aba215ccb0ddf4c5766e2271ba841773e23a35515d473b1bab->enter($__internal_95c10084b33208aba215ccb0ddf4c5766e2271ba841773e23a35515d473b1bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95c10084b33208aba215ccb0ddf4c5766e2271ba841773e23a35515d473b1bab->leave($__internal_95c10084b33208aba215ccb0ddf4c5766e2271ba841773e23a35515d473b1bab_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_d14e785a6bbd22aed193572ade4ce4da33e32a043d2b384e6b3eaaabbd1350de = $this->env->getExtension("native_profiler");
        $__internal_d14e785a6bbd22aed193572ade4ce4da33e32a043d2b384e6b3eaaabbd1350de->enter($__internal_d14e785a6bbd22aed193572ade4ce4da33e32a043d2b384e6b3eaaabbd1350de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_d14e785a6bbd22aed193572ade4ce4da33e32a043d2b384e6b3eaaabbd1350de->leave($__internal_d14e785a6bbd22aed193572ade4ce4da33e32a043d2b384e6b3eaaabbd1350de_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_76cc7fa620b7bacf93afc368d51cd4d84c368e57c85a57f181fa18b9b271ef14 = $this->env->getExtension("native_profiler");
        $__internal_76cc7fa620b7bacf93afc368d51cd4d84c368e57c85a57f181fa18b9b271ef14->enter($__internal_76cc7fa620b7bacf93afc368d51cd4d84c368e57c85a57f181fa18b9b271ef14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_76cc7fa620b7bacf93afc368d51cd4d84c368e57c85a57f181fa18b9b271ef14->leave($__internal_76cc7fa620b7bacf93afc368d51cd4d84c368e57c85a57f181fa18b9b271ef14_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d71ee83de67d73aed38ba8754b69ee9a7407f82a4ad26fa88373dee47a984f7d = $this->env->getExtension("native_profiler");
        $__internal_d71ee83de67d73aed38ba8754b69ee9a7407f82a4ad26fa88373dee47a984f7d->enter($__internal_d71ee83de67d73aed38ba8754b69ee9a7407f82a4ad26fa88373dee47a984f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_d71ee83de67d73aed38ba8754b69ee9a7407f82a4ad26fa88373dee47a984f7d->leave($__internal_d71ee83de67d73aed38ba8754b69ee9a7407f82a4ad26fa88373dee47a984f7d_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_34b352220de37f10637b0a22d7cbb517a441c2dfe2c03f4c6b84e1fd543a1c93 = $this->env->getExtension("native_profiler");
        $__internal_34b352220de37f10637b0a22d7cbb517a441c2dfe2c03f4c6b84e1fd543a1c93->enter($__internal_34b352220de37f10637b0a22d7cbb517a441c2dfe2c03f4c6b84e1fd543a1c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_34b352220de37f10637b0a22d7cbb517a441c2dfe2c03f4c6b84e1fd543a1c93->leave($__internal_34b352220de37f10637b0a22d7cbb517a441c2dfe2c03f4c6b84e1fd543a1c93_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_e171ea323acf3857dd4c7ebfab6eb0343d4beb33a1c76c8aedaa0946285f5539 = $this->env->getExtension("native_profiler");
        $__internal_e171ea323acf3857dd4c7ebfab6eb0343d4beb33a1c76c8aedaa0946285f5539->enter($__internal_e171ea323acf3857dd4c7ebfab6eb0343d4beb33a1c76c8aedaa0946285f5539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_e171ea323acf3857dd4c7ebfab6eb0343d4beb33a1c76c8aedaa0946285f5539->leave($__internal_e171ea323acf3857dd4c7ebfab6eb0343d4beb33a1c76c8aedaa0946285f5539_prof);

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
