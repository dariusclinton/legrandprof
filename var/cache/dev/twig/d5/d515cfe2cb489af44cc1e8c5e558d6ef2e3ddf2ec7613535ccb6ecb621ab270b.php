<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_6e91f17e613b6604303d5e16f0c4cc17825bf770ab438b3b52e957125eb7bb3a extends Twig_Template
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
        $__internal_ec2733eb8a26d034442c3f7c438b8e52ad950175252acc93a491382a213155f2 = $this->env->getExtension("native_profiler");
        $__internal_ec2733eb8a26d034442c3f7c438b8e52ad950175252acc93a491382a213155f2->enter($__internal_ec2733eb8a26d034442c3f7c438b8e52ad950175252acc93a491382a213155f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec2733eb8a26d034442c3f7c438b8e52ad950175252acc93a491382a213155f2->leave($__internal_ec2733eb8a26d034442c3f7c438b8e52ad950175252acc93a491382a213155f2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e4d598ea0643ee2de2da51aeda56be0e00b38d91dfe2f30edccb79c3b44bc750 = $this->env->getExtension("native_profiler");
        $__internal_e4d598ea0643ee2de2da51aeda56be0e00b38d91dfe2f30edccb79c3b44bc750->enter($__internal_e4d598ea0643ee2de2da51aeda56be0e00b38d91dfe2f30edccb79c3b44bc750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_e4d598ea0643ee2de2da51aeda56be0e00b38d91dfe2f30edccb79c3b44bc750->leave($__internal_e4d598ea0643ee2de2da51aeda56be0e00b38d91dfe2f30edccb79c3b44bc750_prof);

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
