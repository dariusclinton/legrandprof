<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_f49c1f4f5337c93c4754ced99a2204a458a33e79436fb1988c30301084ecda51 extends Twig_Template
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
        $__internal_787bcd775d4f9f4728121803167f314d11706471b45b4f3f40d9589c67c95cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787bcd775d4f9f4728121803167f314d11706471b45b4f3f40d9589c67c95cd5->enter($__internal_787bcd775d4f9f4728121803167f314d11706471b45b4f3f40d9589c67c95cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_787bcd775d4f9f4728121803167f314d11706471b45b4f3f40d9589c67c95cd5->leave($__internal_787bcd775d4f9f4728121803167f314d11706471b45b4f3f40d9589c67c95cd5_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_c11c59aaad6a3e1719ced6a106a3d8697932d85ee336982c667954c1654e0bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11c59aaad6a3e1719ced6a106a3d8697932d85ee336982c667954c1654e0bc1->enter($__internal_c11c59aaad6a3e1719ced6a106a3d8697932d85ee336982c667954c1654e0bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_c11c59aaad6a3e1719ced6a106a3d8697932d85ee336982c667954c1654e0bc1->leave($__internal_c11c59aaad6a3e1719ced6a106a3d8697932d85ee336982c667954c1654e0bc1_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_09e2b66069e56a297f0f3042157ca1b93fc7dae1e778870ab1fbaeab88a3a861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e2b66069e56a297f0f3042157ca1b93fc7dae1e778870ab1fbaeab88a3a861->enter($__internal_09e2b66069e56a297f0f3042157ca1b93fc7dae1e778870ab1fbaeab88a3a861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

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
        
        $__internal_09e2b66069e56a297f0f3042157ca1b93fc7dae1e778870ab1fbaeab88a3a861->leave($__internal_09e2b66069e56a297f0f3042157ca1b93fc7dae1e778870ab1fbaeab88a3a861_prof);

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
