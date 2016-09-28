<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_bfa3519a49ad7b89fcf44b034037e9812ea2e0f5ef03664242a1e0cc3a91275d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eefbb7a056c88d88cb6b9b9db54f2b3019e612a1ecec651dc2cbe4b521f91077 = $this->env->getExtension("native_profiler");
        $__internal_eefbb7a056c88d88cb6b9b9db54f2b3019e612a1ecec651dc2cbe4b521f91077->enter($__internal_eefbb7a056c88d88cb6b9b9db54f2b3019e612a1ecec651dc2cbe4b521f91077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eefbb7a056c88d88cb6b9b9db54f2b3019e612a1ecec651dc2cbe4b521f91077->leave($__internal_eefbb7a056c88d88cb6b9b9db54f2b3019e612a1ecec651dc2cbe4b521f91077_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fa2c876a0b70ec4d2d02097266cbc602867931b9b83fea842ca1af0ec40a729e = $this->env->getExtension("native_profiler");
        $__internal_fa2c876a0b70ec4d2d02097266cbc602867931b9b83fea842ca1af0ec40a729e->enter($__internal_fa2c876a0b70ec4d2d02097266cbc602867931b9b83fea842ca1af0ec40a729e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_fa2c876a0b70ec4d2d02097266cbc602867931b9b83fea842ca1af0ec40a729e->leave($__internal_fa2c876a0b70ec4d2d02097266cbc602867931b9b83fea842ca1af0ec40a729e_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_4c3eb673b0c4d4cf9fbefd570118c04bfab16fe2443ef975dbcc1ce2948852e6 = $this->env->getExtension("native_profiler");
        $__internal_4c3eb673b0c4d4cf9fbefd570118c04bfab16fe2443ef975dbcc1ce2948852e6->enter($__internal_4c3eb673b0c4d4cf9fbefd570118c04bfab16fe2443ef975dbcc1ce2948852e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_4c3eb673b0c4d4cf9fbefd570118c04bfab16fe2443ef975dbcc1ce2948852e6->leave($__internal_4c3eb673b0c4d4cf9fbefd570118c04bfab16fe2443ef975dbcc1ce2948852e6_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_a4205b4ddf2784f02ae1b008988911adbe7e22882fe7f4308fd80dbf1993289f = $this->env->getExtension("native_profiler");
        $__internal_a4205b4ddf2784f02ae1b008988911adbe7e22882fe7f4308fd80dbf1993289f->enter($__internal_a4205b4ddf2784f02ae1b008988911adbe7e22882fe7f4308fd80dbf1993289f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_a4205b4ddf2784f02ae1b008988911adbe7e22882fe7f4308fd80dbf1993289f->leave($__internal_a4205b4ddf2784f02ae1b008988911adbe7e22882fe7f4308fd80dbf1993289f_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_98fc7297c5f032c2da260f1c458b6e3a4a350e211b5f8c228a8e5d152b52126f = $this->env->getExtension("native_profiler");
        $__internal_98fc7297c5f032c2da260f1c458b6e3a4a350e211b5f8c228a8e5d152b52126f->enter($__internal_98fc7297c5f032c2da260f1c458b6e3a4a350e211b5f8c228a8e5d152b52126f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_98fc7297c5f032c2da260f1c458b6e3a4a350e211b5f8c228a8e5d152b52126f->leave($__internal_98fc7297c5f032c2da260f1c458b6e3a4a350e211b5f8c228a8e5d152b52126f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 22,  70 => 21,  62 => 24,  59 => 21,  53 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
";
    }
}
