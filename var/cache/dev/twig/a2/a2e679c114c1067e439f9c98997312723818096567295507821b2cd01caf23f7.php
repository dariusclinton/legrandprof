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
        $__internal_194bf0aa6bd88ee42d616364fe38d31c17342a1a9c51ef8c465abd699c04893f = $this->env->getExtension("native_profiler");
        $__internal_194bf0aa6bd88ee42d616364fe38d31c17342a1a9c51ef8c465abd699c04893f->enter($__internal_194bf0aa6bd88ee42d616364fe38d31c17342a1a9c51ef8c465abd699c04893f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_194bf0aa6bd88ee42d616364fe38d31c17342a1a9c51ef8c465abd699c04893f->leave($__internal_194bf0aa6bd88ee42d616364fe38d31c17342a1a9c51ef8c465abd699c04893f_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_82175d147121da3eb1635b042f710520ada76c04e3eba07f82e779e0b51714bc = $this->env->getExtension("native_profiler");
        $__internal_82175d147121da3eb1635b042f710520ada76c04e3eba07f82e779e0b51714bc->enter($__internal_82175d147121da3eb1635b042f710520ada76c04e3eba07f82e779e0b51714bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_82175d147121da3eb1635b042f710520ada76c04e3eba07f82e779e0b51714bc->leave($__internal_82175d147121da3eb1635b042f710520ada76c04e3eba07f82e779e0b51714bc_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_5dfb6f046fab897f71ef638c415a56a59b07ba00b28438e0a57d699b7733b9f1 = $this->env->getExtension("native_profiler");
        $__internal_5dfb6f046fab897f71ef638c415a56a59b07ba00b28438e0a57d699b7733b9f1->enter($__internal_5dfb6f046fab897f71ef638c415a56a59b07ba00b28438e0a57d699b7733b9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_5dfb6f046fab897f71ef638c415a56a59b07ba00b28438e0a57d699b7733b9f1->leave($__internal_5dfb6f046fab897f71ef638c415a56a59b07ba00b28438e0a57d699b7733b9f1_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_104edc47a61131effcf9801a84275aca80e40843cd0bab74eabfb3d12f6e5d50 = $this->env->getExtension("native_profiler");
        $__internal_104edc47a61131effcf9801a84275aca80e40843cd0bab74eabfb3d12f6e5d50->enter($__internal_104edc47a61131effcf9801a84275aca80e40843cd0bab74eabfb3d12f6e5d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_104edc47a61131effcf9801a84275aca80e40843cd0bab74eabfb3d12f6e5d50->leave($__internal_104edc47a61131effcf9801a84275aca80e40843cd0bab74eabfb3d12f6e5d50_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_bf230e95df6559ca63be833cea370fad04ed5dc351df5cc280a9dd1b9e0508b6 = $this->env->getExtension("native_profiler");
        $__internal_bf230e95df6559ca63be833cea370fad04ed5dc351df5cc280a9dd1b9e0508b6->enter($__internal_bf230e95df6559ca63be833cea370fad04ed5dc351df5cc280a9dd1b9e0508b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_bf230e95df6559ca63be833cea370fad04ed5dc351df5cc280a9dd1b9e0508b6->leave($__internal_bf230e95df6559ca63be833cea370fad04ed5dc351df5cc280a9dd1b9e0508b6_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f2aa583f60a24093cc42523240769d93627bbc8057dbb89f8f7455b316536df = $this->env->getExtension("native_profiler");
        $__internal_4f2aa583f60a24093cc42523240769d93627bbc8057dbb89f8f7455b316536df->enter($__internal_4f2aa583f60a24093cc42523240769d93627bbc8057dbb89f8f7455b316536df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4f2aa583f60a24093cc42523240769d93627bbc8057dbb89f8f7455b316536df->leave($__internal_4f2aa583f60a24093cc42523240769d93627bbc8057dbb89f8f7455b316536df_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_3f88601b14639d391e79e6f7996dcede1ab6dcf977dc2fc74a4bd143c8b41ad9 = $this->env->getExtension("native_profiler");
        $__internal_3f88601b14639d391e79e6f7996dcede1ab6dcf977dc2fc74a4bd143c8b41ad9->enter($__internal_3f88601b14639d391e79e6f7996dcede1ab6dcf977dc2fc74a4bd143c8b41ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_3f88601b14639d391e79e6f7996dcede1ab6dcf977dc2fc74a4bd143c8b41ad9->leave($__internal_3f88601b14639d391e79e6f7996dcede1ab6dcf977dc2fc74a4bd143c8b41ad9_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_8a88bb14ea88ca29cc1ce6a786c24c1518038c9530ee78cf1327e852aa707dc6 = $this->env->getExtension("native_profiler");
        $__internal_8a88bb14ea88ca29cc1ce6a786c24c1518038c9530ee78cf1327e852aa707dc6->enter($__internal_8a88bb14ea88ca29cc1ce6a786c24c1518038c9530ee78cf1327e852aa707dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_8a88bb14ea88ca29cc1ce6a786c24c1518038c9530ee78cf1327e852aa707dc6->leave($__internal_8a88bb14ea88ca29cc1ce6a786c24c1518038c9530ee78cf1327e852aa707dc6_prof);

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
