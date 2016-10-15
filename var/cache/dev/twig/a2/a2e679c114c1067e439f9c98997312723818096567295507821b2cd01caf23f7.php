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
        $__internal_0653860a087276c155adc509b0cbaa21fac8d93ad33bedec2be88b59817cd900 = $this->env->getExtension("native_profiler");
        $__internal_0653860a087276c155adc509b0cbaa21fac8d93ad33bedec2be88b59817cd900->enter($__internal_0653860a087276c155adc509b0cbaa21fac8d93ad33bedec2be88b59817cd900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0653860a087276c155adc509b0cbaa21fac8d93ad33bedec2be88b59817cd900->leave($__internal_0653860a087276c155adc509b0cbaa21fac8d93ad33bedec2be88b59817cd900_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_edf519ad390b18d70c5c570dd3d5b22c6a29da52cf9e7552f2c58882eaf474a6 = $this->env->getExtension("native_profiler");
        $__internal_edf519ad390b18d70c5c570dd3d5b22c6a29da52cf9e7552f2c58882eaf474a6->enter($__internal_edf519ad390b18d70c5c570dd3d5b22c6a29da52cf9e7552f2c58882eaf474a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_edf519ad390b18d70c5c570dd3d5b22c6a29da52cf9e7552f2c58882eaf474a6->leave($__internal_edf519ad390b18d70c5c570dd3d5b22c6a29da52cf9e7552f2c58882eaf474a6_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_e4a23e1dd93fc6929c9ce76f13bcbcb4ffc4dde2cd6271f36fc8e3449d86873c = $this->env->getExtension("native_profiler");
        $__internal_e4a23e1dd93fc6929c9ce76f13bcbcb4ffc4dde2cd6271f36fc8e3449d86873c->enter($__internal_e4a23e1dd93fc6929c9ce76f13bcbcb4ffc4dde2cd6271f36fc8e3449d86873c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_e4a23e1dd93fc6929c9ce76f13bcbcb4ffc4dde2cd6271f36fc8e3449d86873c->leave($__internal_e4a23e1dd93fc6929c9ce76f13bcbcb4ffc4dde2cd6271f36fc8e3449d86873c_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_72aaaeea74af83c699ed221aa2e7ab90146393a79016fcd58a45eb37d7cceeac = $this->env->getExtension("native_profiler");
        $__internal_72aaaeea74af83c699ed221aa2e7ab90146393a79016fcd58a45eb37d7cceeac->enter($__internal_72aaaeea74af83c699ed221aa2e7ab90146393a79016fcd58a45eb37d7cceeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_72aaaeea74af83c699ed221aa2e7ab90146393a79016fcd58a45eb37d7cceeac->leave($__internal_72aaaeea74af83c699ed221aa2e7ab90146393a79016fcd58a45eb37d7cceeac_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_b7ae8e053560a484cdd7a22bab20ce88b0a755eed5f1a932fcf3182d36e8175c = $this->env->getExtension("native_profiler");
        $__internal_b7ae8e053560a484cdd7a22bab20ce88b0a755eed5f1a932fcf3182d36e8175c->enter($__internal_b7ae8e053560a484cdd7a22bab20ce88b0a755eed5f1a932fcf3182d36e8175c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_b7ae8e053560a484cdd7a22bab20ce88b0a755eed5f1a932fcf3182d36e8175c->leave($__internal_b7ae8e053560a484cdd7a22bab20ce88b0a755eed5f1a932fcf3182d36e8175c_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e2cb78d693bf5c7c7dfaf2ea140dd7690c9095cf20547f60453ed2e95447540 = $this->env->getExtension("native_profiler");
        $__internal_4e2cb78d693bf5c7c7dfaf2ea140dd7690c9095cf20547f60453ed2e95447540->enter($__internal_4e2cb78d693bf5c7c7dfaf2ea140dd7690c9095cf20547f60453ed2e95447540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4e2cb78d693bf5c7c7dfaf2ea140dd7690c9095cf20547f60453ed2e95447540->leave($__internal_4e2cb78d693bf5c7c7dfaf2ea140dd7690c9095cf20547f60453ed2e95447540_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_39bfbb79cbec79dee2c3811335027e26c344dc607ba7ff9ee0b42e3c8f2b32c4 = $this->env->getExtension("native_profiler");
        $__internal_39bfbb79cbec79dee2c3811335027e26c344dc607ba7ff9ee0b42e3c8f2b32c4->enter($__internal_39bfbb79cbec79dee2c3811335027e26c344dc607ba7ff9ee0b42e3c8f2b32c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_39bfbb79cbec79dee2c3811335027e26c344dc607ba7ff9ee0b42e3c8f2b32c4->leave($__internal_39bfbb79cbec79dee2c3811335027e26c344dc607ba7ff9ee0b42e3c8f2b32c4_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_6254f2709972d1b2a01bc7d2fb0083148cfd56e53294a767fec554eefdd265fa = $this->env->getExtension("native_profiler");
        $__internal_6254f2709972d1b2a01bc7d2fb0083148cfd56e53294a767fec554eefdd265fa->enter($__internal_6254f2709972d1b2a01bc7d2fb0083148cfd56e53294a767fec554eefdd265fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_6254f2709972d1b2a01bc7d2fb0083148cfd56e53294a767fec554eefdd265fa->leave($__internal_6254f2709972d1b2a01bc7d2fb0083148cfd56e53294a767fec554eefdd265fa_prof);

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
