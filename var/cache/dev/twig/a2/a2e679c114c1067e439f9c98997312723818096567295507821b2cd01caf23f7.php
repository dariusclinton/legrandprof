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
        $__internal_38b3706f88bc798bd5c93e5b33ccdb2f9542b985f845f038f05ffb523835d10a = $this->env->getExtension("native_profiler");
        $__internal_38b3706f88bc798bd5c93e5b33ccdb2f9542b985f845f038f05ffb523835d10a->enter($__internal_38b3706f88bc798bd5c93e5b33ccdb2f9542b985f845f038f05ffb523835d10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38b3706f88bc798bd5c93e5b33ccdb2f9542b985f845f038f05ffb523835d10a->leave($__internal_38b3706f88bc798bd5c93e5b33ccdb2f9542b985f845f038f05ffb523835d10a_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_3d6f92a0a5b44951d07423dc31fa13a41bb2966002b746e93356d786ec9ee92a = $this->env->getExtension("native_profiler");
        $__internal_3d6f92a0a5b44951d07423dc31fa13a41bb2966002b746e93356d786ec9ee92a->enter($__internal_3d6f92a0a5b44951d07423dc31fa13a41bb2966002b746e93356d786ec9ee92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_3d6f92a0a5b44951d07423dc31fa13a41bb2966002b746e93356d786ec9ee92a->leave($__internal_3d6f92a0a5b44951d07423dc31fa13a41bb2966002b746e93356d786ec9ee92a_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_01b8e0d31c35e8e555ce335e7c863ecd72dda1f0a0aa998e703d8042fd300ee0 = $this->env->getExtension("native_profiler");
        $__internal_01b8e0d31c35e8e555ce335e7c863ecd72dda1f0a0aa998e703d8042fd300ee0->enter($__internal_01b8e0d31c35e8e555ce335e7c863ecd72dda1f0a0aa998e703d8042fd300ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_01b8e0d31c35e8e555ce335e7c863ecd72dda1f0a0aa998e703d8042fd300ee0->leave($__internal_01b8e0d31c35e8e555ce335e7c863ecd72dda1f0a0aa998e703d8042fd300ee0_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_f91a0f4277801a174fae9004f8b0c0a63a95e5fb20200c49d51dc84ab501db4e = $this->env->getExtension("native_profiler");
        $__internal_f91a0f4277801a174fae9004f8b0c0a63a95e5fb20200c49d51dc84ab501db4e->enter($__internal_f91a0f4277801a174fae9004f8b0c0a63a95e5fb20200c49d51dc84ab501db4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_f91a0f4277801a174fae9004f8b0c0a63a95e5fb20200c49d51dc84ab501db4e->leave($__internal_f91a0f4277801a174fae9004f8b0c0a63a95e5fb20200c49d51dc84ab501db4e_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_cb54a40d4a3df2b494ce096dbcfaed8a615dab18043451ed7533ace28677e5a2 = $this->env->getExtension("native_profiler");
        $__internal_cb54a40d4a3df2b494ce096dbcfaed8a615dab18043451ed7533ace28677e5a2->enter($__internal_cb54a40d4a3df2b494ce096dbcfaed8a615dab18043451ed7533ace28677e5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_cb54a40d4a3df2b494ce096dbcfaed8a615dab18043451ed7533ace28677e5a2->leave($__internal_cb54a40d4a3df2b494ce096dbcfaed8a615dab18043451ed7533ace28677e5a2_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6bcaf3601354ad4b66629b59d0c3f7732e09c00ecfd085fb3770736b572e128e = $this->env->getExtension("native_profiler");
        $__internal_6bcaf3601354ad4b66629b59d0c3f7732e09c00ecfd085fb3770736b572e128e->enter($__internal_6bcaf3601354ad4b66629b59d0c3f7732e09c00ecfd085fb3770736b572e128e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6bcaf3601354ad4b66629b59d0c3f7732e09c00ecfd085fb3770736b572e128e->leave($__internal_6bcaf3601354ad4b66629b59d0c3f7732e09c00ecfd085fb3770736b572e128e_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_5d370062356710f15bf27118f60c673032e546615fdcd35c08171cc6aff04917 = $this->env->getExtension("native_profiler");
        $__internal_5d370062356710f15bf27118f60c673032e546615fdcd35c08171cc6aff04917->enter($__internal_5d370062356710f15bf27118f60c673032e546615fdcd35c08171cc6aff04917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_5d370062356710f15bf27118f60c673032e546615fdcd35c08171cc6aff04917->leave($__internal_5d370062356710f15bf27118f60c673032e546615fdcd35c08171cc6aff04917_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_115f40dbe4ea7fbb7cea5e6f46acd1a025b289d3c37fb6eb51e0b9138191954e = $this->env->getExtension("native_profiler");
        $__internal_115f40dbe4ea7fbb7cea5e6f46acd1a025b289d3c37fb6eb51e0b9138191954e->enter($__internal_115f40dbe4ea7fbb7cea5e6f46acd1a025b289d3c37fb6eb51e0b9138191954e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_115f40dbe4ea7fbb7cea5e6f46acd1a025b289d3c37fb6eb51e0b9138191954e->leave($__internal_115f40dbe4ea7fbb7cea5e6f46acd1a025b289d3c37fb6eb51e0b9138191954e_prof);

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
