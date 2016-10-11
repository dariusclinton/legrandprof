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
        $__internal_832b398b7f48b7631a01c8bd5fb3488287414cd80276bc2a24c33e22ba9654c4 = $this->env->getExtension("native_profiler");
        $__internal_832b398b7f48b7631a01c8bd5fb3488287414cd80276bc2a24c33e22ba9654c4->enter($__internal_832b398b7f48b7631a01c8bd5fb3488287414cd80276bc2a24c33e22ba9654c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_832b398b7f48b7631a01c8bd5fb3488287414cd80276bc2a24c33e22ba9654c4->leave($__internal_832b398b7f48b7631a01c8bd5fb3488287414cd80276bc2a24c33e22ba9654c4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_562aeefce97be4410c6b371bbfa48f1d5546297f7f5b0f84848a138ea5bfee24 = $this->env->getExtension("native_profiler");
        $__internal_562aeefce97be4410c6b371bbfa48f1d5546297f7f5b0f84848a138ea5bfee24->enter($__internal_562aeefce97be4410c6b371bbfa48f1d5546297f7f5b0f84848a138ea5bfee24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_562aeefce97be4410c6b371bbfa48f1d5546297f7f5b0f84848a138ea5bfee24->leave($__internal_562aeefce97be4410c6b371bbfa48f1d5546297f7f5b0f84848a138ea5bfee24_prof);

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
