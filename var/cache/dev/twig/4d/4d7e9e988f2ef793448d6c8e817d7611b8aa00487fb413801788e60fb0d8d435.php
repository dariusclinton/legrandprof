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
        $__internal_c4b815d3f6e95eee57ea9aad427aec6551534bd5269adca51811cab8dbd12734 = $this->env->getExtension("native_profiler");
        $__internal_c4b815d3f6e95eee57ea9aad427aec6551534bd5269adca51811cab8dbd12734->enter($__internal_c4b815d3f6e95eee57ea9aad427aec6551534bd5269adca51811cab8dbd12734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4b815d3f6e95eee57ea9aad427aec6551534bd5269adca51811cab8dbd12734->leave($__internal_c4b815d3f6e95eee57ea9aad427aec6551534bd5269adca51811cab8dbd12734_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_760c4acb97cea4011b80b60c4a5159442b110ba928e24482285d79125e412fdc = $this->env->getExtension("native_profiler");
        $__internal_760c4acb97cea4011b80b60c4a5159442b110ba928e24482285d79125e412fdc->enter($__internal_760c4acb97cea4011b80b60c4a5159442b110ba928e24482285d79125e412fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_760c4acb97cea4011b80b60c4a5159442b110ba928e24482285d79125e412fdc->leave($__internal_760c4acb97cea4011b80b60c4a5159442b110ba928e24482285d79125e412fdc_prof);

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
