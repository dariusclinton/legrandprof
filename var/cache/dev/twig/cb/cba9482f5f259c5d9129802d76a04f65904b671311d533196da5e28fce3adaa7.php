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
        $__internal_d0ae713d799862582b6022e1bcf45c5c976f93cb6b3f7df0bd0f4601755daf74 = $this->env->getExtension("native_profiler");
        $__internal_d0ae713d799862582b6022e1bcf45c5c976f93cb6b3f7df0bd0f4601755daf74->enter($__internal_d0ae713d799862582b6022e1bcf45c5c976f93cb6b3f7df0bd0f4601755daf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_d0ae713d799862582b6022e1bcf45c5c976f93cb6b3f7df0bd0f4601755daf74->leave($__internal_d0ae713d799862582b6022e1bcf45c5c976f93cb6b3f7df0bd0f4601755daf74_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_6fb574bdf101b62bcf2ed37bf3158e90fe857cee87207cebfc4be3c8d4eccc52 = $this->env->getExtension("native_profiler");
        $__internal_6fb574bdf101b62bcf2ed37bf3158e90fe857cee87207cebfc4be3c8d4eccc52->enter($__internal_6fb574bdf101b62bcf2ed37bf3158e90fe857cee87207cebfc4be3c8d4eccc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_6fb574bdf101b62bcf2ed37bf3158e90fe857cee87207cebfc4be3c8d4eccc52->leave($__internal_6fb574bdf101b62bcf2ed37bf3158e90fe857cee87207cebfc4be3c8d4eccc52_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_1eb2c4e1463656d9faab380da82ee5d38ddb9b71f3ce189a4c7c65c9589ca32d = $this->env->getExtension("native_profiler");
        $__internal_1eb2c4e1463656d9faab380da82ee5d38ddb9b71f3ce189a4c7c65c9589ca32d->enter($__internal_1eb2c4e1463656d9faab380da82ee5d38ddb9b71f3ce189a4c7c65c9589ca32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_1eb2c4e1463656d9faab380da82ee5d38ddb9b71f3ce189a4c7c65c9589ca32d->leave($__internal_1eb2c4e1463656d9faab380da82ee5d38ddb9b71f3ce189a4c7c65c9589ca32d_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_0b1d6cc64ca5242826e00d0a4748014d40277c8bb5057794b10ea0ebeeb9fd5c = $this->env->getExtension("native_profiler");
        $__internal_0b1d6cc64ca5242826e00d0a4748014d40277c8bb5057794b10ea0ebeeb9fd5c->enter($__internal_0b1d6cc64ca5242826e00d0a4748014d40277c8bb5057794b10ea0ebeeb9fd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_0b1d6cc64ca5242826e00d0a4748014d40277c8bb5057794b10ea0ebeeb9fd5c->leave($__internal_0b1d6cc64ca5242826e00d0a4748014d40277c8bb5057794b10ea0ebeeb9fd5c_prof);

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
