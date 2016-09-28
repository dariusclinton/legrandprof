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
        $__internal_b0ec9c8b79b42d8658260cc6ecb0de0a86e0e1a25b8226f250651ba35d154ce8 = $this->env->getExtension("native_profiler");
        $__internal_b0ec9c8b79b42d8658260cc6ecb0de0a86e0e1a25b8226f250651ba35d154ce8->enter($__internal_b0ec9c8b79b42d8658260cc6ecb0de0a86e0e1a25b8226f250651ba35d154ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0ec9c8b79b42d8658260cc6ecb0de0a86e0e1a25b8226f250651ba35d154ce8->leave($__internal_b0ec9c8b79b42d8658260cc6ecb0de0a86e0e1a25b8226f250651ba35d154ce8_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_bf97f318042292834e196a7a82fc8f28a7fd0b74a31d193256a7fe411e4689db = $this->env->getExtension("native_profiler");
        $__internal_bf97f318042292834e196a7a82fc8f28a7fd0b74a31d193256a7fe411e4689db->enter($__internal_bf97f318042292834e196a7a82fc8f28a7fd0b74a31d193256a7fe411e4689db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_bf97f318042292834e196a7a82fc8f28a7fd0b74a31d193256a7fe411e4689db->leave($__internal_bf97f318042292834e196a7a82fc8f28a7fd0b74a31d193256a7fe411e4689db_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_88cbb1d9a18864b997f438cfe9a0c164db7cc566d8715354207a243da05d6a1d = $this->env->getExtension("native_profiler");
        $__internal_88cbb1d9a18864b997f438cfe9a0c164db7cc566d8715354207a243da05d6a1d->enter($__internal_88cbb1d9a18864b997f438cfe9a0c164db7cc566d8715354207a243da05d6a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_88cbb1d9a18864b997f438cfe9a0c164db7cc566d8715354207a243da05d6a1d->leave($__internal_88cbb1d9a18864b997f438cfe9a0c164db7cc566d8715354207a243da05d6a1d_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_b79cd71a3bc95c670cf5166a563aad416de7ce23cd87a75d59e99d6703698510 = $this->env->getExtension("native_profiler");
        $__internal_b79cd71a3bc95c670cf5166a563aad416de7ce23cd87a75d59e99d6703698510->enter($__internal_b79cd71a3bc95c670cf5166a563aad416de7ce23cd87a75d59e99d6703698510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_b79cd71a3bc95c670cf5166a563aad416de7ce23cd87a75d59e99d6703698510->leave($__internal_b79cd71a3bc95c670cf5166a563aad416de7ce23cd87a75d59e99d6703698510_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_3a4798fa843016258af13ae4debf0b97b5fdbdcd0d38b5592efe4545cf8c2876 = $this->env->getExtension("native_profiler");
        $__internal_3a4798fa843016258af13ae4debf0b97b5fdbdcd0d38b5592efe4545cf8c2876->enter($__internal_3a4798fa843016258af13ae4debf0b97b5fdbdcd0d38b5592efe4545cf8c2876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_3a4798fa843016258af13ae4debf0b97b5fdbdcd0d38b5592efe4545cf8c2876->leave($__internal_3a4798fa843016258af13ae4debf0b97b5fdbdcd0d38b5592efe4545cf8c2876_prof);

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
