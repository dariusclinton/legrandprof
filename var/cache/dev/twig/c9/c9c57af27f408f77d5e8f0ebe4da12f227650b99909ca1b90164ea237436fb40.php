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
        $__internal_a66a8e004d319c4c02174af1181fd9800d1cf922e0f1fb2d02ab6031c7dc44d4 = $this->env->getExtension("native_profiler");
        $__internal_a66a8e004d319c4c02174af1181fd9800d1cf922e0f1fb2d02ab6031c7dc44d4->enter($__internal_a66a8e004d319c4c02174af1181fd9800d1cf922e0f1fb2d02ab6031c7dc44d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a66a8e004d319c4c02174af1181fd9800d1cf922e0f1fb2d02ab6031c7dc44d4->leave($__internal_a66a8e004d319c4c02174af1181fd9800d1cf922e0f1fb2d02ab6031c7dc44d4_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8d8936de757830d726874d0f03cef403d9af0f2e313607f81ed86c129b1de0c3 = $this->env->getExtension("native_profiler");
        $__internal_8d8936de757830d726874d0f03cef403d9af0f2e313607f81ed86c129b1de0c3->enter($__internal_8d8936de757830d726874d0f03cef403d9af0f2e313607f81ed86c129b1de0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_8d8936de757830d726874d0f03cef403d9af0f2e313607f81ed86c129b1de0c3->leave($__internal_8d8936de757830d726874d0f03cef403d9af0f2e313607f81ed86c129b1de0c3_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_0c3d7e51117e5b8e20a4cecc4b711b906b5b1b251599277d2779fbf89d21cdb9 = $this->env->getExtension("native_profiler");
        $__internal_0c3d7e51117e5b8e20a4cecc4b711b906b5b1b251599277d2779fbf89d21cdb9->enter($__internal_0c3d7e51117e5b8e20a4cecc4b711b906b5b1b251599277d2779fbf89d21cdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_0c3d7e51117e5b8e20a4cecc4b711b906b5b1b251599277d2779fbf89d21cdb9->leave($__internal_0c3d7e51117e5b8e20a4cecc4b711b906b5b1b251599277d2779fbf89d21cdb9_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_5abdbb05c1cf506b8005b55aecea5a8df4e1d86ae7c36519b9cc356f71c95374 = $this->env->getExtension("native_profiler");
        $__internal_5abdbb05c1cf506b8005b55aecea5a8df4e1d86ae7c36519b9cc356f71c95374->enter($__internal_5abdbb05c1cf506b8005b55aecea5a8df4e1d86ae7c36519b9cc356f71c95374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_5abdbb05c1cf506b8005b55aecea5a8df4e1d86ae7c36519b9cc356f71c95374->leave($__internal_5abdbb05c1cf506b8005b55aecea5a8df4e1d86ae7c36519b9cc356f71c95374_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_2e2135d6bbd4e18a5bac3f82da81c21876577d2a3fc98dd1e1e1ea583586d4a1 = $this->env->getExtension("native_profiler");
        $__internal_2e2135d6bbd4e18a5bac3f82da81c21876577d2a3fc98dd1e1e1ea583586d4a1->enter($__internal_2e2135d6bbd4e18a5bac3f82da81c21876577d2a3fc98dd1e1e1ea583586d4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_2e2135d6bbd4e18a5bac3f82da81c21876577d2a3fc98dd1e1e1ea583586d4a1->leave($__internal_2e2135d6bbd4e18a5bac3f82da81c21876577d2a3fc98dd1e1e1ea583586d4a1_prof);

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
