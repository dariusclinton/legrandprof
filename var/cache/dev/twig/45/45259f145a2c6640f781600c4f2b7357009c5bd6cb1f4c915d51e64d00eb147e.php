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
        $__internal_410df7bbf344ab6171e63edfe10bf8837970e0ec82d8696efe2ce02daf0b1077 = $this->env->getExtension("native_profiler");
        $__internal_410df7bbf344ab6171e63edfe10bf8837970e0ec82d8696efe2ce02daf0b1077->enter($__internal_410df7bbf344ab6171e63edfe10bf8837970e0ec82d8696efe2ce02daf0b1077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_410df7bbf344ab6171e63edfe10bf8837970e0ec82d8696efe2ce02daf0b1077->leave($__internal_410df7bbf344ab6171e63edfe10bf8837970e0ec82d8696efe2ce02daf0b1077_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d18d6798a4836679204f244d8c559eab968a322436325d30860e94dd0ebe8ee9 = $this->env->getExtension("native_profiler");
        $__internal_d18d6798a4836679204f244d8c559eab968a322436325d30860e94dd0ebe8ee9->enter($__internal_d18d6798a4836679204f244d8c559eab968a322436325d30860e94dd0ebe8ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_d18d6798a4836679204f244d8c559eab968a322436325d30860e94dd0ebe8ee9->leave($__internal_d18d6798a4836679204f244d8c559eab968a322436325d30860e94dd0ebe8ee9_prof);

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
