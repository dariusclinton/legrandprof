<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_aafef0b68f6f6e4fa5752c43768233781f60f8b4e8948f2993619b892c962eb1 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb9fdfafca82adf9ca8f2b173617678be0b5c00c300ac8aca43c570bd3ef8886 = $this->env->getExtension("native_profiler");
        $__internal_cb9fdfafca82adf9ca8f2b173617678be0b5c00c300ac8aca43c570bd3ef8886->enter($__internal_cb9fdfafca82adf9ca8f2b173617678be0b5c00c300ac8aca43c570bd3ef8886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb9fdfafca82adf9ca8f2b173617678be0b5c00c300ac8aca43c570bd3ef8886->leave($__internal_cb9fdfafca82adf9ca8f2b173617678be0b5c00c300ac8aca43c570bd3ef8886_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_42a1c416dbd7978600d02c786df5ffd87442f94b1c792b9deef82332d43f1d59 = $this->env->getExtension("native_profiler");
        $__internal_42a1c416dbd7978600d02c786df5ffd87442f94b1c792b9deef82332d43f1d59->enter($__internal_42a1c416dbd7978600d02c786df5ffd87442f94b1c792b9deef82332d43f1d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_42a1c416dbd7978600d02c786df5ffd87442f94b1c792b9deef82332d43f1d59->leave($__internal_42a1c416dbd7978600d02c786df5ffd87442f94b1c792b9deef82332d43f1d59_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
";
    }
}
