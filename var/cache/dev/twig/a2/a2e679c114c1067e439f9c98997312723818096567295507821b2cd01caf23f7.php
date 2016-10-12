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
        $__internal_35047f0eb2c1f5c6e303b6e10c2bc6a1cc63997703fdbfdaa6078cf4429bf62b = $this->env->getExtension("native_profiler");
        $__internal_35047f0eb2c1f5c6e303b6e10c2bc6a1cc63997703fdbfdaa6078cf4429bf62b->enter($__internal_35047f0eb2c1f5c6e303b6e10c2bc6a1cc63997703fdbfdaa6078cf4429bf62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35047f0eb2c1f5c6e303b6e10c2bc6a1cc63997703fdbfdaa6078cf4429bf62b->leave($__internal_35047f0eb2c1f5c6e303b6e10c2bc6a1cc63997703fdbfdaa6078cf4429bf62b_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_4dd1a54a41c9bd6a8e04c0b593c16abc506801c12ee5b81703b4bfd385498600 = $this->env->getExtension("native_profiler");
        $__internal_4dd1a54a41c9bd6a8e04c0b593c16abc506801c12ee5b81703b4bfd385498600->enter($__internal_4dd1a54a41c9bd6a8e04c0b593c16abc506801c12ee5b81703b4bfd385498600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_4dd1a54a41c9bd6a8e04c0b593c16abc506801c12ee5b81703b4bfd385498600->leave($__internal_4dd1a54a41c9bd6a8e04c0b593c16abc506801c12ee5b81703b4bfd385498600_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_4bd040c77e9feefa550417052df2ad3e18d0aa1ed241a97515cb6ee0a5244b44 = $this->env->getExtension("native_profiler");
        $__internal_4bd040c77e9feefa550417052df2ad3e18d0aa1ed241a97515cb6ee0a5244b44->enter($__internal_4bd040c77e9feefa550417052df2ad3e18d0aa1ed241a97515cb6ee0a5244b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_4bd040c77e9feefa550417052df2ad3e18d0aa1ed241a97515cb6ee0a5244b44->leave($__internal_4bd040c77e9feefa550417052df2ad3e18d0aa1ed241a97515cb6ee0a5244b44_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_a31803dec5a0bba3339736e5e80365a131c0fb1cbbffa586faceab568b6c5e49 = $this->env->getExtension("native_profiler");
        $__internal_a31803dec5a0bba3339736e5e80365a131c0fb1cbbffa586faceab568b6c5e49->enter($__internal_a31803dec5a0bba3339736e5e80365a131c0fb1cbbffa586faceab568b6c5e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_a31803dec5a0bba3339736e5e80365a131c0fb1cbbffa586faceab568b6c5e49->leave($__internal_a31803dec5a0bba3339736e5e80365a131c0fb1cbbffa586faceab568b6c5e49_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_6de9de070d2a6d64d0f33e5c2bd2f236c78fd89f84caf0e54a0d7a77952a2295 = $this->env->getExtension("native_profiler");
        $__internal_6de9de070d2a6d64d0f33e5c2bd2f236c78fd89f84caf0e54a0d7a77952a2295->enter($__internal_6de9de070d2a6d64d0f33e5c2bd2f236c78fd89f84caf0e54a0d7a77952a2295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_6de9de070d2a6d64d0f33e5c2bd2f236c78fd89f84caf0e54a0d7a77952a2295->leave($__internal_6de9de070d2a6d64d0f33e5c2bd2f236c78fd89f84caf0e54a0d7a77952a2295_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d46c51f33e13ac0d9503fff3a82797b04d9d9db9fdfd31724ab8632031f6ee2d = $this->env->getExtension("native_profiler");
        $__internal_d46c51f33e13ac0d9503fff3a82797b04d9d9db9fdfd31724ab8632031f6ee2d->enter($__internal_d46c51f33e13ac0d9503fff3a82797b04d9d9db9fdfd31724ab8632031f6ee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d46c51f33e13ac0d9503fff3a82797b04d9d9db9fdfd31724ab8632031f6ee2d->leave($__internal_d46c51f33e13ac0d9503fff3a82797b04d9d9db9fdfd31724ab8632031f6ee2d_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_f8170a830e9d93a1f11cd10a2252ee2feab6b76b202a21efd6ada0e3bf898034 = $this->env->getExtension("native_profiler");
        $__internal_f8170a830e9d93a1f11cd10a2252ee2feab6b76b202a21efd6ada0e3bf898034->enter($__internal_f8170a830e9d93a1f11cd10a2252ee2feab6b76b202a21efd6ada0e3bf898034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_f8170a830e9d93a1f11cd10a2252ee2feab6b76b202a21efd6ada0e3bf898034->leave($__internal_f8170a830e9d93a1f11cd10a2252ee2feab6b76b202a21efd6ada0e3bf898034_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_8f9871f716722b00fd3cd48afd9592bc8e2b501f4bc393cddd893a3e86871ec7 = $this->env->getExtension("native_profiler");
        $__internal_8f9871f716722b00fd3cd48afd9592bc8e2b501f4bc393cddd893a3e86871ec7->enter($__internal_8f9871f716722b00fd3cd48afd9592bc8e2b501f4bc393cddd893a3e86871ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_8f9871f716722b00fd3cd48afd9592bc8e2b501f4bc393cddd893a3e86871ec7->leave($__internal_8f9871f716722b00fd3cd48afd9592bc8e2b501f4bc393cddd893a3e86871ec7_prof);

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
