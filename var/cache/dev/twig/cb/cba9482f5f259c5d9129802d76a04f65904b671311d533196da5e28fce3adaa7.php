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
        $__internal_a837ef2d07d6ecb89912c61a91ec202a505d8d76130a35f99343aa516118a369 = $this->env->getExtension("native_profiler");
        $__internal_a837ef2d07d6ecb89912c61a91ec202a505d8d76130a35f99343aa516118a369->enter($__internal_a837ef2d07d6ecb89912c61a91ec202a505d8d76130a35f99343aa516118a369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_a837ef2d07d6ecb89912c61a91ec202a505d8d76130a35f99343aa516118a369->leave($__internal_a837ef2d07d6ecb89912c61a91ec202a505d8d76130a35f99343aa516118a369_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_7d2842190f9992baab9a06f966971a0593c5427fcbf055c95833ab57a857cddc = $this->env->getExtension("native_profiler");
        $__internal_7d2842190f9992baab9a06f966971a0593c5427fcbf055c95833ab57a857cddc->enter($__internal_7d2842190f9992baab9a06f966971a0593c5427fcbf055c95833ab57a857cddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_7d2842190f9992baab9a06f966971a0593c5427fcbf055c95833ab57a857cddc->leave($__internal_7d2842190f9992baab9a06f966971a0593c5427fcbf055c95833ab57a857cddc_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_c67714c9b0c0a7440a811da35e00541bcc514af69cc0c0b189e293aac84a7065 = $this->env->getExtension("native_profiler");
        $__internal_c67714c9b0c0a7440a811da35e00541bcc514af69cc0c0b189e293aac84a7065->enter($__internal_c67714c9b0c0a7440a811da35e00541bcc514af69cc0c0b189e293aac84a7065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_c67714c9b0c0a7440a811da35e00541bcc514af69cc0c0b189e293aac84a7065->leave($__internal_c67714c9b0c0a7440a811da35e00541bcc514af69cc0c0b189e293aac84a7065_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_1e46d12558e7243b3c62ae18b839f92adda57678f4bf06a5352e9aa107017a87 = $this->env->getExtension("native_profiler");
        $__internal_1e46d12558e7243b3c62ae18b839f92adda57678f4bf06a5352e9aa107017a87->enter($__internal_1e46d12558e7243b3c62ae18b839f92adda57678f4bf06a5352e9aa107017a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_1e46d12558e7243b3c62ae18b839f92adda57678f4bf06a5352e9aa107017a87->leave($__internal_1e46d12558e7243b3c62ae18b839f92adda57678f4bf06a5352e9aa107017a87_prof);

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
