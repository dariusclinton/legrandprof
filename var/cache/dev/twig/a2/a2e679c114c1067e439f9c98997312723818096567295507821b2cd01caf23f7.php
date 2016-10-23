<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_10c49c5331ed7b8833634eb5f3bf8b3012bcc67e39463e1373b38bf62917cd5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b703967673db90313419484ad481cb74003f07446ecf626c19696ba58e3b3f30 = $this->env->getExtension("native_profiler");
        $__internal_b703967673db90313419484ad481cb74003f07446ecf626c19696ba58e3b3f30->enter($__internal_b703967673db90313419484ad481cb74003f07446ecf626c19696ba58e3b3f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b703967673db90313419484ad481cb74003f07446ecf626c19696ba58e3b3f30->leave($__internal_b703967673db90313419484ad481cb74003f07446ecf626c19696ba58e3b3f30_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_b4954eec1bf17e3fabbb025bdd7b31ecdbe4af92e1e907bb100d0ef0a7166fba = $this->env->getExtension("native_profiler");
        $__internal_b4954eec1bf17e3fabbb025bdd7b31ecdbe4af92e1e907bb100d0ef0a7166fba->enter($__internal_b4954eec1bf17e3fabbb025bdd7b31ecdbe4af92e1e907bb100d0ef0a7166fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_b4954eec1bf17e3fabbb025bdd7b31ecdbe4af92e1e907bb100d0ef0a7166fba->leave($__internal_b4954eec1bf17e3fabbb025bdd7b31ecdbe4af92e1e907bb100d0ef0a7166fba_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_4b9dcc61967c65ca3ad38a4e1c1d42cc8252e63adbed0217a344c01a71f93e4d = $this->env->getExtension("native_profiler");
        $__internal_4b9dcc61967c65ca3ad38a4e1c1d42cc8252e63adbed0217a344c01a71f93e4d->enter($__internal_4b9dcc61967c65ca3ad38a4e1c1d42cc8252e63adbed0217a344c01a71f93e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_4b9dcc61967c65ca3ad38a4e1c1d42cc8252e63adbed0217a344c01a71f93e4d->leave($__internal_4b9dcc61967c65ca3ad38a4e1c1d42cc8252e63adbed0217a344c01a71f93e4d_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_a528a8fce09cde7d6aafb38d2aed13152f81101f32dfb727833396669a7128ed = $this->env->getExtension("native_profiler");
        $__internal_a528a8fce09cde7d6aafb38d2aed13152f81101f32dfb727833396669a7128ed->enter($__internal_a528a8fce09cde7d6aafb38d2aed13152f81101f32dfb727833396669a7128ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_a528a8fce09cde7d6aafb38d2aed13152f81101f32dfb727833396669a7128ed->leave($__internal_a528a8fce09cde7d6aafb38d2aed13152f81101f32dfb727833396669a7128ed_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_9b256f3c57408011bf974f2c2a3cb1c614f556d7326bb684328d4c3c5cadb271 = $this->env->getExtension("native_profiler");
        $__internal_9b256f3c57408011bf974f2c2a3cb1c614f556d7326bb684328d4c3c5cadb271->enter($__internal_9b256f3c57408011bf974f2c2a3cb1c614f556d7326bb684328d4c3c5cadb271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_9b256f3c57408011bf974f2c2a3cb1c614f556d7326bb684328d4c3c5cadb271->leave($__internal_9b256f3c57408011bf974f2c2a3cb1c614f556d7326bb684328d4c3c5cadb271_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a6b725aba2779890318a90a616d60a62d6dd8140d04344c3345ea66609981d0d = $this->env->getExtension("native_profiler");
        $__internal_a6b725aba2779890318a90a616d60a62d6dd8140d04344c3345ea66609981d0d->enter($__internal_a6b725aba2779890318a90a616d60a62d6dd8140d04344c3345ea66609981d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_a6b725aba2779890318a90a616d60a62d6dd8140d04344c3345ea66609981d0d->leave($__internal_a6b725aba2779890318a90a616d60a62d6dd8140d04344c3345ea66609981d0d_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_0a36627a21f23432b9295795e7c2a90ef2483ba07b16a72a0ff067c56d3069be = $this->env->getExtension("native_profiler");
        $__internal_0a36627a21f23432b9295795e7c2a90ef2483ba07b16a72a0ff067c56d3069be->enter($__internal_0a36627a21f23432b9295795e7c2a90ef2483ba07b16a72a0ff067c56d3069be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_0a36627a21f23432b9295795e7c2a90ef2483ba07b16a72a0ff067c56d3069be->leave($__internal_0a36627a21f23432b9295795e7c2a90ef2483ba07b16a72a0ff067c56d3069be_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_4955388cfbfb267faab1e1dd6cabba0e10fbb77ef115a08ed0d67c1cb6dd6f85 = $this->env->getExtension("native_profiler");
        $__internal_4955388cfbfb267faab1e1dd6cabba0e10fbb77ef115a08ed0d67c1cb6dd6f85->enter($__internal_4955388cfbfb267faab1e1dd6cabba0e10fbb77ef115a08ed0d67c1cb6dd6f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_4955388cfbfb267faab1e1dd6cabba0e10fbb77ef115a08ed0d67c1cb6dd6f85->leave($__internal_4955388cfbfb267faab1e1dd6cabba0e10fbb77ef115a08ed0d67c1cb6dd6f85_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
";
    }
}
