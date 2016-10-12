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
        $__internal_e26c82212e4c20495714f89a0798c7a945385c08b7ad26273e4c16ca29e31118 = $this->env->getExtension("native_profiler");
        $__internal_e26c82212e4c20495714f89a0798c7a945385c08b7ad26273e4c16ca29e31118->enter($__internal_e26c82212e4c20495714f89a0798c7a945385c08b7ad26273e4c16ca29e31118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_e26c82212e4c20495714f89a0798c7a945385c08b7ad26273e4c16ca29e31118->leave($__internal_e26c82212e4c20495714f89a0798c7a945385c08b7ad26273e4c16ca29e31118_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_67e77fa6f3e1c379f27473ac189d35b24272ccacddb49f29011ecebfa33a2f38 = $this->env->getExtension("native_profiler");
        $__internal_67e77fa6f3e1c379f27473ac189d35b24272ccacddb49f29011ecebfa33a2f38->enter($__internal_67e77fa6f3e1c379f27473ac189d35b24272ccacddb49f29011ecebfa33a2f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_67e77fa6f3e1c379f27473ac189d35b24272ccacddb49f29011ecebfa33a2f38->leave($__internal_67e77fa6f3e1c379f27473ac189d35b24272ccacddb49f29011ecebfa33a2f38_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_47f181a8ed3196f10ddce96a4ac148265d755548b601aecd2720a996dc788937 = $this->env->getExtension("native_profiler");
        $__internal_47f181a8ed3196f10ddce96a4ac148265d755548b601aecd2720a996dc788937->enter($__internal_47f181a8ed3196f10ddce96a4ac148265d755548b601aecd2720a996dc788937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_47f181a8ed3196f10ddce96a4ac148265d755548b601aecd2720a996dc788937->leave($__internal_47f181a8ed3196f10ddce96a4ac148265d755548b601aecd2720a996dc788937_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_bd150671cb6b08f5e833fb997ea0ef92c9faec121c236b0bf7b19cb98c9b2544 = $this->env->getExtension("native_profiler");
        $__internal_bd150671cb6b08f5e833fb997ea0ef92c9faec121c236b0bf7b19cb98c9b2544->enter($__internal_bd150671cb6b08f5e833fb997ea0ef92c9faec121c236b0bf7b19cb98c9b2544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_bd150671cb6b08f5e833fb997ea0ef92c9faec121c236b0bf7b19cb98c9b2544->leave($__internal_bd150671cb6b08f5e833fb997ea0ef92c9faec121c236b0bf7b19cb98c9b2544_prof);

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
