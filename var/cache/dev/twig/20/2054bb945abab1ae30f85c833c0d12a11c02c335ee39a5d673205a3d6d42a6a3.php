<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_2829e87e3c92df3a2ebac54a4e05535f6aaf6afa64f799eeb7c82278961848cd extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79b7ebc6d0f3a2a2b99ea8e4c0c31b731494ffec1afc2e37bdcd9eed659411cc = $this->env->getExtension("native_profiler");
        $__internal_79b7ebc6d0f3a2a2b99ea8e4c0c31b731494ffec1afc2e37bdcd9eed659411cc->enter($__internal_79b7ebc6d0f3a2a2b99ea8e4c0c31b731494ffec1afc2e37bdcd9eed659411cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79b7ebc6d0f3a2a2b99ea8e4c0c31b731494ffec1afc2e37bdcd9eed659411cc->leave($__internal_79b7ebc6d0f3a2a2b99ea8e4c0c31b731494ffec1afc2e37bdcd9eed659411cc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2a193dbafc8f7527d1ff0af681e0ace7b8a95c4ab9edbd1381ee5397a8653d14 = $this->env->getExtension("native_profiler");
        $__internal_2a193dbafc8f7527d1ff0af681e0ace7b8a95c4ab9edbd1381ee5397a8653d14->enter($__internal_2a193dbafc8f7527d1ff0af681e0ace7b8a95c4ab9edbd1381ee5397a8653d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_2a193dbafc8f7527d1ff0af681e0ace7b8a95c4ab9edbd1381ee5397a8653d14->leave($__internal_2a193dbafc8f7527d1ff0af681e0ace7b8a95c4ab9edbd1381ee5397a8653d14_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
    <a class=\"btn btn-default\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
        <i class=\"fa fa-arrow-right\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
";
    }
}
