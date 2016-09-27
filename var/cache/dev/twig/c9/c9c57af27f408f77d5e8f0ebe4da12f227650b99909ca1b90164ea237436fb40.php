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
        $__internal_504d465ff515622e48d183e160fd186dbf8b625f262875627379915a99b4a26c = $this->env->getExtension("native_profiler");
        $__internal_504d465ff515622e48d183e160fd186dbf8b625f262875627379915a99b4a26c->enter($__internal_504d465ff515622e48d183e160fd186dbf8b625f262875627379915a99b4a26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_504d465ff515622e48d183e160fd186dbf8b625f262875627379915a99b4a26c->leave($__internal_504d465ff515622e48d183e160fd186dbf8b625f262875627379915a99b4a26c_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fae61e4f74d3d95f990fb7529e299674ec7abd6adae91ecb75aa4a8032638779 = $this->env->getExtension("native_profiler");
        $__internal_fae61e4f74d3d95f990fb7529e299674ec7abd6adae91ecb75aa4a8032638779->enter($__internal_fae61e4f74d3d95f990fb7529e299674ec7abd6adae91ecb75aa4a8032638779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_fae61e4f74d3d95f990fb7529e299674ec7abd6adae91ecb75aa4a8032638779->leave($__internal_fae61e4f74d3d95f990fb7529e299674ec7abd6adae91ecb75aa4a8032638779_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_3938efc0767ebb310bbe8cc9799e17053e8cc13b716c3acfd9871a6914f6ae5d = $this->env->getExtension("native_profiler");
        $__internal_3938efc0767ebb310bbe8cc9799e17053e8cc13b716c3acfd9871a6914f6ae5d->enter($__internal_3938efc0767ebb310bbe8cc9799e17053e8cc13b716c3acfd9871a6914f6ae5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_3938efc0767ebb310bbe8cc9799e17053e8cc13b716c3acfd9871a6914f6ae5d->leave($__internal_3938efc0767ebb310bbe8cc9799e17053e8cc13b716c3acfd9871a6914f6ae5d_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_9a37c45286ddf6daf8bf88331a503d0b32f07d6ad0e13118a88d574d36c0aceb = $this->env->getExtension("native_profiler");
        $__internal_9a37c45286ddf6daf8bf88331a503d0b32f07d6ad0e13118a88d574d36c0aceb->enter($__internal_9a37c45286ddf6daf8bf88331a503d0b32f07d6ad0e13118a88d574d36c0aceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_9a37c45286ddf6daf8bf88331a503d0b32f07d6ad0e13118a88d574d36c0aceb->leave($__internal_9a37c45286ddf6daf8bf88331a503d0b32f07d6ad0e13118a88d574d36c0aceb_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_dc3f90c7782d7ebffb9b0c695c78a7c0382ce4ecdffb981da51e5367aabee84f = $this->env->getExtension("native_profiler");
        $__internal_dc3f90c7782d7ebffb9b0c695c78a7c0382ce4ecdffb981da51e5367aabee84f->enter($__internal_dc3f90c7782d7ebffb9b0c695c78a7c0382ce4ecdffb981da51e5367aabee84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_dc3f90c7782d7ebffb9b0c695c78a7c0382ce4ecdffb981da51e5367aabee84f->leave($__internal_dc3f90c7782d7ebffb9b0c695c78a7c0382ce4ecdffb981da51e5367aabee84f_prof);

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
