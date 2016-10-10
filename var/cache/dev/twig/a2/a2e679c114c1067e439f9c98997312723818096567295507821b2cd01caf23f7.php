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
        $__internal_501738fdd992a5061efbb7d832e5aa9532b7755c18ceb2388616290cc48c1bf9 = $this->env->getExtension("native_profiler");
        $__internal_501738fdd992a5061efbb7d832e5aa9532b7755c18ceb2388616290cc48c1bf9->enter($__internal_501738fdd992a5061efbb7d832e5aa9532b7755c18ceb2388616290cc48c1bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_501738fdd992a5061efbb7d832e5aa9532b7755c18ceb2388616290cc48c1bf9->leave($__internal_501738fdd992a5061efbb7d832e5aa9532b7755c18ceb2388616290cc48c1bf9_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_8b79f25d7f209883845b2d189e3797c5448995eaaca6a9d94b395caf58dded90 = $this->env->getExtension("native_profiler");
        $__internal_8b79f25d7f209883845b2d189e3797c5448995eaaca6a9d94b395caf58dded90->enter($__internal_8b79f25d7f209883845b2d189e3797c5448995eaaca6a9d94b395caf58dded90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_8b79f25d7f209883845b2d189e3797c5448995eaaca6a9d94b395caf58dded90->leave($__internal_8b79f25d7f209883845b2d189e3797c5448995eaaca6a9d94b395caf58dded90_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_5735003f3496cd21bb384079e744b65c135392f7fe1703eaa51b9edb9125fedc = $this->env->getExtension("native_profiler");
        $__internal_5735003f3496cd21bb384079e744b65c135392f7fe1703eaa51b9edb9125fedc->enter($__internal_5735003f3496cd21bb384079e744b65c135392f7fe1703eaa51b9edb9125fedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_5735003f3496cd21bb384079e744b65c135392f7fe1703eaa51b9edb9125fedc->leave($__internal_5735003f3496cd21bb384079e744b65c135392f7fe1703eaa51b9edb9125fedc_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_fa821be21373c6b52abe24a21440ac30161c92f20df080c4f0d1c8ea2554c65d = $this->env->getExtension("native_profiler");
        $__internal_fa821be21373c6b52abe24a21440ac30161c92f20df080c4f0d1c8ea2554c65d->enter($__internal_fa821be21373c6b52abe24a21440ac30161c92f20df080c4f0d1c8ea2554c65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_fa821be21373c6b52abe24a21440ac30161c92f20df080c4f0d1c8ea2554c65d->leave($__internal_fa821be21373c6b52abe24a21440ac30161c92f20df080c4f0d1c8ea2554c65d_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_d3c3dcc709d738564ea1d4d6f2b86da2177416025343754a48617827b0407778 = $this->env->getExtension("native_profiler");
        $__internal_d3c3dcc709d738564ea1d4d6f2b86da2177416025343754a48617827b0407778->enter($__internal_d3c3dcc709d738564ea1d4d6f2b86da2177416025343754a48617827b0407778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_d3c3dcc709d738564ea1d4d6f2b86da2177416025343754a48617827b0407778->leave($__internal_d3c3dcc709d738564ea1d4d6f2b86da2177416025343754a48617827b0407778_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03f3207eba2242f7cf1011370d5788546cbb00ed5b3682ed84d11921baa4128b = $this->env->getExtension("native_profiler");
        $__internal_03f3207eba2242f7cf1011370d5788546cbb00ed5b3682ed84d11921baa4128b->enter($__internal_03f3207eba2242f7cf1011370d5788546cbb00ed5b3682ed84d11921baa4128b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_03f3207eba2242f7cf1011370d5788546cbb00ed5b3682ed84d11921baa4128b->leave($__internal_03f3207eba2242f7cf1011370d5788546cbb00ed5b3682ed84d11921baa4128b_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_dd9cd41502121ad4c54b28d3f184753e8eca55aa066ea0a0ddd8cf528ea8aa33 = $this->env->getExtension("native_profiler");
        $__internal_dd9cd41502121ad4c54b28d3f184753e8eca55aa066ea0a0ddd8cf528ea8aa33->enter($__internal_dd9cd41502121ad4c54b28d3f184753e8eca55aa066ea0a0ddd8cf528ea8aa33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_dd9cd41502121ad4c54b28d3f184753e8eca55aa066ea0a0ddd8cf528ea8aa33->leave($__internal_dd9cd41502121ad4c54b28d3f184753e8eca55aa066ea0a0ddd8cf528ea8aa33_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_f79292caf2889909362b157f14151b6e2f6659cd90a5190b16094117f4fcf09f = $this->env->getExtension("native_profiler");
        $__internal_f79292caf2889909362b157f14151b6e2f6659cd90a5190b16094117f4fcf09f->enter($__internal_f79292caf2889909362b157f14151b6e2f6659cd90a5190b16094117f4fcf09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_f79292caf2889909362b157f14151b6e2f6659cd90a5190b16094117f4fcf09f->leave($__internal_f79292caf2889909362b157f14151b6e2f6659cd90a5190b16094117f4fcf09f_prof);

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
