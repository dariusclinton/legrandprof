<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_6851f87bb8023e8e6986416ce4b83207b783746e9904e8056affd92a05b17429 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2617e2fc6d33480b3a6cce59932272cf888cf35f7bb8d8f7468cb0fb096f80ef = $this->env->getExtension("native_profiler");
        $__internal_2617e2fc6d33480b3a6cce59932272cf888cf35f7bb8d8f7468cb0fb096f80ef->enter($__internal_2617e2fc6d33480b3a6cce59932272cf888cf35f7bb8d8f7468cb0fb096f80ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2617e2fc6d33480b3a6cce59932272cf888cf35f7bb8d8f7468cb0fb096f80ef->leave($__internal_2617e2fc6d33480b3a6cce59932272cf888cf35f7bb8d8f7468cb0fb096f80ef_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_856c25a358d1bb3c5cc4d6eefecf3416ae3dc7b05af28ae8a1d9efc81e876fbb = $this->env->getExtension("native_profiler");
        $__internal_856c25a358d1bb3c5cc4d6eefecf3416ae3dc7b05af28ae8a1d9efc81e876fbb->enter($__internal_856c25a358d1bb3c5cc4d6eefecf3416ae3dc7b05af28ae8a1d9efc81e876fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_856c25a358d1bb3c5cc4d6eefecf3416ae3dc7b05af28ae8a1d9efc81e876fbb->leave($__internal_856c25a358d1bb3c5cc4d6eefecf3416ae3dc7b05af28ae8a1d9efc81e876fbb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
