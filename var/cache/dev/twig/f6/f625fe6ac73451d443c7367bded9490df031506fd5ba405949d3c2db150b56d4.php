<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_ab6c15dffc49d1430319cdf846cc82e8e2cf4c27c12c5a72ce6451ecc9ebfcdf extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19b8069bb8f03f2febd22779b511ef82164ff2d873b4b22943695be6fd29ca98 = $this->env->getExtension("native_profiler");
        $__internal_19b8069bb8f03f2febd22779b511ef82164ff2d873b4b22943695be6fd29ca98->enter($__internal_19b8069bb8f03f2febd22779b511ef82164ff2d873b4b22943695be6fd29ca98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19b8069bb8f03f2febd22779b511ef82164ff2d873b4b22943695be6fd29ca98->leave($__internal_19b8069bb8f03f2febd22779b511ef82164ff2d873b4b22943695be6fd29ca98_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5338cc7abe9707fdfc6c11179d4a78f28f728cd383684dac769689fc03a36938 = $this->env->getExtension("native_profiler");
        $__internal_5338cc7abe9707fdfc6c11179d4a78f28f728cd383684dac769689fc03a36938->enter($__internal_5338cc7abe9707fdfc6c11179d4a78f28f728cd383684dac769689fc03a36938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_5338cc7abe9707fdfc6c11179d4a78f28f728cd383684dac769689fc03a36938->leave($__internal_5338cc7abe9707fdfc6c11179d4a78f28f728cd383684dac769689fc03a36938_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}
