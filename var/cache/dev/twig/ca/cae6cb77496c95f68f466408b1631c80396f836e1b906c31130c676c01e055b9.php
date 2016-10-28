<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_cd1967798baeab042c987154fc561ecf6413d90064de7df0d30d64c233800c53 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_021552b49130ef7731f023c57c5d1312a9f960931c8026b06b7f5eba7df4f563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021552b49130ef7731f023c57c5d1312a9f960931c8026b06b7f5eba7df4f563->enter($__internal_021552b49130ef7731f023c57c5d1312a9f960931c8026b06b7f5eba7df4f563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_021552b49130ef7731f023c57c5d1312a9f960931c8026b06b7f5eba7df4f563->leave($__internal_021552b49130ef7731f023c57c5d1312a9f960931c8026b06b7f5eba7df4f563_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4a3902d1d85ac3d9814073a74dd9c84f0d56d3729a6d6fd1594b819e3ce10e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3902d1d85ac3d9814073a74dd9c84f0d56d3729a6d6fd1594b819e3ce10e7d->enter($__internal_4a3902d1d85ac3d9814073a74dd9c84f0d56d3729a6d6fd1594b819e3ce10e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_4a3902d1d85ac3d9814073a74dd9c84f0d56d3729a6d6fd1594b819e3ce10e7d->leave($__internal_4a3902d1d85ac3d9814073a74dd9c84f0d56d3729a6d6fd1594b819e3ce10e7d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
";
    }
}
