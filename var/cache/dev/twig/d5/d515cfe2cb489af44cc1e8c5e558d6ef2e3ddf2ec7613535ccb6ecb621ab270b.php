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
        $__internal_07dc29e773790d8b47a12c8204354f23f5e151bd3a3a5ee08d0b919902d5c622 = $this->env->getExtension("native_profiler");
        $__internal_07dc29e773790d8b47a12c8204354f23f5e151bd3a3a5ee08d0b919902d5c622->enter($__internal_07dc29e773790d8b47a12c8204354f23f5e151bd3a3a5ee08d0b919902d5c622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07dc29e773790d8b47a12c8204354f23f5e151bd3a3a5ee08d0b919902d5c622->leave($__internal_07dc29e773790d8b47a12c8204354f23f5e151bd3a3a5ee08d0b919902d5c622_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f82b786350921fa8e39c2cc9ccc0fc8e3e8532754a19ad8cd74c1ab679c23107 = $this->env->getExtension("native_profiler");
        $__internal_f82b786350921fa8e39c2cc9ccc0fc8e3e8532754a19ad8cd74c1ab679c23107->enter($__internal_f82b786350921fa8e39c2cc9ccc0fc8e3e8532754a19ad8cd74c1ab679c23107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f82b786350921fa8e39c2cc9ccc0fc8e3e8532754a19ad8cd74c1ab679c23107->leave($__internal_f82b786350921fa8e39c2cc9ccc0fc8e3e8532754a19ad8cd74c1ab679c23107_prof);

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
