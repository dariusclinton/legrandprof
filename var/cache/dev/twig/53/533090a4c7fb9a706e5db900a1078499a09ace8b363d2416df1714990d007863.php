<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_ca5d108cae3247804c8d435e69066ff003cfd7b593b065fee0b133bf516e7e73 extends Twig_Template
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
        $__internal_59a8c792e99bd97ed757d979fddd339e638799ac7934380f4bd0aa73540bac63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a8c792e99bd97ed757d979fddd339e638799ac7934380f4bd0aa73540bac63->enter($__internal_59a8c792e99bd97ed757d979fddd339e638799ac7934380f4bd0aa73540bac63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_59a8c792e99bd97ed757d979fddd339e638799ac7934380f4bd0aa73540bac63->leave($__internal_59a8c792e99bd97ed757d979fddd339e638799ac7934380f4bd0aa73540bac63_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_aa9049e959e6c48d7db3511a2809b3bff21412029bff287de69521f31b57f72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9049e959e6c48d7db3511a2809b3bff21412029bff287de69521f31b57f72b->enter($__internal_aa9049e959e6c48d7db3511a2809b3bff21412029bff287de69521f31b57f72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_aa9049e959e6c48d7db3511a2809b3bff21412029bff287de69521f31b57f72b->leave($__internal_aa9049e959e6c48d7db3511a2809b3bff21412029bff287de69521f31b57f72b_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_b67a1acfb52abfc75d56287695f98d1b7624ad6f8f5f314afb3885f3824f4115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67a1acfb52abfc75d56287695f98d1b7624ad6f8f5f314afb3885f3824f4115->enter($__internal_b67a1acfb52abfc75d56287695f98d1b7624ad6f8f5f314afb3885f3824f4115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_b67a1acfb52abfc75d56287695f98d1b7624ad6f8f5f314afb3885f3824f4115->leave($__internal_b67a1acfb52abfc75d56287695f98d1b7624ad6f8f5f314afb3885f3824f4115_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_3dd00db4983286c5a5e1e8f5f4823004e3b4a39fdefdd7b043a00193df7ed2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd00db4983286c5a5e1e8f5f4823004e3b4a39fdefdd7b043a00193df7ed2d5->enter($__internal_3dd00db4983286c5a5e1e8f5f4823004e3b4a39fdefdd7b043a00193df7ed2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_3dd00db4983286c5a5e1e8f5f4823004e3b4a39fdefdd7b043a00193df7ed2d5->leave($__internal_3dd00db4983286c5a5e1e8f5f4823004e3b4a39fdefdd7b043a00193df7ed2d5_prof);

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
