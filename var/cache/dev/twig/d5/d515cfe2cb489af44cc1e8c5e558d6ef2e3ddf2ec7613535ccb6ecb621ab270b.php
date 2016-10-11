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
        $__internal_e3d5a64f791ba3711b101265735d31454d586dcef54658986ac8a39a9bf4ee9d = $this->env->getExtension("native_profiler");
        $__internal_e3d5a64f791ba3711b101265735d31454d586dcef54658986ac8a39a9bf4ee9d->enter($__internal_e3d5a64f791ba3711b101265735d31454d586dcef54658986ac8a39a9bf4ee9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3d5a64f791ba3711b101265735d31454d586dcef54658986ac8a39a9bf4ee9d->leave($__internal_e3d5a64f791ba3711b101265735d31454d586dcef54658986ac8a39a9bf4ee9d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8cd5de449504ed77f659f0e50a91157858e71da36b6b9466795a6081c5c4b8ef = $this->env->getExtension("native_profiler");
        $__internal_8cd5de449504ed77f659f0e50a91157858e71da36b6b9466795a6081c5c4b8ef->enter($__internal_8cd5de449504ed77f659f0e50a91157858e71da36b6b9466795a6081c5c4b8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_8cd5de449504ed77f659f0e50a91157858e71da36b6b9466795a6081c5c4b8ef->leave($__internal_8cd5de449504ed77f659f0e50a91157858e71da36b6b9466795a6081c5c4b8ef_prof);

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
