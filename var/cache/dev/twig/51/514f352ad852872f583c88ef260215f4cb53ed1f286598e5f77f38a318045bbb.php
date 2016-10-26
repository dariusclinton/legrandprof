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
        $__internal_b31badb7f8ec2932b703b5ee3b266549a83a788456a2ce90282272682418eee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31badb7f8ec2932b703b5ee3b266549a83a788456a2ce90282272682418eee6->enter($__internal_b31badb7f8ec2932b703b5ee3b266549a83a788456a2ce90282272682418eee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b31badb7f8ec2932b703b5ee3b266549a83a788456a2ce90282272682418eee6->leave($__internal_b31badb7f8ec2932b703b5ee3b266549a83a788456a2ce90282272682418eee6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_20bc02e5a404c79e4f02b4efb5d9c9429985737e2033b70e3402dd25d44387b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bc02e5a404c79e4f02b4efb5d9c9429985737e2033b70e3402dd25d44387b6->enter($__internal_20bc02e5a404c79e4f02b4efb5d9c9429985737e2033b70e3402dd25d44387b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_20bc02e5a404c79e4f02b4efb5d9c9429985737e2033b70e3402dd25d44387b6->leave($__internal_20bc02e5a404c79e4f02b4efb5d9c9429985737e2033b70e3402dd25d44387b6_prof);

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
