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
        $__internal_f56a87c088659150bf1998b290750b75d3ba61ed778c708613bbe11ca55c0c35 = $this->env->getExtension("native_profiler");
        $__internal_f56a87c088659150bf1998b290750b75d3ba61ed778c708613bbe11ca55c0c35->enter($__internal_f56a87c088659150bf1998b290750b75d3ba61ed778c708613bbe11ca55c0c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_f56a87c088659150bf1998b290750b75d3ba61ed778c708613bbe11ca55c0c35->leave($__internal_f56a87c088659150bf1998b290750b75d3ba61ed778c708613bbe11ca55c0c35_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_bb95857dbd5276bb082a39ed1c66f0d7c638a7963055ea9b0cf81d65191ef8ee = $this->env->getExtension("native_profiler");
        $__internal_bb95857dbd5276bb082a39ed1c66f0d7c638a7963055ea9b0cf81d65191ef8ee->enter($__internal_bb95857dbd5276bb082a39ed1c66f0d7c638a7963055ea9b0cf81d65191ef8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_bb95857dbd5276bb082a39ed1c66f0d7c638a7963055ea9b0cf81d65191ef8ee->leave($__internal_bb95857dbd5276bb082a39ed1c66f0d7c638a7963055ea9b0cf81d65191ef8ee_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_2ed87044311f32c3710c2229844203d91c92b312d501a2082c8819abc6256c86 = $this->env->getExtension("native_profiler");
        $__internal_2ed87044311f32c3710c2229844203d91c92b312d501a2082c8819abc6256c86->enter($__internal_2ed87044311f32c3710c2229844203d91c92b312d501a2082c8819abc6256c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_2ed87044311f32c3710c2229844203d91c92b312d501a2082c8819abc6256c86->leave($__internal_2ed87044311f32c3710c2229844203d91c92b312d501a2082c8819abc6256c86_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_21a68a8953d9bfb8b65ddf0c7d0d3c0128f370f6d3b32b9bc0145754dce9800f = $this->env->getExtension("native_profiler");
        $__internal_21a68a8953d9bfb8b65ddf0c7d0d3c0128f370f6d3b32b9bc0145754dce9800f->enter($__internal_21a68a8953d9bfb8b65ddf0c7d0d3c0128f370f6d3b32b9bc0145754dce9800f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_21a68a8953d9bfb8b65ddf0c7d0d3c0128f370f6d3b32b9bc0145754dce9800f->leave($__internal_21a68a8953d9bfb8b65ddf0c7d0d3c0128f370f6d3b32b9bc0145754dce9800f_prof);

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
