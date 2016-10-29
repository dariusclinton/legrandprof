<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_f0bcd327255393b66addfa6da19d791205055a9d042dfd9f809e32cbeef8db02 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db61d0071ea74d0c113c0da020b7d311c1d899035ebc7722ac9b9cf0126434d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db61d0071ea74d0c113c0da020b7d311c1d899035ebc7722ac9b9cf0126434d5->enter($__internal_db61d0071ea74d0c113c0da020b7d311c1d899035ebc7722ac9b9cf0126434d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db61d0071ea74d0c113c0da020b7d311c1d899035ebc7722ac9b9cf0126434d5->leave($__internal_db61d0071ea74d0c113c0da020b7d311c1d899035ebc7722ac9b9cf0126434d5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fefd19d2208ca919bd738f781dbbd41fe7eedd80283cd2a6dc35ea032f73dee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefd19d2208ca919bd738f781dbbd41fe7eedd80283cd2a6dc35ea032f73dee0->enter($__internal_fefd19d2208ca919bd738f781dbbd41fe7eedd80283cd2a6dc35ea032f73dee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_fefd19d2208ca919bd738f781dbbd41fe7eedd80283cd2a6dc35ea032f73dee0->leave($__internal_fefd19d2208ca919bd738f781dbbd41fe7eedd80283cd2a6dc35ea032f73dee0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}
