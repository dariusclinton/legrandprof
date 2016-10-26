<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_cd1967798baeab042c987154fc561ecf6413d90064de7df0d30d64c233800c53 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edceeba4bb501f7068db535f6f095c31a39470b910534815f540e2dbc5d4e3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edceeba4bb501f7068db535f6f095c31a39470b910534815f540e2dbc5d4e3d6->enter($__internal_edceeba4bb501f7068db535f6f095c31a39470b910534815f540e2dbc5d4e3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edceeba4bb501f7068db535f6f095c31a39470b910534815f540e2dbc5d4e3d6->leave($__internal_edceeba4bb501f7068db535f6f095c31a39470b910534815f540e2dbc5d4e3d6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4313ec987731403196523df163aa2fd77d8cba9f414744e1db318e0a787d0c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4313ec987731403196523df163aa2fd77d8cba9f414744e1db318e0a787d0c0e->enter($__internal_4313ec987731403196523df163aa2fd77d8cba9f414744e1db318e0a787d0c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_4313ec987731403196523df163aa2fd77d8cba9f414744e1db318e0a787d0c0e->leave($__internal_4313ec987731403196523df163aa2fd77d8cba9f414744e1db318e0a787d0c0e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
";
    }
}
