<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_e7baf136cd0446bd38488a41cd219a7c7e71ac2bf3e7c2e78bfa86ac5d9943c1 extends Twig_Template
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
        $__internal_42382c3ca6a3e4d2ac38dcb921bbc961629fedb83c7177b3a127c0c9290893ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42382c3ca6a3e4d2ac38dcb921bbc961629fedb83c7177b3a127c0c9290893ab->enter($__internal_42382c3ca6a3e4d2ac38dcb921bbc961629fedb83c7177b3a127c0c9290893ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42382c3ca6a3e4d2ac38dcb921bbc961629fedb83c7177b3a127c0c9290893ab->leave($__internal_42382c3ca6a3e4d2ac38dcb921bbc961629fedb83c7177b3a127c0c9290893ab_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e6ad3947619bb97a0d04c27b60e596524d1fd0b9e006c917f60018ebea155ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ad3947619bb97a0d04c27b60e596524d1fd0b9e006c917f60018ebea155ca1->enter($__internal_e6ad3947619bb97a0d04c27b60e596524d1fd0b9e006c917f60018ebea155ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_e6ad3947619bb97a0d04c27b60e596524d1fd0b9e006c917f60018ebea155ca1->leave($__internal_e6ad3947619bb97a0d04c27b60e596524d1fd0b9e006c917f60018ebea155ca1_prof);

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
