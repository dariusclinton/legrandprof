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
        $__internal_62e4407bfa912c2b3d43e27c72e4a9c8b6741c098c3c31bba3df94cca641c46b = $this->env->getExtension("native_profiler");
        $__internal_62e4407bfa912c2b3d43e27c72e4a9c8b6741c098c3c31bba3df94cca641c46b->enter($__internal_62e4407bfa912c2b3d43e27c72e4a9c8b6741c098c3c31bba3df94cca641c46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62e4407bfa912c2b3d43e27c72e4a9c8b6741c098c3c31bba3df94cca641c46b->leave($__internal_62e4407bfa912c2b3d43e27c72e4a9c8b6741c098c3c31bba3df94cca641c46b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_48c2379a9462140904a13bdd40c74568d92972ada686dd507bd398070aab3b9b = $this->env->getExtension("native_profiler");
        $__internal_48c2379a9462140904a13bdd40c74568d92972ada686dd507bd398070aab3b9b->enter($__internal_48c2379a9462140904a13bdd40c74568d92972ada686dd507bd398070aab3b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_48c2379a9462140904a13bdd40c74568d92972ada686dd507bd398070aab3b9b->leave($__internal_48c2379a9462140904a13bdd40c74568d92972ada686dd507bd398070aab3b9b_prof);

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
