<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_5096415303aede37789e8b869c2e3f43d125ef9acfbae38520aad044e3480744 extends Twig_Template
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
        $__internal_66092b27951675f9950637df97df1e5c40dfc9b2021b80129f9ef54bd906cee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66092b27951675f9950637df97df1e5c40dfc9b2021b80129f9ef54bd906cee3->enter($__internal_66092b27951675f9950637df97df1e5c40dfc9b2021b80129f9ef54bd906cee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66092b27951675f9950637df97df1e5c40dfc9b2021b80129f9ef54bd906cee3->leave($__internal_66092b27951675f9950637df97df1e5c40dfc9b2021b80129f9ef54bd906cee3_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e0cdc00201b05b93ac7583be1d355b556055ed9b48b0036f011b7e0e8ce2c7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cdc00201b05b93ac7583be1d355b556055ed9b48b0036f011b7e0e8ce2c7a2->enter($__internal_e0cdc00201b05b93ac7583be1d355b556055ed9b48b0036f011b7e0e8ce2c7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_e0cdc00201b05b93ac7583be1d355b556055ed9b48b0036f011b7e0e8ce2c7a2->leave($__internal_e0cdc00201b05b93ac7583be1d355b556055ed9b48b0036f011b7e0e8ce2c7a2_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_fd9319fcf343cbaae13b2d4e636bf70f3859a8d7e9b4b6d05df4be5c8adca380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9319fcf343cbaae13b2d4e636bf70f3859a8d7e9b4b6d05df4be5c8adca380->enter($__internal_fd9319fcf343cbaae13b2d4e636bf70f3859a8d7e9b4b6d05df4be5c8adca380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_fd9319fcf343cbaae13b2d4e636bf70f3859a8d7e9b4b6d05df4be5c8adca380->leave($__internal_fd9319fcf343cbaae13b2d4e636bf70f3859a8d7e9b4b6d05df4be5c8adca380_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_121a45e31574e93e7b1241c18529293032c0fa59d9d165d87353a6e993ea82f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121a45e31574e93e7b1241c18529293032c0fa59d9d165d87353a6e993ea82f2->enter($__internal_121a45e31574e93e7b1241c18529293032c0fa59d9d165d87353a6e993ea82f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_121a45e31574e93e7b1241c18529293032c0fa59d9d165d87353a6e993ea82f2->leave($__internal_121a45e31574e93e7b1241c18529293032c0fa59d9d165d87353a6e993ea82f2_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_05d2fff09c026bf2f203170f0549e2b5966d94634582c654a06415f505877984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d2fff09c026bf2f203170f0549e2b5966d94634582c654a06415f505877984->enter($__internal_05d2fff09c026bf2f203170f0549e2b5966d94634582c654a06415f505877984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_05d2fff09c026bf2f203170f0549e2b5966d94634582c654a06415f505877984->leave($__internal_05d2fff09c026bf2f203170f0549e2b5966d94634582c654a06415f505877984_prof);

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
