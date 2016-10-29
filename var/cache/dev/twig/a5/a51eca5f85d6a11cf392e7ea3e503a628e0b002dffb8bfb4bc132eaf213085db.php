<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_c77483159a4284352d6b02b3e9542d6f3d0dea104e70b019c49097ff87b6af12 extends Twig_Template
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
        $__internal_e02eb254d4f7972174793e860c8a92922bcea51053f7a0d358121e3a221b4fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02eb254d4f7972174793e860c8a92922bcea51053f7a0d358121e3a221b4fbf->enter($__internal_e02eb254d4f7972174793e860c8a92922bcea51053f7a0d358121e3a221b4fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e02eb254d4f7972174793e860c8a92922bcea51053f7a0d358121e3a221b4fbf->leave($__internal_e02eb254d4f7972174793e860c8a92922bcea51053f7a0d358121e3a221b4fbf_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_07b9a28b53dbc92caa13010119b741b9a0339042325338eea67a1ef9fdc7d2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b9a28b53dbc92caa13010119b741b9a0339042325338eea67a1ef9fdc7d2c9->enter($__internal_07b9a28b53dbc92caa13010119b741b9a0339042325338eea67a1ef9fdc7d2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_07b9a28b53dbc92caa13010119b741b9a0339042325338eea67a1ef9fdc7d2c9->leave($__internal_07b9a28b53dbc92caa13010119b741b9a0339042325338eea67a1ef9fdc7d2c9_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_64bc1317afc6d684b2010662b726fe05776e1e2ae7c42c87bcc5c3d1252eb02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bc1317afc6d684b2010662b726fe05776e1e2ae7c42c87bcc5c3d1252eb02f->enter($__internal_64bc1317afc6d684b2010662b726fe05776e1e2ae7c42c87bcc5c3d1252eb02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_64bc1317afc6d684b2010662b726fe05776e1e2ae7c42c87bcc5c3d1252eb02f->leave($__internal_64bc1317afc6d684b2010662b726fe05776e1e2ae7c42c87bcc5c3d1252eb02f_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_13a28438ec8b74f60245e0a55df89606ee73d23443cebd1f6ff2e158136803ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a28438ec8b74f60245e0a55df89606ee73d23443cebd1f6ff2e158136803ef->enter($__internal_13a28438ec8b74f60245e0a55df89606ee73d23443cebd1f6ff2e158136803ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_13a28438ec8b74f60245e0a55df89606ee73d23443cebd1f6ff2e158136803ef->leave($__internal_13a28438ec8b74f60245e0a55df89606ee73d23443cebd1f6ff2e158136803ef_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_1fb877e9054ae7362347ac4f910eec16636e8521889bdfb480a0e9e0cefc8507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb877e9054ae7362347ac4f910eec16636e8521889bdfb480a0e9e0cefc8507->enter($__internal_1fb877e9054ae7362347ac4f910eec16636e8521889bdfb480a0e9e0cefc8507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_1fb877e9054ae7362347ac4f910eec16636e8521889bdfb480a0e9e0cefc8507->leave($__internal_1fb877e9054ae7362347ac4f910eec16636e8521889bdfb480a0e9e0cefc8507_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83d6359c872be254dbb8284053995a3711bb4381ca1b72a296c2d2ddbd8e20b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d6359c872be254dbb8284053995a3711bb4381ca1b72a296c2d2ddbd8e20b7->enter($__internal_83d6359c872be254dbb8284053995a3711bb4381ca1b72a296c2d2ddbd8e20b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_83d6359c872be254dbb8284053995a3711bb4381ca1b72a296c2d2ddbd8e20b7->leave($__internal_83d6359c872be254dbb8284053995a3711bb4381ca1b72a296c2d2ddbd8e20b7_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_43e242f70ce6b4f84f085933ed87a6a6fdd8cd0ba65aaaf1eac6152eb0fd55bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e242f70ce6b4f84f085933ed87a6a6fdd8cd0ba65aaaf1eac6152eb0fd55bd->enter($__internal_43e242f70ce6b4f84f085933ed87a6a6fdd8cd0ba65aaaf1eac6152eb0fd55bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_43e242f70ce6b4f84f085933ed87a6a6fdd8cd0ba65aaaf1eac6152eb0fd55bd->leave($__internal_43e242f70ce6b4f84f085933ed87a6a6fdd8cd0ba65aaaf1eac6152eb0fd55bd_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_7add101a5dec2f636e4178c476764c86eb9cb8d469fae23154cb64a602086cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7add101a5dec2f636e4178c476764c86eb9cb8d469fae23154cb64a602086cbb->enter($__internal_7add101a5dec2f636e4178c476764c86eb9cb8d469fae23154cb64a602086cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_7add101a5dec2f636e4178c476764c86eb9cb8d469fae23154cb64a602086cbb->leave($__internal_7add101a5dec2f636e4178c476764c86eb9cb8d469fae23154cb64a602086cbb_prof);

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
