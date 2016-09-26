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
        $__internal_b6b1f18cbc9032854d4165e875a6641ed45128ecefc1e3186eed92ccca5a7f59 = $this->env->getExtension("native_profiler");
        $__internal_b6b1f18cbc9032854d4165e875a6641ed45128ecefc1e3186eed92ccca5a7f59->enter($__internal_b6b1f18cbc9032854d4165e875a6641ed45128ecefc1e3186eed92ccca5a7f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6b1f18cbc9032854d4165e875a6641ed45128ecefc1e3186eed92ccca5a7f59->leave($__internal_b6b1f18cbc9032854d4165e875a6641ed45128ecefc1e3186eed92ccca5a7f59_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_87a278fa7fc58bc8c9e5c877036a8f94d51e12c184c642327d1ca222fb51f2da = $this->env->getExtension("native_profiler");
        $__internal_87a278fa7fc58bc8c9e5c877036a8f94d51e12c184c642327d1ca222fb51f2da->enter($__internal_87a278fa7fc58bc8c9e5c877036a8f94d51e12c184c642327d1ca222fb51f2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_87a278fa7fc58bc8c9e5c877036a8f94d51e12c184c642327d1ca222fb51f2da->leave($__internal_87a278fa7fc58bc8c9e5c877036a8f94d51e12c184c642327d1ca222fb51f2da_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_05355d0c189f36b8b485739ce2dca6875d33f924740fe79d02a694a2ef3168da = $this->env->getExtension("native_profiler");
        $__internal_05355d0c189f36b8b485739ce2dca6875d33f924740fe79d02a694a2ef3168da->enter($__internal_05355d0c189f36b8b485739ce2dca6875d33f924740fe79d02a694a2ef3168da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_05355d0c189f36b8b485739ce2dca6875d33f924740fe79d02a694a2ef3168da->leave($__internal_05355d0c189f36b8b485739ce2dca6875d33f924740fe79d02a694a2ef3168da_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_075c89dbb47b070ff7eab32976c5491ad5a2dc98950cf5abdaa511651f861818 = $this->env->getExtension("native_profiler");
        $__internal_075c89dbb47b070ff7eab32976c5491ad5a2dc98950cf5abdaa511651f861818->enter($__internal_075c89dbb47b070ff7eab32976c5491ad5a2dc98950cf5abdaa511651f861818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_075c89dbb47b070ff7eab32976c5491ad5a2dc98950cf5abdaa511651f861818->leave($__internal_075c89dbb47b070ff7eab32976c5491ad5a2dc98950cf5abdaa511651f861818_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_b75198ded66db63e06f8521e377bb4a6e0c547de4efd8e452ff6cded4a539a15 = $this->env->getExtension("native_profiler");
        $__internal_b75198ded66db63e06f8521e377bb4a6e0c547de4efd8e452ff6cded4a539a15->enter($__internal_b75198ded66db63e06f8521e377bb4a6e0c547de4efd8e452ff6cded4a539a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_b75198ded66db63e06f8521e377bb4a6e0c547de4efd8e452ff6cded4a539a15->leave($__internal_b75198ded66db63e06f8521e377bb4a6e0c547de4efd8e452ff6cded4a539a15_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c6b25fafb03894adc38bfebc2d6fe0d4ef40b8b9bf3c800f1a50ba89e882bc9 = $this->env->getExtension("native_profiler");
        $__internal_0c6b25fafb03894adc38bfebc2d6fe0d4ef40b8b9bf3c800f1a50ba89e882bc9->enter($__internal_0c6b25fafb03894adc38bfebc2d6fe0d4ef40b8b9bf3c800f1a50ba89e882bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0c6b25fafb03894adc38bfebc2d6fe0d4ef40b8b9bf3c800f1a50ba89e882bc9->leave($__internal_0c6b25fafb03894adc38bfebc2d6fe0d4ef40b8b9bf3c800f1a50ba89e882bc9_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_37eda71ac3227782ed94c93bfc84de0b018dc2ac62f60b81c05d85f705f46d10 = $this->env->getExtension("native_profiler");
        $__internal_37eda71ac3227782ed94c93bfc84de0b018dc2ac62f60b81c05d85f705f46d10->enter($__internal_37eda71ac3227782ed94c93bfc84de0b018dc2ac62f60b81c05d85f705f46d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_37eda71ac3227782ed94c93bfc84de0b018dc2ac62f60b81c05d85f705f46d10->leave($__internal_37eda71ac3227782ed94c93bfc84de0b018dc2ac62f60b81c05d85f705f46d10_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_3067e13a7f75bcb675af0be9093d326fe2642cabdf58255e075b9f18374f115f = $this->env->getExtension("native_profiler");
        $__internal_3067e13a7f75bcb675af0be9093d326fe2642cabdf58255e075b9f18374f115f->enter($__internal_3067e13a7f75bcb675af0be9093d326fe2642cabdf58255e075b9f18374f115f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_3067e13a7f75bcb675af0be9093d326fe2642cabdf58255e075b9f18374f115f->leave($__internal_3067e13a7f75bcb675af0be9093d326fe2642cabdf58255e075b9f18374f115f_prof);

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
