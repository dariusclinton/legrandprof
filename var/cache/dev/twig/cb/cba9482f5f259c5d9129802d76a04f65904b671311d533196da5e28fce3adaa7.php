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
        $__internal_0f3ee4d03d5e4a9103f2022403d04c7a9088fd6060d6176371bb429c54e7fa44 = $this->env->getExtension("native_profiler");
        $__internal_0f3ee4d03d5e4a9103f2022403d04c7a9088fd6060d6176371bb429c54e7fa44->enter($__internal_0f3ee4d03d5e4a9103f2022403d04c7a9088fd6060d6176371bb429c54e7fa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_0f3ee4d03d5e4a9103f2022403d04c7a9088fd6060d6176371bb429c54e7fa44->leave($__internal_0f3ee4d03d5e4a9103f2022403d04c7a9088fd6060d6176371bb429c54e7fa44_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_b65ddf6789565b06d0f24a1ba97af53f12d224cfa8aba574df32b9e4cc6f0820 = $this->env->getExtension("native_profiler");
        $__internal_b65ddf6789565b06d0f24a1ba97af53f12d224cfa8aba574df32b9e4cc6f0820->enter($__internal_b65ddf6789565b06d0f24a1ba97af53f12d224cfa8aba574df32b9e4cc6f0820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_b65ddf6789565b06d0f24a1ba97af53f12d224cfa8aba574df32b9e4cc6f0820->leave($__internal_b65ddf6789565b06d0f24a1ba97af53f12d224cfa8aba574df32b9e4cc6f0820_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_270fd08677bad4db25921ef9cb88a02905920aa808106ce8186cff7b64ac508c = $this->env->getExtension("native_profiler");
        $__internal_270fd08677bad4db25921ef9cb88a02905920aa808106ce8186cff7b64ac508c->enter($__internal_270fd08677bad4db25921ef9cb88a02905920aa808106ce8186cff7b64ac508c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_270fd08677bad4db25921ef9cb88a02905920aa808106ce8186cff7b64ac508c->leave($__internal_270fd08677bad4db25921ef9cb88a02905920aa808106ce8186cff7b64ac508c_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_5635bfcc4502009a5037395063f11a9bcca9767933ff554906231fe687bd279b = $this->env->getExtension("native_profiler");
        $__internal_5635bfcc4502009a5037395063f11a9bcca9767933ff554906231fe687bd279b->enter($__internal_5635bfcc4502009a5037395063f11a9bcca9767933ff554906231fe687bd279b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_5635bfcc4502009a5037395063f11a9bcca9767933ff554906231fe687bd279b->leave($__internal_5635bfcc4502009a5037395063f11a9bcca9767933ff554906231fe687bd279b_prof);

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
