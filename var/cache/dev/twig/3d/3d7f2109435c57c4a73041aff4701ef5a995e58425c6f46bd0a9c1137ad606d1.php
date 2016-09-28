<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_6341a6ad9e806a932195fdae918cd603e6bb356b288ce92fc32af2ec6a762753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffd30593b59f92f08db56f4575a85fc1613ecb7621de2760d38dba2180c623d6 = $this->env->getExtension("native_profiler");
        $__internal_ffd30593b59f92f08db56f4575a85fc1613ecb7621de2760d38dba2180c623d6->enter($__internal_ffd30593b59f92f08db56f4575a85fc1613ecb7621de2760d38dba2180c623d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd30593b59f92f08db56f4575a85fc1613ecb7621de2760d38dba2180c623d6->leave($__internal_ffd30593b59f92f08db56f4575a85fc1613ecb7621de2760d38dba2180c623d6_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_163a35651db9f32875eb1f027ee7923b67c1bbc28aa03a2ab837a899809e27b3 = $this->env->getExtension("native_profiler");
        $__internal_163a35651db9f32875eb1f027ee7923b67c1bbc28aa03a2ab837a899809e27b3->enter($__internal_163a35651db9f32875eb1f027ee7923b67c1bbc28aa03a2ab837a899809e27b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_163a35651db9f32875eb1f027ee7923b67c1bbc28aa03a2ab837a899809e27b3->leave($__internal_163a35651db9f32875eb1f027ee7923b67c1bbc28aa03a2ab837a899809e27b3_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_78076861b9271153c71460dd5ba3ea92db0c3556e2d36c0815128f5a4ddc440a = $this->env->getExtension("native_profiler");
        $__internal_78076861b9271153c71460dd5ba3ea92db0c3556e2d36c0815128f5a4ddc440a->enter($__internal_78076861b9271153c71460dd5ba3ea92db0c3556e2d36c0815128f5a4ddc440a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_78076861b9271153c71460dd5ba3ea92db0c3556e2d36c0815128f5a4ddc440a->leave($__internal_78076861b9271153c71460dd5ba3ea92db0c3556e2d36c0815128f5a4ddc440a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  79 => 28,  75 => 26,  73 => 25,  67 => 23,  61 => 22,  53 => 19,  50 => 18,  44 => 16,  41 => 15,  35 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}

{% block num_results %}
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}
    {% endif %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_pages %}
    {{ admin.datagrid.pager.page }}
    /
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        ?
    {% else %}
        {{ admin.datagrid.pager.lastpage }}
    {% endif %}
    &nbsp;-&nbsp;
{% endblock %}
";
    }
}
