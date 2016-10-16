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
        $__internal_11ea01f972785735734c30a4d8c34b6a047816fe17535e580a4b0667617232a0 = $this->env->getExtension("native_profiler");
        $__internal_11ea01f972785735734c30a4d8c34b6a047816fe17535e580a4b0667617232a0->enter($__internal_11ea01f972785735734c30a4d8c34b6a047816fe17535e580a4b0667617232a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11ea01f972785735734c30a4d8c34b6a047816fe17535e580a4b0667617232a0->leave($__internal_11ea01f972785735734c30a4d8c34b6a047816fe17535e580a4b0667617232a0_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_553f2da9b30a77297ad38b465cfb7e28a32cca098198d472e66f6970bf6865a8 = $this->env->getExtension("native_profiler");
        $__internal_553f2da9b30a77297ad38b465cfb7e28a32cca098198d472e66f6970bf6865a8->enter($__internal_553f2da9b30a77297ad38b465cfb7e28a32cca098198d472e66f6970bf6865a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_553f2da9b30a77297ad38b465cfb7e28a32cca098198d472e66f6970bf6865a8->leave($__internal_553f2da9b30a77297ad38b465cfb7e28a32cca098198d472e66f6970bf6865a8_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_14656a45b2218b74367498d98b33f4d850750eaab115348ae903436bf67a5cde = $this->env->getExtension("native_profiler");
        $__internal_14656a45b2218b74367498d98b33f4d850750eaab115348ae903436bf67a5cde->enter($__internal_14656a45b2218b74367498d98b33f4d850750eaab115348ae903436bf67a5cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_14656a45b2218b74367498d98b33f4d850750eaab115348ae903436bf67a5cde->leave($__internal_14656a45b2218b74367498d98b33f4d850750eaab115348ae903436bf67a5cde_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_f7ea6dc4982a43b8fb5bc49d377b0ad522ddb8022eabe7164d86e9b1bf05cd6d = $this->env->getExtension("native_profiler");
        $__internal_f7ea6dc4982a43b8fb5bc49d377b0ad522ddb8022eabe7164d86e9b1bf05cd6d->enter($__internal_f7ea6dc4982a43b8fb5bc49d377b0ad522ddb8022eabe7164d86e9b1bf05cd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_f7ea6dc4982a43b8fb5bc49d377b0ad522ddb8022eabe7164d86e9b1bf05cd6d->leave($__internal_f7ea6dc4982a43b8fb5bc49d377b0ad522ddb8022eabe7164d86e9b1bf05cd6d_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_b1ac8fb7deda2cc97b39790941e415f80995999e3f403f1cf5c238549c6295f3 = $this->env->getExtension("native_profiler");
        $__internal_b1ac8fb7deda2cc97b39790941e415f80995999e3f403f1cf5c238549c6295f3->enter($__internal_b1ac8fb7deda2cc97b39790941e415f80995999e3f403f1cf5c238549c6295f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_b1ac8fb7deda2cc97b39790941e415f80995999e3f403f1cf5c238549c6295f3->leave($__internal_b1ac8fb7deda2cc97b39790941e415f80995999e3f403f1cf5c238549c6295f3_prof);

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
