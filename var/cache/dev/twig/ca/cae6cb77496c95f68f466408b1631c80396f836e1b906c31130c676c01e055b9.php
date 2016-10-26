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
        $__internal_8ec1c6ad86bbd91425a7bd7d842d83be5f050cd471c32aefe605edbf20e8342e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec1c6ad86bbd91425a7bd7d842d83be5f050cd471c32aefe605edbf20e8342e->enter($__internal_8ec1c6ad86bbd91425a7bd7d842d83be5f050cd471c32aefe605edbf20e8342e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ec1c6ad86bbd91425a7bd7d842d83be5f050cd471c32aefe605edbf20e8342e->leave($__internal_8ec1c6ad86bbd91425a7bd7d842d83be5f050cd471c32aefe605edbf20e8342e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9664ea4157b5397280c7582a5333611afeb432c7b44304ab8fc06cc1da3d653f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9664ea4157b5397280c7582a5333611afeb432c7b44304ab8fc06cc1da3d653f->enter($__internal_9664ea4157b5397280c7582a5333611afeb432c7b44304ab8fc06cc1da3d653f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_9664ea4157b5397280c7582a5333611afeb432c7b44304ab8fc06cc1da3d653f->leave($__internal_9664ea4157b5397280c7582a5333611afeb432c7b44304ab8fc06cc1da3d653f_prof);

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
