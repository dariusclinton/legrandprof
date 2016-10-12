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
        $__internal_b398617f65dad14c3c8722f94f70daaca702f9b2c62c89f9b22c56343dad8a2c = $this->env->getExtension("native_profiler");
        $__internal_b398617f65dad14c3c8722f94f70daaca702f9b2c62c89f9b22c56343dad8a2c->enter($__internal_b398617f65dad14c3c8722f94f70daaca702f9b2c62c89f9b22c56343dad8a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b398617f65dad14c3c8722f94f70daaca702f9b2c62c89f9b22c56343dad8a2c->leave($__internal_b398617f65dad14c3c8722f94f70daaca702f9b2c62c89f9b22c56343dad8a2c_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1ef1d0fb8d3918c8b8414e1993146a2c92b0c42a3f83e77f6272d2cf64853127 = $this->env->getExtension("native_profiler");
        $__internal_1ef1d0fb8d3918c8b8414e1993146a2c92b0c42a3f83e77f6272d2cf64853127->enter($__internal_1ef1d0fb8d3918c8b8414e1993146a2c92b0c42a3f83e77f6272d2cf64853127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_1ef1d0fb8d3918c8b8414e1993146a2c92b0c42a3f83e77f6272d2cf64853127->leave($__internal_1ef1d0fb8d3918c8b8414e1993146a2c92b0c42a3f83e77f6272d2cf64853127_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_9ca223c2a7d8cf9880a0353fc1001155f2e50ec0c5ba1949d22857225c6d8816 = $this->env->getExtension("native_profiler");
        $__internal_9ca223c2a7d8cf9880a0353fc1001155f2e50ec0c5ba1949d22857225c6d8816->enter($__internal_9ca223c2a7d8cf9880a0353fc1001155f2e50ec0c5ba1949d22857225c6d8816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_9ca223c2a7d8cf9880a0353fc1001155f2e50ec0c5ba1949d22857225c6d8816->leave($__internal_9ca223c2a7d8cf9880a0353fc1001155f2e50ec0c5ba1949d22857225c6d8816_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_3b95e00131e847ce365446f475f0dc33b4829f5c014d5e71222c95b3e6f7ef91 = $this->env->getExtension("native_profiler");
        $__internal_3b95e00131e847ce365446f475f0dc33b4829f5c014d5e71222c95b3e6f7ef91->enter($__internal_3b95e00131e847ce365446f475f0dc33b4829f5c014d5e71222c95b3e6f7ef91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_3b95e00131e847ce365446f475f0dc33b4829f5c014d5e71222c95b3e6f7ef91->leave($__internal_3b95e00131e847ce365446f475f0dc33b4829f5c014d5e71222c95b3e6f7ef91_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_5485e3f36a94ce612d700449c77cdcb4a5a02742c2755a2f86b6caee12b88275 = $this->env->getExtension("native_profiler");
        $__internal_5485e3f36a94ce612d700449c77cdcb4a5a02742c2755a2f86b6caee12b88275->enter($__internal_5485e3f36a94ce612d700449c77cdcb4a5a02742c2755a2f86b6caee12b88275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_5485e3f36a94ce612d700449c77cdcb4a5a02742c2755a2f86b6caee12b88275->leave($__internal_5485e3f36a94ce612d700449c77cdcb4a5a02742c2755a2f86b6caee12b88275_prof);

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
