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
        $__internal_86d362378931f35cc2af0319ca1fd600e253f4e830cf7f1c30b219f9ce5b6e47 = $this->env->getExtension("native_profiler");
        $__internal_86d362378931f35cc2af0319ca1fd600e253f4e830cf7f1c30b219f9ce5b6e47->enter($__internal_86d362378931f35cc2af0319ca1fd600e253f4e830cf7f1c30b219f9ce5b6e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86d362378931f35cc2af0319ca1fd600e253f4e830cf7f1c30b219f9ce5b6e47->leave($__internal_86d362378931f35cc2af0319ca1fd600e253f4e830cf7f1c30b219f9ce5b6e47_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_3e4b6e5e5e98a3b955fe3d1ea33daa57c22b5d49698636276ed084a23d98aaeb = $this->env->getExtension("native_profiler");
        $__internal_3e4b6e5e5e98a3b955fe3d1ea33daa57c22b5d49698636276ed084a23d98aaeb->enter($__internal_3e4b6e5e5e98a3b955fe3d1ea33daa57c22b5d49698636276ed084a23d98aaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_3e4b6e5e5e98a3b955fe3d1ea33daa57c22b5d49698636276ed084a23d98aaeb->leave($__internal_3e4b6e5e5e98a3b955fe3d1ea33daa57c22b5d49698636276ed084a23d98aaeb_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_cb974f0c8eb6a2c3d9204794fcbbf7a87eeeb5ed5a1a210bdcd755baa4c1021a = $this->env->getExtension("native_profiler");
        $__internal_cb974f0c8eb6a2c3d9204794fcbbf7a87eeeb5ed5a1a210bdcd755baa4c1021a->enter($__internal_cb974f0c8eb6a2c3d9204794fcbbf7a87eeeb5ed5a1a210bdcd755baa4c1021a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_cb974f0c8eb6a2c3d9204794fcbbf7a87eeeb5ed5a1a210bdcd755baa4c1021a->leave($__internal_cb974f0c8eb6a2c3d9204794fcbbf7a87eeeb5ed5a1a210bdcd755baa4c1021a_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_07c786d25bd55252f8e81a9b950d878afd77db18b93ce1a09b85a172b64eb69c = $this->env->getExtension("native_profiler");
        $__internal_07c786d25bd55252f8e81a9b950d878afd77db18b93ce1a09b85a172b64eb69c->enter($__internal_07c786d25bd55252f8e81a9b950d878afd77db18b93ce1a09b85a172b64eb69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_07c786d25bd55252f8e81a9b950d878afd77db18b93ce1a09b85a172b64eb69c->leave($__internal_07c786d25bd55252f8e81a9b950d878afd77db18b93ce1a09b85a172b64eb69c_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_9ef428ae7064c05c87808a80afb61263834a13347632dbe8b915b9d9081ed214 = $this->env->getExtension("native_profiler");
        $__internal_9ef428ae7064c05c87808a80afb61263834a13347632dbe8b915b9d9081ed214->enter($__internal_9ef428ae7064c05c87808a80afb61263834a13347632dbe8b915b9d9081ed214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_9ef428ae7064c05c87808a80afb61263834a13347632dbe8b915b9d9081ed214->leave($__internal_9ef428ae7064c05c87808a80afb61263834a13347632dbe8b915b9d9081ed214_prof);

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
