<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_ea9233481bcc689b5829e47e0a5842291b015311709ce399f86c807049ea1046 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb8788745c1a9bebfc53da9267d5e4b359307bc68725ec833c7972227baebd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8788745c1a9bebfc53da9267d5e4b359307bc68725ec833c7972227baebd3a->enter($__internal_fb8788745c1a9bebfc53da9267d5e4b359307bc68725ec833c7972227baebd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb8788745c1a9bebfc53da9267d5e4b359307bc68725ec833c7972227baebd3a->leave($__internal_fb8788745c1a9bebfc53da9267d5e4b359307bc68725ec833c7972227baebd3a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9648ff2e46efa88a8c3875e956f976974c8b21e3655ff566ecd67068cc9ab5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9648ff2e46efa88a8c3875e956f976974c8b21e3655ff566ecd67068cc9ab5f5->enter($__internal_9648ff2e46efa88a8c3875e956f976974c8b21e3655ff566ecd67068cc9ab5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9648ff2e46efa88a8c3875e956f976974c8b21e3655ff566ecd67068cc9ab5f5->leave($__internal_9648ff2e46efa88a8c3875e956f976974c8b21e3655ff566ecd67068cc9ab5f5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
