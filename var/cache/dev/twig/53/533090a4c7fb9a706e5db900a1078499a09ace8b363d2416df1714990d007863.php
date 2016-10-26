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
        $__internal_4afe3a04aed8b1d0b77824d1826ed41d52d45ded9df15b7c374410a44feaca58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4afe3a04aed8b1d0b77824d1826ed41d52d45ded9df15b7c374410a44feaca58->enter($__internal_4afe3a04aed8b1d0b77824d1826ed41d52d45ded9df15b7c374410a44feaca58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_4afe3a04aed8b1d0b77824d1826ed41d52d45ded9df15b7c374410a44feaca58->leave($__internal_4afe3a04aed8b1d0b77824d1826ed41d52d45ded9df15b7c374410a44feaca58_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_5836247f0e7951cac690567c92bcb00a7b32a5d25be11a6cfd2a70d57f74ac58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5836247f0e7951cac690567c92bcb00a7b32a5d25be11a6cfd2a70d57f74ac58->enter($__internal_5836247f0e7951cac690567c92bcb00a7b32a5d25be11a6cfd2a70d57f74ac58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_5836247f0e7951cac690567c92bcb00a7b32a5d25be11a6cfd2a70d57f74ac58->leave($__internal_5836247f0e7951cac690567c92bcb00a7b32a5d25be11a6cfd2a70d57f74ac58_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_bd3e44b97a8c6a3a651006778b37737253a6b75ca763cb6d399693b635b7f92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3e44b97a8c6a3a651006778b37737253a6b75ca763cb6d399693b635b7f92e->enter($__internal_bd3e44b97a8c6a3a651006778b37737253a6b75ca763cb6d399693b635b7f92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_bd3e44b97a8c6a3a651006778b37737253a6b75ca763cb6d399693b635b7f92e->leave($__internal_bd3e44b97a8c6a3a651006778b37737253a6b75ca763cb6d399693b635b7f92e_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_1de6499f5d264274be8fa35bbed9edac8ea189c3964e11c92fd3771f7709aacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de6499f5d264274be8fa35bbed9edac8ea189c3964e11c92fd3771f7709aacf->enter($__internal_1de6499f5d264274be8fa35bbed9edac8ea189c3964e11c92fd3771f7709aacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_1de6499f5d264274be8fa35bbed9edac8ea189c3964e11c92fd3771f7709aacf->leave($__internal_1de6499f5d264274be8fa35bbed9edac8ea189c3964e11c92fd3771f7709aacf_prof);

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
