<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_630d2f4ea5b8f51d04b8fbc9c6313b2a89fa7cff89612d2edde27d6e624cc15e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ed1761be96f66c9e4f63d9522213b7a648145e76df4397ae07120b566fb2d94 = $this->env->getExtension("native_profiler");
        $__internal_0ed1761be96f66c9e4f63d9522213b7a648145e76df4397ae07120b566fb2d94->enter($__internal_0ed1761be96f66c9e4f63d9522213b7a648145e76df4397ae07120b566fb2d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ed1761be96f66c9e4f63d9522213b7a648145e76df4397ae07120b566fb2d94->leave($__internal_0ed1761be96f66c9e4f63d9522213b7a648145e76df4397ae07120b566fb2d94_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dcc2a385f38a9017a32d66665906e2883dadd5cd01d7042c025e6414d1e9a918 = $this->env->getExtension("native_profiler");
        $__internal_dcc2a385f38a9017a32d66665906e2883dadd5cd01d7042c025e6414d1e9a918->enter($__internal_dcc2a385f38a9017a32d66665906e2883dadd5cd01d7042c025e6414d1e9a918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_dcc2a385f38a9017a32d66665906e2883dadd5cd01d7042c025e6414d1e9a918->leave($__internal_dcc2a385f38a9017a32d66665906e2883dadd5cd01d7042c025e6414d1e9a918_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}
