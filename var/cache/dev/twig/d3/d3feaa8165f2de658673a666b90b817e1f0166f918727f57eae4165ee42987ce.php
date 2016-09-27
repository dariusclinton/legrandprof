<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_9d69b791462272ceed385abdf275bb455019ec153c13074770f2cf8c6dec0267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4aeed007fcce4a5ecf8d2bbe7c0e893b9bace57d89d6ac1aed9ef70853ae223d = $this->env->getExtension("native_profiler");
        $__internal_4aeed007fcce4a5ecf8d2bbe7c0e893b9bace57d89d6ac1aed9ef70853ae223d->enter($__internal_4aeed007fcce4a5ecf8d2bbe7c0e893b9bace57d89d6ac1aed9ef70853ae223d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aeed007fcce4a5ecf8d2bbe7c0e893b9bace57d89d6ac1aed9ef70853ae223d->leave($__internal_4aeed007fcce4a5ecf8d2bbe7c0e893b9bace57d89d6ac1aed9ef70853ae223d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1d0e095f042c39a4ae1557361240ae340eb691aa2b93fa7653aabd6674d36602 = $this->env->getExtension("native_profiler");
        $__internal_1d0e095f042c39a4ae1557361240ae340eb691aa2b93fa7653aabd6674d36602->enter($__internal_1d0e095f042c39a4ae1557361240ae340eb691aa2b93fa7653aabd6674d36602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(sprintf((isset($context["valueFormat"]) ? $context["valueFormat"] : $this->getContext($context, "valueFormat")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_1d0e095f042c39a4ae1557361240ae340eb691aa2b93fa7653aabd6674d36602->leave($__internal_1d0e095f042c39a4ae1557361240ae340eb691aa2b93fa7653aabd6674d36602_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  45 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field%}
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
";
    }
}
