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
        $__internal_aea2223b25981959fa740d064abc3571ac98540cdcba23861f1ebf98ef7bf1c6 = $this->env->getExtension("native_profiler");
        $__internal_aea2223b25981959fa740d064abc3571ac98540cdcba23861f1ebf98ef7bf1c6->enter($__internal_aea2223b25981959fa740d064abc3571ac98540cdcba23861f1ebf98ef7bf1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aea2223b25981959fa740d064abc3571ac98540cdcba23861f1ebf98ef7bf1c6->leave($__internal_aea2223b25981959fa740d064abc3571ac98540cdcba23861f1ebf98ef7bf1c6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1c1edb278a27cca8c5f8068ef62be8d5bb615e4a389b819f800879c9076c3dfb = $this->env->getExtension("native_profiler");
        $__internal_1c1edb278a27cca8c5f8068ef62be8d5bb615e4a389b819f800879c9076c3dfb->enter($__internal_1c1edb278a27cca8c5f8068ef62be8d5bb615e4a389b819f800879c9076c3dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_1c1edb278a27cca8c5f8068ef62be8d5bb615e4a389b819f800879c9076c3dfb->leave($__internal_1c1edb278a27cca8c5f8068ef62be8d5bb615e4a389b819f800879c9076c3dfb_prof);

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
