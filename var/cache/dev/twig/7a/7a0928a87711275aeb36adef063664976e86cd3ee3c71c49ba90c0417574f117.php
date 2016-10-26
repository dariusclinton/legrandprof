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
        $__internal_b235717ec9651a6baee06dc10a760355f0fb56416a8ee1dabef7493a56048d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b235717ec9651a6baee06dc10a760355f0fb56416a8ee1dabef7493a56048d23->enter($__internal_b235717ec9651a6baee06dc10a760355f0fb56416a8ee1dabef7493a56048d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b235717ec9651a6baee06dc10a760355f0fb56416a8ee1dabef7493a56048d23->leave($__internal_b235717ec9651a6baee06dc10a760355f0fb56416a8ee1dabef7493a56048d23_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_88b2e04b19f46043d297514e1576a71b8db4be0e7b4b24ee0cb7db6939db8f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b2e04b19f46043d297514e1576a71b8db4be0e7b4b24ee0cb7db6939db8f48->enter($__internal_88b2e04b19f46043d297514e1576a71b8db4be0e7b4b24ee0cb7db6939db8f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_88b2e04b19f46043d297514e1576a71b8db4be0e7b4b24ee0cb7db6939db8f48->leave($__internal_88b2e04b19f46043d297514e1576a71b8db4be0e7b4b24ee0cb7db6939db8f48_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_c86d3974b5593ce43f08a242feeed6f8b706989e20fb885d4c6cf3bad0483a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86d3974b5593ce43f08a242feeed6f8b706989e20fb885d4c6cf3bad0483a7e->enter($__internal_c86d3974b5593ce43f08a242feeed6f8b706989e20fb885d4c6cf3bad0483a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_c86d3974b5593ce43f08a242feeed6f8b706989e20fb885d4c6cf3bad0483a7e->leave($__internal_c86d3974b5593ce43f08a242feeed6f8b706989e20fb885d4c6cf3bad0483a7e_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_296d521b7448000d1263c4808d948078771080094c1f256170e638d41c77acb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296d521b7448000d1263c4808d948078771080094c1f256170e638d41c77acb0->enter($__internal_296d521b7448000d1263c4808d948078771080094c1f256170e638d41c77acb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_296d521b7448000d1263c4808d948078771080094c1f256170e638d41c77acb0->leave($__internal_296d521b7448000d1263c4808d948078771080094c1f256170e638d41c77acb0_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_1085113a93291cda58381451254b6590fdfa33943e5f7237036df72b2b8baae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1085113a93291cda58381451254b6590fdfa33943e5f7237036df72b2b8baae8->enter($__internal_1085113a93291cda58381451254b6590fdfa33943e5f7237036df72b2b8baae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_1085113a93291cda58381451254b6590fdfa33943e5f7237036df72b2b8baae8->leave($__internal_1085113a93291cda58381451254b6590fdfa33943e5f7237036df72b2b8baae8_prof);

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
