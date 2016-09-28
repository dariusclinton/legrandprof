<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_a5772d8cfc78a7097f1c6221601ac658706d60da850cf9ef321ddc759d3d5e28 extends Twig_Template
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
        $__internal_4510acedf33cdec58c3f57d647ed188c585fcec79be2227798a8e076794d0163 = $this->env->getExtension("native_profiler");
        $__internal_4510acedf33cdec58c3f57d647ed188c585fcec79be2227798a8e076794d0163->enter($__internal_4510acedf33cdec58c3f57d647ed188c585fcec79be2227798a8e076794d0163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4510acedf33cdec58c3f57d647ed188c585fcec79be2227798a8e076794d0163->leave($__internal_4510acedf33cdec58c3f57d647ed188c585fcec79be2227798a8e076794d0163_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c40b266b0bd500e5de5728af7bfc735d199923b59a3b4625c3e622ce4717d37d = $this->env->getExtension("native_profiler");
        $__internal_c40b266b0bd500e5de5728af7bfc735d199923b59a3b4625c3e622ce4717d37d->enter($__internal_c40b266b0bd500e5de5728af7bfc735d199923b59a3b4625c3e622ce4717d37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c40b266b0bd500e5de5728af7bfc735d199923b59a3b4625c3e622ce4717d37d->leave($__internal_c40b266b0bd500e5de5728af7bfc735d199923b59a3b4625c3e622ce4717d37d_prof);

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
