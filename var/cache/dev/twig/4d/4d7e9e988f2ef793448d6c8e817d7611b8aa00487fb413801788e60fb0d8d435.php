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
        $__internal_1379e2fcba57d7e5f423aa88c463eba1964506627633eb49fb699aa367aa2458 = $this->env->getExtension("native_profiler");
        $__internal_1379e2fcba57d7e5f423aa88c463eba1964506627633eb49fb699aa367aa2458->enter($__internal_1379e2fcba57d7e5f423aa88c463eba1964506627633eb49fb699aa367aa2458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1379e2fcba57d7e5f423aa88c463eba1964506627633eb49fb699aa367aa2458->leave($__internal_1379e2fcba57d7e5f423aa88c463eba1964506627633eb49fb699aa367aa2458_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b7718fdf8f201a8d2da30dc6d39ac055e72e5065a495a3585fb7126f06c276e4 = $this->env->getExtension("native_profiler");
        $__internal_b7718fdf8f201a8d2da30dc6d39ac055e72e5065a495a3585fb7126f06c276e4->enter($__internal_b7718fdf8f201a8d2da30dc6d39ac055e72e5065a495a3585fb7126f06c276e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b7718fdf8f201a8d2da30dc6d39ac055e72e5065a495a3585fb7126f06c276e4->leave($__internal_b7718fdf8f201a8d2da30dc6d39ac055e72e5065a495a3585fb7126f06c276e4_prof);

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
