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
        $__internal_7c27b9195528bffe5997ad3fc5a805c1a5eb5174745b830b7d1275099622d937 = $this->env->getExtension("native_profiler");
        $__internal_7c27b9195528bffe5997ad3fc5a805c1a5eb5174745b830b7d1275099622d937->enter($__internal_7c27b9195528bffe5997ad3fc5a805c1a5eb5174745b830b7d1275099622d937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c27b9195528bffe5997ad3fc5a805c1a5eb5174745b830b7d1275099622d937->leave($__internal_7c27b9195528bffe5997ad3fc5a805c1a5eb5174745b830b7d1275099622d937_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dd3085c9b46b748fa790c98b206b7194dfb95b2af85c19c8c96086d3e598f857 = $this->env->getExtension("native_profiler");
        $__internal_dd3085c9b46b748fa790c98b206b7194dfb95b2af85c19c8c96086d3e598f857->enter($__internal_dd3085c9b46b748fa790c98b206b7194dfb95b2af85c19c8c96086d3e598f857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_dd3085c9b46b748fa790c98b206b7194dfb95b2af85c19c8c96086d3e598f857->leave($__internal_dd3085c9b46b748fa790c98b206b7194dfb95b2af85c19c8c96086d3e598f857_prof);

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
