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
        $__internal_985bd6cb5f05e9547eabeea02bf1b487e46fa5dc26ca526ad0728869a085c044 = $this->env->getExtension("native_profiler");
        $__internal_985bd6cb5f05e9547eabeea02bf1b487e46fa5dc26ca526ad0728869a085c044->enter($__internal_985bd6cb5f05e9547eabeea02bf1b487e46fa5dc26ca526ad0728869a085c044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_985bd6cb5f05e9547eabeea02bf1b487e46fa5dc26ca526ad0728869a085c044->leave($__internal_985bd6cb5f05e9547eabeea02bf1b487e46fa5dc26ca526ad0728869a085c044_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8b419e973ba8e93ab907c6f6aee049584fbae634852915ca49d5a4c4ce7dfa2d = $this->env->getExtension("native_profiler");
        $__internal_8b419e973ba8e93ab907c6f6aee049584fbae634852915ca49d5a4c4ce7dfa2d->enter($__internal_8b419e973ba8e93ab907c6f6aee049584fbae634852915ca49d5a4c4ce7dfa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_8b419e973ba8e93ab907c6f6aee049584fbae634852915ca49d5a4c4ce7dfa2d->leave($__internal_8b419e973ba8e93ab907c6f6aee049584fbae634852915ca49d5a4c4ce7dfa2d_prof);

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
