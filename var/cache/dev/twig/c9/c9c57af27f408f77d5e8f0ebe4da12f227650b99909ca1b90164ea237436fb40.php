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
        $__internal_915b2c35fbd59d27e854b988c0b530d841ae009f01b650d04fab5778a43ce9ae = $this->env->getExtension("native_profiler");
        $__internal_915b2c35fbd59d27e854b988c0b530d841ae009f01b650d04fab5778a43ce9ae->enter($__internal_915b2c35fbd59d27e854b988c0b530d841ae009f01b650d04fab5778a43ce9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_915b2c35fbd59d27e854b988c0b530d841ae009f01b650d04fab5778a43ce9ae->leave($__internal_915b2c35fbd59d27e854b988c0b530d841ae009f01b650d04fab5778a43ce9ae_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_bf08f2f6f3b50dbe678fa8e5930b6639639ce0da29f16574725ef91bca17d846 = $this->env->getExtension("native_profiler");
        $__internal_bf08f2f6f3b50dbe678fa8e5930b6639639ce0da29f16574725ef91bca17d846->enter($__internal_bf08f2f6f3b50dbe678fa8e5930b6639639ce0da29f16574725ef91bca17d846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_bf08f2f6f3b50dbe678fa8e5930b6639639ce0da29f16574725ef91bca17d846->leave($__internal_bf08f2f6f3b50dbe678fa8e5930b6639639ce0da29f16574725ef91bca17d846_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_09ad2e7dac49dedc39393acd519e3752cb0d04967d06bb08d1f75c9611ce85f7 = $this->env->getExtension("native_profiler");
        $__internal_09ad2e7dac49dedc39393acd519e3752cb0d04967d06bb08d1f75c9611ce85f7->enter($__internal_09ad2e7dac49dedc39393acd519e3752cb0d04967d06bb08d1f75c9611ce85f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_09ad2e7dac49dedc39393acd519e3752cb0d04967d06bb08d1f75c9611ce85f7->leave($__internal_09ad2e7dac49dedc39393acd519e3752cb0d04967d06bb08d1f75c9611ce85f7_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_df4986029fe57626c0cf0933c2837b7419d0c471fecca5ca5253b6007b2e3762 = $this->env->getExtension("native_profiler");
        $__internal_df4986029fe57626c0cf0933c2837b7419d0c471fecca5ca5253b6007b2e3762->enter($__internal_df4986029fe57626c0cf0933c2837b7419d0c471fecca5ca5253b6007b2e3762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_df4986029fe57626c0cf0933c2837b7419d0c471fecca5ca5253b6007b2e3762->leave($__internal_df4986029fe57626c0cf0933c2837b7419d0c471fecca5ca5253b6007b2e3762_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_95a6834f514d912f84ee2401f05513b558dd9e111c8fbda4d8edacfae2e91f62 = $this->env->getExtension("native_profiler");
        $__internal_95a6834f514d912f84ee2401f05513b558dd9e111c8fbda4d8edacfae2e91f62->enter($__internal_95a6834f514d912f84ee2401f05513b558dd9e111c8fbda4d8edacfae2e91f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_95a6834f514d912f84ee2401f05513b558dd9e111c8fbda4d8edacfae2e91f62->leave($__internal_95a6834f514d912f84ee2401f05513b558dd9e111c8fbda4d8edacfae2e91f62_prof);

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
