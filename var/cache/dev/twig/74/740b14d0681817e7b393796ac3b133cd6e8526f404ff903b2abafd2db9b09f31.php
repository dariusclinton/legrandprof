<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_b6fa21a7f6e78868bf700cfc4ce011bab3ddd8b5f0b7e55778eb184928032b5d extends Twig_Template
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
        $__internal_03e71dec0f7c79e24e1dad6507aead75e479abb700281b2e1328a8a9466668c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e71dec0f7c79e24e1dad6507aead75e479abb700281b2e1328a8a9466668c4->enter($__internal_03e71dec0f7c79e24e1dad6507aead75e479abb700281b2e1328a8a9466668c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03e71dec0f7c79e24e1dad6507aead75e479abb700281b2e1328a8a9466668c4->leave($__internal_03e71dec0f7c79e24e1dad6507aead75e479abb700281b2e1328a8a9466668c4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5787ba624e5b9073511f5c968c05fd6da5cdb8cb5bebf603edfde6de47c357f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5787ba624e5b9073511f5c968c05fd6da5cdb8cb5bebf603edfde6de47c357f8->enter($__internal_5787ba624e5b9073511f5c968c05fd6da5cdb8cb5bebf603edfde6de47c357f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_5787ba624e5b9073511f5c968c05fd6da5cdb8cb5bebf603edfde6de47c357f8->leave($__internal_5787ba624e5b9073511f5c968c05fd6da5cdb8cb5bebf603edfde6de47c357f8_prof);

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
