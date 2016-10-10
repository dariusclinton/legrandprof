<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_36a80371c5f8097b0660d4b8e9a87363341bd90e8db287d0638403f9e101ade0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63cc7399f69561ad0f3b15ad6d1d8a11a434a4a41724330cc9b4e9150ac99f27 = $this->env->getExtension("native_profiler");
        $__internal_63cc7399f69561ad0f3b15ad6d1d8a11a434a4a41724330cc9b4e9150ac99f27->enter($__internal_63cc7399f69561ad0f3b15ad6d1d8a11a434a4a41724330cc9b4e9150ac99f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_63cc7399f69561ad0f3b15ad6d1d8a11a434a4a41724330cc9b4e9150ac99f27->leave($__internal_63cc7399f69561ad0f3b15ad6d1d8a11a434a4a41724330cc9b4e9150ac99f27_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_c85ad7822821b3941379893cad9244b25758ad598c2e162dac707db14d98b65f = $this->env->getExtension("native_profiler");
        $__internal_c85ad7822821b3941379893cad9244b25758ad598c2e162dac707db14d98b65f->enter($__internal_c85ad7822821b3941379893cad9244b25758ad598c2e162dac707db14d98b65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_c85ad7822821b3941379893cad9244b25758ad598c2e162dac707db14d98b65f->leave($__internal_c85ad7822821b3941379893cad9244b25758ad598c2e162dac707db14d98b65f_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_7c3947eefe3f609bbbe0380e0fec4dc0c5c48b386f684267cce82b94e3a8eff6 = $this->env->getExtension("native_profiler");
        $__internal_7c3947eefe3f609bbbe0380e0fec4dc0c5c48b386f684267cce82b94e3a8eff6->enter($__internal_7c3947eefe3f609bbbe0380e0fec4dc0c5c48b386f684267cce82b94e3a8eff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_7c3947eefe3f609bbbe0380e0fec4dc0c5c48b386f684267cce82b94e3a8eff6->leave($__internal_7c3947eefe3f609bbbe0380e0fec4dc0c5c48b386f684267cce82b94e3a8eff6_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_2d42ba04aac6ef527ca2b6826987484d999b54a10340004b2a85cf9013e47e3b = $this->env->getExtension("native_profiler");
        $__internal_2d42ba04aac6ef527ca2b6826987484d999b54a10340004b2a85cf9013e47e3b->enter($__internal_2d42ba04aac6ef527ca2b6826987484d999b54a10340004b2a85cf9013e47e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_2d42ba04aac6ef527ca2b6826987484d999b54a10340004b2a85cf9013e47e3b->leave($__internal_2d42ba04aac6ef527ca2b6826987484d999b54a10340004b2a85cf9013e47e3b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>
<td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
";
    }
}
