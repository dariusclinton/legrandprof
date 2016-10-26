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
        $__internal_c692e95257839a178720a040817b6f20c3badc82abe046e81ab49442ece25005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c692e95257839a178720a040817b6f20c3badc82abe046e81ab49442ece25005->enter($__internal_c692e95257839a178720a040817b6f20c3badc82abe046e81ab49442ece25005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c692e95257839a178720a040817b6f20c3badc82abe046e81ab49442ece25005->leave($__internal_c692e95257839a178720a040817b6f20c3badc82abe046e81ab49442ece25005_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_0ecb6426262d72dccede9fff8e372fd925cf503f70999e072392edde557d7992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecb6426262d72dccede9fff8e372fd925cf503f70999e072392edde557d7992->enter($__internal_0ecb6426262d72dccede9fff8e372fd925cf503f70999e072392edde557d7992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_0ecb6426262d72dccede9fff8e372fd925cf503f70999e072392edde557d7992->leave($__internal_0ecb6426262d72dccede9fff8e372fd925cf503f70999e072392edde557d7992_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_9e15dc4902c45c327f6e5a1432e252e009041b37e53cb3dbf6eef7da98543319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e15dc4902c45c327f6e5a1432e252e009041b37e53cb3dbf6eef7da98543319->enter($__internal_9e15dc4902c45c327f6e5a1432e252e009041b37e53cb3dbf6eef7da98543319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_9e15dc4902c45c327f6e5a1432e252e009041b37e53cb3dbf6eef7da98543319->leave($__internal_9e15dc4902c45c327f6e5a1432e252e009041b37e53cb3dbf6eef7da98543319_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b740e55c2959d78e44afc792d7d0891dbc383d2ad7a90be7ec6a6d653c84bbf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b740e55c2959d78e44afc792d7d0891dbc383d2ad7a90be7ec6a6d653c84bbf0->enter($__internal_b740e55c2959d78e44afc792d7d0891dbc383d2ad7a90be7ec6a6d653c84bbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b740e55c2959d78e44afc792d7d0891dbc383d2ad7a90be7ec6a6d653c84bbf0->leave($__internal_b740e55c2959d78e44afc792d7d0891dbc383d2ad7a90be7ec6a6d653c84bbf0_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_74d63800b0e9735a2ba29355592bb24526bbdf7a25edae7c872ca8493457b7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d63800b0e9735a2ba29355592bb24526bbdf7a25edae7c872ca8493457b7b6->enter($__internal_74d63800b0e9735a2ba29355592bb24526bbdf7a25edae7c872ca8493457b7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_74d63800b0e9735a2ba29355592bb24526bbdf7a25edae7c872ca8493457b7b6->leave($__internal_74d63800b0e9735a2ba29355592bb24526bbdf7a25edae7c872ca8493457b7b6_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd0917485cb08e16d96df0472a64edcc043d355297cd1983f91a37d887364495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0917485cb08e16d96df0472a64edcc043d355297cd1983f91a37d887364495->enter($__internal_bd0917485cb08e16d96df0472a64edcc043d355297cd1983f91a37d887364495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bd0917485cb08e16d96df0472a64edcc043d355297cd1983f91a37d887364495->leave($__internal_bd0917485cb08e16d96df0472a64edcc043d355297cd1983f91a37d887364495_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_a1337235fe12339b284ce2155b41b9295bbf72199fd605c0e5338a3dd069c282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1337235fe12339b284ce2155b41b9295bbf72199fd605c0e5338a3dd069c282->enter($__internal_a1337235fe12339b284ce2155b41b9295bbf72199fd605c0e5338a3dd069c282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_a1337235fe12339b284ce2155b41b9295bbf72199fd605c0e5338a3dd069c282->leave($__internal_a1337235fe12339b284ce2155b41b9295bbf72199fd605c0e5338a3dd069c282_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_aa13c27cbb40c244c1e572fa292f1467c77494fd2ccebd4cc5ea4f511342e67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa13c27cbb40c244c1e572fa292f1467c77494fd2ccebd4cc5ea4f511342e67f->enter($__internal_aa13c27cbb40c244c1e572fa292f1467c77494fd2ccebd4cc5ea4f511342e67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_aa13c27cbb40c244c1e572fa292f1467c77494fd2ccebd4cc5ea4f511342e67f->leave($__internal_aa13c27cbb40c244c1e572fa292f1467c77494fd2ccebd4cc5ea4f511342e67f_prof);

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
