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
        $__internal_f86aebfdaa0e4a7db49d03de4150d847b61c6201c23cf20aea5656e714315148 = $this->env->getExtension("native_profiler");
        $__internal_f86aebfdaa0e4a7db49d03de4150d847b61c6201c23cf20aea5656e714315148->enter($__internal_f86aebfdaa0e4a7db49d03de4150d847b61c6201c23cf20aea5656e714315148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f86aebfdaa0e4a7db49d03de4150d847b61c6201c23cf20aea5656e714315148->leave($__internal_f86aebfdaa0e4a7db49d03de4150d847b61c6201c23cf20aea5656e714315148_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_c93f0900caf9887b640002dc0f7551ebab55b21b8c6cd0b29af16a8e9a9749dd = $this->env->getExtension("native_profiler");
        $__internal_c93f0900caf9887b640002dc0f7551ebab55b21b8c6cd0b29af16a8e9a9749dd->enter($__internal_c93f0900caf9887b640002dc0f7551ebab55b21b8c6cd0b29af16a8e9a9749dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_c93f0900caf9887b640002dc0f7551ebab55b21b8c6cd0b29af16a8e9a9749dd->leave($__internal_c93f0900caf9887b640002dc0f7551ebab55b21b8c6cd0b29af16a8e9a9749dd_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_d984ae7a5c315efcf9cc1c0c3f125732c3c46d1139cca0d07132ffee4835ee7f = $this->env->getExtension("native_profiler");
        $__internal_d984ae7a5c315efcf9cc1c0c3f125732c3c46d1139cca0d07132ffee4835ee7f->enter($__internal_d984ae7a5c315efcf9cc1c0c3f125732c3c46d1139cca0d07132ffee4835ee7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_d984ae7a5c315efcf9cc1c0c3f125732c3c46d1139cca0d07132ffee4835ee7f->leave($__internal_d984ae7a5c315efcf9cc1c0c3f125732c3c46d1139cca0d07132ffee4835ee7f_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_33d4fed49c0fd671e0fc95c3317ddc8b71afe0f73e4c468480fa9b663ad91047 = $this->env->getExtension("native_profiler");
        $__internal_33d4fed49c0fd671e0fc95c3317ddc8b71afe0f73e4c468480fa9b663ad91047->enter($__internal_33d4fed49c0fd671e0fc95c3317ddc8b71afe0f73e4c468480fa9b663ad91047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_33d4fed49c0fd671e0fc95c3317ddc8b71afe0f73e4c468480fa9b663ad91047->leave($__internal_33d4fed49c0fd671e0fc95c3317ddc8b71afe0f73e4c468480fa9b663ad91047_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_ad2797f2ca3af0057615dbde403d2f53c22c763b66b460e152258057b1c9e63d = $this->env->getExtension("native_profiler");
        $__internal_ad2797f2ca3af0057615dbde403d2f53c22c763b66b460e152258057b1c9e63d->enter($__internal_ad2797f2ca3af0057615dbde403d2f53c22c763b66b460e152258057b1c9e63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_ad2797f2ca3af0057615dbde403d2f53c22c763b66b460e152258057b1c9e63d->leave($__internal_ad2797f2ca3af0057615dbde403d2f53c22c763b66b460e152258057b1c9e63d_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3cfefb59bc8ef115761515bc13dc82727bd5be9703fa27e49165e36632799b1b = $this->env->getExtension("native_profiler");
        $__internal_3cfefb59bc8ef115761515bc13dc82727bd5be9703fa27e49165e36632799b1b->enter($__internal_3cfefb59bc8ef115761515bc13dc82727bd5be9703fa27e49165e36632799b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3cfefb59bc8ef115761515bc13dc82727bd5be9703fa27e49165e36632799b1b->leave($__internal_3cfefb59bc8ef115761515bc13dc82727bd5be9703fa27e49165e36632799b1b_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_801cf7ee950febfb85391b2619ef288c5b0e0a8ba8de25a0359d0b8df390ab05 = $this->env->getExtension("native_profiler");
        $__internal_801cf7ee950febfb85391b2619ef288c5b0e0a8ba8de25a0359d0b8df390ab05->enter($__internal_801cf7ee950febfb85391b2619ef288c5b0e0a8ba8de25a0359d0b8df390ab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_801cf7ee950febfb85391b2619ef288c5b0e0a8ba8de25a0359d0b8df390ab05->leave($__internal_801cf7ee950febfb85391b2619ef288c5b0e0a8ba8de25a0359d0b8df390ab05_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_9c27f473a5844d4e59586e9e5fbd4c1ebac9fa3b592e59e1de1c5fdc27d5fdaa = $this->env->getExtension("native_profiler");
        $__internal_9c27f473a5844d4e59586e9e5fbd4c1ebac9fa3b592e59e1de1c5fdc27d5fdaa->enter($__internal_9c27f473a5844d4e59586e9e5fbd4c1ebac9fa3b592e59e1de1c5fdc27d5fdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_9c27f473a5844d4e59586e9e5fbd4c1ebac9fa3b592e59e1de1c5fdc27d5fdaa->leave($__internal_9c27f473a5844d4e59586e9e5fbd4c1ebac9fa3b592e59e1de1c5fdc27d5fdaa_prof);

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
