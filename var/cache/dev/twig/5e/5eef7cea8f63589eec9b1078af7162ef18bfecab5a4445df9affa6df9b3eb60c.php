<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_e70586d98d6658affc377d1bf29b044e86025336ec4c9cce4345b99d7066debe extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b9dcd69ce7fcaf8cf9d6c235c2361c8302be8e7676bfa9e43c87f69a1dba3d0 = $this->env->getExtension("native_profiler");
        $__internal_4b9dcd69ce7fcaf8cf9d6c235c2361c8302be8e7676bfa9e43c87f69a1dba3d0->enter($__internal_4b9dcd69ce7fcaf8cf9d6c235c2361c8302be8e7676bfa9e43c87f69a1dba3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b9dcd69ce7fcaf8cf9d6c235c2361c8302be8e7676bfa9e43c87f69a1dba3d0->leave($__internal_4b9dcd69ce7fcaf8cf9d6c235c2361c8302be8e7676bfa9e43c87f69a1dba3d0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_95be166a015255e71bdd889d085529a2b7e7e0762f72f7feb1b3631cafae8aba = $this->env->getExtension("native_profiler");
        $__internal_95be166a015255e71bdd889d085529a2b7e7e0762f72f7feb1b3631cafae8aba->enter($__internal_95be166a015255e71bdd889d085529a2b7e7e0762f72f7feb1b3631cafae8aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_95be166a015255e71bdd889d085529a2b7e7e0762f72f7feb1b3631cafae8aba->leave($__internal_95be166a015255e71bdd889d085529a2b7e7e0762f72f7feb1b3631cafae8aba_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}
