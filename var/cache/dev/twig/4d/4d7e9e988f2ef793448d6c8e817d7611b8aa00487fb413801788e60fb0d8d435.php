<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_11534c0f4c9a474060177c0b04f697b3374f7a96fe1253c63fbde9bd5e342980 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_535e0e8da956d51d1ced7207a2058b48591b13d055e72c6beafed762f1d772b7 = $this->env->getExtension("native_profiler");
        $__internal_535e0e8da956d51d1ced7207a2058b48591b13d055e72c6beafed762f1d772b7->enter($__internal_535e0e8da956d51d1ced7207a2058b48591b13d055e72c6beafed762f1d772b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_535e0e8da956d51d1ced7207a2058b48591b13d055e72c6beafed762f1d772b7->leave($__internal_535e0e8da956d51d1ced7207a2058b48591b13d055e72c6beafed762f1d772b7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_30ab90c72ee3c18fd720ca8bfd571363dae6fae0732c98b9c1c961d74efcd3e6 = $this->env->getExtension("native_profiler");
        $__internal_30ab90c72ee3c18fd720ca8bfd571363dae6fae0732c98b9c1c961d74efcd3e6->enter($__internal_30ab90c72ee3c18fd720ca8bfd571363dae6fae0732c98b9c1c961d74efcd3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_30ab90c72ee3c18fd720ca8bfd571363dae6fae0732c98b9c1c961d74efcd3e6->leave($__internal_30ab90c72ee3c18fd720ca8bfd571363dae6fae0732c98b9c1c961d74efcd3e6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
