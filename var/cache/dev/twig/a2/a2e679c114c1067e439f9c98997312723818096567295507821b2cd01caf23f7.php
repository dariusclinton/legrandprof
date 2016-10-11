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
        $__internal_8c0293c685ec180d5c0b88170882b5e2a2a08a9d94ae2e3e05d7107bdd5c77ad = $this->env->getExtension("native_profiler");
        $__internal_8c0293c685ec180d5c0b88170882b5e2a2a08a9d94ae2e3e05d7107bdd5c77ad->enter($__internal_8c0293c685ec180d5c0b88170882b5e2a2a08a9d94ae2e3e05d7107bdd5c77ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c0293c685ec180d5c0b88170882b5e2a2a08a9d94ae2e3e05d7107bdd5c77ad->leave($__internal_8c0293c685ec180d5c0b88170882b5e2a2a08a9d94ae2e3e05d7107bdd5c77ad_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_33e20a0f3cabbf2103ebcb1d7ccaa4bed323916a02ef885e1ac573542694d75a = $this->env->getExtension("native_profiler");
        $__internal_33e20a0f3cabbf2103ebcb1d7ccaa4bed323916a02ef885e1ac573542694d75a->enter($__internal_33e20a0f3cabbf2103ebcb1d7ccaa4bed323916a02ef885e1ac573542694d75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_33e20a0f3cabbf2103ebcb1d7ccaa4bed323916a02ef885e1ac573542694d75a->leave($__internal_33e20a0f3cabbf2103ebcb1d7ccaa4bed323916a02ef885e1ac573542694d75a_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_6e4bdcd7a426b3060091ac779a1b6bc86f25aaa71328545823a4e0239d8a27d9 = $this->env->getExtension("native_profiler");
        $__internal_6e4bdcd7a426b3060091ac779a1b6bc86f25aaa71328545823a4e0239d8a27d9->enter($__internal_6e4bdcd7a426b3060091ac779a1b6bc86f25aaa71328545823a4e0239d8a27d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_6e4bdcd7a426b3060091ac779a1b6bc86f25aaa71328545823a4e0239d8a27d9->leave($__internal_6e4bdcd7a426b3060091ac779a1b6bc86f25aaa71328545823a4e0239d8a27d9_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c84459996169e57f898ebb453148588f4bae22971647fb721070bf1cfe0a24d2 = $this->env->getExtension("native_profiler");
        $__internal_c84459996169e57f898ebb453148588f4bae22971647fb721070bf1cfe0a24d2->enter($__internal_c84459996169e57f898ebb453148588f4bae22971647fb721070bf1cfe0a24d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_c84459996169e57f898ebb453148588f4bae22971647fb721070bf1cfe0a24d2->leave($__internal_c84459996169e57f898ebb453148588f4bae22971647fb721070bf1cfe0a24d2_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_6cf1d8c18c6ecd41a07562ee452adc40a7e46bcb33789819b4350f318ee339bf = $this->env->getExtension("native_profiler");
        $__internal_6cf1d8c18c6ecd41a07562ee452adc40a7e46bcb33789819b4350f318ee339bf->enter($__internal_6cf1d8c18c6ecd41a07562ee452adc40a7e46bcb33789819b4350f318ee339bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_6cf1d8c18c6ecd41a07562ee452adc40a7e46bcb33789819b4350f318ee339bf->leave($__internal_6cf1d8c18c6ecd41a07562ee452adc40a7e46bcb33789819b4350f318ee339bf_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef2eef2928949b8d0cab56b7689fd0c1a2d8bdf237a85ec7b8bd512600a6a90a = $this->env->getExtension("native_profiler");
        $__internal_ef2eef2928949b8d0cab56b7689fd0c1a2d8bdf237a85ec7b8bd512600a6a90a->enter($__internal_ef2eef2928949b8d0cab56b7689fd0c1a2d8bdf237a85ec7b8bd512600a6a90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ef2eef2928949b8d0cab56b7689fd0c1a2d8bdf237a85ec7b8bd512600a6a90a->leave($__internal_ef2eef2928949b8d0cab56b7689fd0c1a2d8bdf237a85ec7b8bd512600a6a90a_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_ab44f7144dcfa7c08544e28325b6c0340f12fc24f0ecab7dfe13881e2c712260 = $this->env->getExtension("native_profiler");
        $__internal_ab44f7144dcfa7c08544e28325b6c0340f12fc24f0ecab7dfe13881e2c712260->enter($__internal_ab44f7144dcfa7c08544e28325b6c0340f12fc24f0ecab7dfe13881e2c712260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_ab44f7144dcfa7c08544e28325b6c0340f12fc24f0ecab7dfe13881e2c712260->leave($__internal_ab44f7144dcfa7c08544e28325b6c0340f12fc24f0ecab7dfe13881e2c712260_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_24fa23606ab91e1a8575fc4845615d981b93dd25af7e65f53a1a7b0804af7947 = $this->env->getExtension("native_profiler");
        $__internal_24fa23606ab91e1a8575fc4845615d981b93dd25af7e65f53a1a7b0804af7947->enter($__internal_24fa23606ab91e1a8575fc4845615d981b93dd25af7e65f53a1a7b0804af7947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_24fa23606ab91e1a8575fc4845615d981b93dd25af7e65f53a1a7b0804af7947->leave($__internal_24fa23606ab91e1a8575fc4845615d981b93dd25af7e65f53a1a7b0804af7947_prof);

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
