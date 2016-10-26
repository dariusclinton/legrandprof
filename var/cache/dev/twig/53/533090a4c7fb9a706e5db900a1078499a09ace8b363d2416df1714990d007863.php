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
        $__internal_33a2a8cd838b4e639ec1562784102a3771501cbf96dacff10fdbaf29d2cf9d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a2a8cd838b4e639ec1562784102a3771501cbf96dacff10fdbaf29d2cf9d88->enter($__internal_33a2a8cd838b4e639ec1562784102a3771501cbf96dacff10fdbaf29d2cf9d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_33a2a8cd838b4e639ec1562784102a3771501cbf96dacff10fdbaf29d2cf9d88->leave($__internal_33a2a8cd838b4e639ec1562784102a3771501cbf96dacff10fdbaf29d2cf9d88_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_920bcaada8ea07ceee9f6728081e090e6fcaf33d6b0320927bbfbd652f3c17f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920bcaada8ea07ceee9f6728081e090e6fcaf33d6b0320927bbfbd652f3c17f3->enter($__internal_920bcaada8ea07ceee9f6728081e090e6fcaf33d6b0320927bbfbd652f3c17f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_920bcaada8ea07ceee9f6728081e090e6fcaf33d6b0320927bbfbd652f3c17f3->leave($__internal_920bcaada8ea07ceee9f6728081e090e6fcaf33d6b0320927bbfbd652f3c17f3_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_737acb102e22b1b3df9ec0a2b0c74191e6a8789d76b9485ecfbb37f3208f192d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737acb102e22b1b3df9ec0a2b0c74191e6a8789d76b9485ecfbb37f3208f192d->enter($__internal_737acb102e22b1b3df9ec0a2b0c74191e6a8789d76b9485ecfbb37f3208f192d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_737acb102e22b1b3df9ec0a2b0c74191e6a8789d76b9485ecfbb37f3208f192d->leave($__internal_737acb102e22b1b3df9ec0a2b0c74191e6a8789d76b9485ecfbb37f3208f192d_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_fa99105431bd97090d68f0281eed69e3a3b2bc589fa6df092ea0c450dd23814c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa99105431bd97090d68f0281eed69e3a3b2bc589fa6df092ea0c450dd23814c->enter($__internal_fa99105431bd97090d68f0281eed69e3a3b2bc589fa6df092ea0c450dd23814c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_fa99105431bd97090d68f0281eed69e3a3b2bc589fa6df092ea0c450dd23814c->leave($__internal_fa99105431bd97090d68f0281eed69e3a3b2bc589fa6df092ea0c450dd23814c_prof);

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
