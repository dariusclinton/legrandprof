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
        $__internal_0a155f0de0578febd2240b6f3cdd4185f779cce9d29296c71bd27cd7b1002412 = $this->env->getExtension("native_profiler");
        $__internal_0a155f0de0578febd2240b6f3cdd4185f779cce9d29296c71bd27cd7b1002412->enter($__internal_0a155f0de0578febd2240b6f3cdd4185f779cce9d29296c71bd27cd7b1002412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a155f0de0578febd2240b6f3cdd4185f779cce9d29296c71bd27cd7b1002412->leave($__internal_0a155f0de0578febd2240b6f3cdd4185f779cce9d29296c71bd27cd7b1002412_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_08b2522e7401da7489b10506b6b93b540e95cddbc72cc592d9b535f68b65b1d0 = $this->env->getExtension("native_profiler");
        $__internal_08b2522e7401da7489b10506b6b93b540e95cddbc72cc592d9b535f68b65b1d0->enter($__internal_08b2522e7401da7489b10506b6b93b540e95cddbc72cc592d9b535f68b65b1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_08b2522e7401da7489b10506b6b93b540e95cddbc72cc592d9b535f68b65b1d0->leave($__internal_08b2522e7401da7489b10506b6b93b540e95cddbc72cc592d9b535f68b65b1d0_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_126991a3916fa77095cada119d8672e6e1a5706ad9e13538d2839333bc1972c8 = $this->env->getExtension("native_profiler");
        $__internal_126991a3916fa77095cada119d8672e6e1a5706ad9e13538d2839333bc1972c8->enter($__internal_126991a3916fa77095cada119d8672e6e1a5706ad9e13538d2839333bc1972c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_126991a3916fa77095cada119d8672e6e1a5706ad9e13538d2839333bc1972c8->leave($__internal_126991a3916fa77095cada119d8672e6e1a5706ad9e13538d2839333bc1972c8_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_040a5a5fb20f17ab22b9b2e75aaee66f12c2d7c1da2184c6b31a26f4534e99d5 = $this->env->getExtension("native_profiler");
        $__internal_040a5a5fb20f17ab22b9b2e75aaee66f12c2d7c1da2184c6b31a26f4534e99d5->enter($__internal_040a5a5fb20f17ab22b9b2e75aaee66f12c2d7c1da2184c6b31a26f4534e99d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_040a5a5fb20f17ab22b9b2e75aaee66f12c2d7c1da2184c6b31a26f4534e99d5->leave($__internal_040a5a5fb20f17ab22b9b2e75aaee66f12c2d7c1da2184c6b31a26f4534e99d5_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_dcda6842522b34c171231fdcc96a6c86d1bef7c479514fb55b94bb367a8463fd = $this->env->getExtension("native_profiler");
        $__internal_dcda6842522b34c171231fdcc96a6c86d1bef7c479514fb55b94bb367a8463fd->enter($__internal_dcda6842522b34c171231fdcc96a6c86d1bef7c479514fb55b94bb367a8463fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_dcda6842522b34c171231fdcc96a6c86d1bef7c479514fb55b94bb367a8463fd->leave($__internal_dcda6842522b34c171231fdcc96a6c86d1bef7c479514fb55b94bb367a8463fd_prof);

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
