<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_d00973375285d1b4d043e78dd55ef1aadb20d5e7b659b8d62bedd79e875b6ddd extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c44f1de0dda58180e93dbc19c239c92d8e69ebbd9b37213d6d1be7d52144e5d1 = $this->env->getExtension("native_profiler");
        $__internal_c44f1de0dda58180e93dbc19c239c92d8e69ebbd9b37213d6d1be7d52144e5d1->enter($__internal_c44f1de0dda58180e93dbc19c239c92d8e69ebbd9b37213d6d1be7d52144e5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c44f1de0dda58180e93dbc19c239c92d8e69ebbd9b37213d6d1be7d52144e5d1->leave($__internal_c44f1de0dda58180e93dbc19c239c92d8e69ebbd9b37213d6d1be7d52144e5d1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cbeaba5773b52f31d11b11bb8ef169d1043355b5cc553f29c3819cb3ec4bbe66 = $this->env->getExtension("native_profiler");
        $__internal_cbeaba5773b52f31d11b11bb8ef169d1043355b5cc553f29c3819cb3ec4bbe66->enter($__internal_cbeaba5773b52f31d11b11bb8ef169d1043355b5cc553f29c3819cb3ec4bbe66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_cbeaba5773b52f31d11b11bb8ef169d1043355b5cc553f29c3819cb3ec4bbe66->leave($__internal_cbeaba5773b52f31d11b11bb8ef169d1043355b5cc553f29c3819cb3ec4bbe66_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
";
    }
}
