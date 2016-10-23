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
        $__internal_7b509105e6638185ae77feca9c72fa4aaa85618eb84f7592255d4738cee42a51 = $this->env->getExtension("native_profiler");
        $__internal_7b509105e6638185ae77feca9c72fa4aaa85618eb84f7592255d4738cee42a51->enter($__internal_7b509105e6638185ae77feca9c72fa4aaa85618eb84f7592255d4738cee42a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b509105e6638185ae77feca9c72fa4aaa85618eb84f7592255d4738cee42a51->leave($__internal_7b509105e6638185ae77feca9c72fa4aaa85618eb84f7592255d4738cee42a51_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fff628b8bd1a095d52c18d30dd13309f0e7a0be5a2b38ae2ac6077be152a8a9d = $this->env->getExtension("native_profiler");
        $__internal_fff628b8bd1a095d52c18d30dd13309f0e7a0be5a2b38ae2ac6077be152a8a9d->enter($__internal_fff628b8bd1a095d52c18d30dd13309f0e7a0be5a2b38ae2ac6077be152a8a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_fff628b8bd1a095d52c18d30dd13309f0e7a0be5a2b38ae2ac6077be152a8a9d->leave($__internal_fff628b8bd1a095d52c18d30dd13309f0e7a0be5a2b38ae2ac6077be152a8a9d_prof);

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
