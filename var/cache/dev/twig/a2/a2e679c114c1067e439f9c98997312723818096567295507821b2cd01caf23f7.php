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
        $__internal_17b88fb4ab1fa4ea5eb75b47ab3af80ed18090f6a6340a74717eb314230a2529 = $this->env->getExtension("native_profiler");
        $__internal_17b88fb4ab1fa4ea5eb75b47ab3af80ed18090f6a6340a74717eb314230a2529->enter($__internal_17b88fb4ab1fa4ea5eb75b47ab3af80ed18090f6a6340a74717eb314230a2529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17b88fb4ab1fa4ea5eb75b47ab3af80ed18090f6a6340a74717eb314230a2529->leave($__internal_17b88fb4ab1fa4ea5eb75b47ab3af80ed18090f6a6340a74717eb314230a2529_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_7a26ade9867a3aab75b5ef2cb7e34162d4ca2a7429872e2c73bfb42b88e2016a = $this->env->getExtension("native_profiler");
        $__internal_7a26ade9867a3aab75b5ef2cb7e34162d4ca2a7429872e2c73bfb42b88e2016a->enter($__internal_7a26ade9867a3aab75b5ef2cb7e34162d4ca2a7429872e2c73bfb42b88e2016a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_7a26ade9867a3aab75b5ef2cb7e34162d4ca2a7429872e2c73bfb42b88e2016a->leave($__internal_7a26ade9867a3aab75b5ef2cb7e34162d4ca2a7429872e2c73bfb42b88e2016a_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_2d40e54108291301e4ed2f4fbc64c22c433e112feb04bdc9ef9d476302686af1 = $this->env->getExtension("native_profiler");
        $__internal_2d40e54108291301e4ed2f4fbc64c22c433e112feb04bdc9ef9d476302686af1->enter($__internal_2d40e54108291301e4ed2f4fbc64c22c433e112feb04bdc9ef9d476302686af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_2d40e54108291301e4ed2f4fbc64c22c433e112feb04bdc9ef9d476302686af1->leave($__internal_2d40e54108291301e4ed2f4fbc64c22c433e112feb04bdc9ef9d476302686af1_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_0d0796e4d2cc8ca3fc9e16b04baffded1e92aaea380d80af488d521ae87725c6 = $this->env->getExtension("native_profiler");
        $__internal_0d0796e4d2cc8ca3fc9e16b04baffded1e92aaea380d80af488d521ae87725c6->enter($__internal_0d0796e4d2cc8ca3fc9e16b04baffded1e92aaea380d80af488d521ae87725c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_0d0796e4d2cc8ca3fc9e16b04baffded1e92aaea380d80af488d521ae87725c6->leave($__internal_0d0796e4d2cc8ca3fc9e16b04baffded1e92aaea380d80af488d521ae87725c6_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_3b437e1f34ce7965572d83816ee1e58276cf2cfac94ad9d70444e3a84aafa9ab = $this->env->getExtension("native_profiler");
        $__internal_3b437e1f34ce7965572d83816ee1e58276cf2cfac94ad9d70444e3a84aafa9ab->enter($__internal_3b437e1f34ce7965572d83816ee1e58276cf2cfac94ad9d70444e3a84aafa9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_3b437e1f34ce7965572d83816ee1e58276cf2cfac94ad9d70444e3a84aafa9ab->leave($__internal_3b437e1f34ce7965572d83816ee1e58276cf2cfac94ad9d70444e3a84aafa9ab_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2fa90c1f6dd1f7c7a89599553f28cc42eb50ae5201dcd441faba3a01ca76823 = $this->env->getExtension("native_profiler");
        $__internal_f2fa90c1f6dd1f7c7a89599553f28cc42eb50ae5201dcd441faba3a01ca76823->enter($__internal_f2fa90c1f6dd1f7c7a89599553f28cc42eb50ae5201dcd441faba3a01ca76823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f2fa90c1f6dd1f7c7a89599553f28cc42eb50ae5201dcd441faba3a01ca76823->leave($__internal_f2fa90c1f6dd1f7c7a89599553f28cc42eb50ae5201dcd441faba3a01ca76823_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_3c323c9300fa7559baf2c2dd0f51465aeaf4608d070063200068406d99be88d1 = $this->env->getExtension("native_profiler");
        $__internal_3c323c9300fa7559baf2c2dd0f51465aeaf4608d070063200068406d99be88d1->enter($__internal_3c323c9300fa7559baf2c2dd0f51465aeaf4608d070063200068406d99be88d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_3c323c9300fa7559baf2c2dd0f51465aeaf4608d070063200068406d99be88d1->leave($__internal_3c323c9300fa7559baf2c2dd0f51465aeaf4608d070063200068406d99be88d1_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_8c1b8f0c5a3cdb8869956f0431168cfffce504cf19e9249b3166ddf3cacecd0b = $this->env->getExtension("native_profiler");
        $__internal_8c1b8f0c5a3cdb8869956f0431168cfffce504cf19e9249b3166ddf3cacecd0b->enter($__internal_8c1b8f0c5a3cdb8869956f0431168cfffce504cf19e9249b3166ddf3cacecd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_8c1b8f0c5a3cdb8869956f0431168cfffce504cf19e9249b3166ddf3cacecd0b->leave($__internal_8c1b8f0c5a3cdb8869956f0431168cfffce504cf19e9249b3166ddf3cacecd0b_prof);

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
