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
        $__internal_bb7fd993897250298882cb00c1e485d92f0cd6f25a43d92d3285f7c5c6fc1ff7 = $this->env->getExtension("native_profiler");
        $__internal_bb7fd993897250298882cb00c1e485d92f0cd6f25a43d92d3285f7c5c6fc1ff7->enter($__internal_bb7fd993897250298882cb00c1e485d92f0cd6f25a43d92d3285f7c5c6fc1ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb7fd993897250298882cb00c1e485d92f0cd6f25a43d92d3285f7c5c6fc1ff7->leave($__internal_bb7fd993897250298882cb00c1e485d92f0cd6f25a43d92d3285f7c5c6fc1ff7_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_c320d2e65b061eccb410afdb9ef711ebe9efb109df14b5e3d5440c02422a6a28 = $this->env->getExtension("native_profiler");
        $__internal_c320d2e65b061eccb410afdb9ef711ebe9efb109df14b5e3d5440c02422a6a28->enter($__internal_c320d2e65b061eccb410afdb9ef711ebe9efb109df14b5e3d5440c02422a6a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_c320d2e65b061eccb410afdb9ef711ebe9efb109df14b5e3d5440c02422a6a28->leave($__internal_c320d2e65b061eccb410afdb9ef711ebe9efb109df14b5e3d5440c02422a6a28_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_e75a5325cede3ed7380a37020a09e2331270dd552ae317d240a4c817601c6c43 = $this->env->getExtension("native_profiler");
        $__internal_e75a5325cede3ed7380a37020a09e2331270dd552ae317d240a4c817601c6c43->enter($__internal_e75a5325cede3ed7380a37020a09e2331270dd552ae317d240a4c817601c6c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_e75a5325cede3ed7380a37020a09e2331270dd552ae317d240a4c817601c6c43->leave($__internal_e75a5325cede3ed7380a37020a09e2331270dd552ae317d240a4c817601c6c43_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_7cafb4d555326f1eb2375e5de2cc3aac844bf432f349313427216a16eb6158a0 = $this->env->getExtension("native_profiler");
        $__internal_7cafb4d555326f1eb2375e5de2cc3aac844bf432f349313427216a16eb6158a0->enter($__internal_7cafb4d555326f1eb2375e5de2cc3aac844bf432f349313427216a16eb6158a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_7cafb4d555326f1eb2375e5de2cc3aac844bf432f349313427216a16eb6158a0->leave($__internal_7cafb4d555326f1eb2375e5de2cc3aac844bf432f349313427216a16eb6158a0_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_4f2148e56760d9c49d6521060354d8c4934f9c22adb5c5538ae61ec1b2dba5bb = $this->env->getExtension("native_profiler");
        $__internal_4f2148e56760d9c49d6521060354d8c4934f9c22adb5c5538ae61ec1b2dba5bb->enter($__internal_4f2148e56760d9c49d6521060354d8c4934f9c22adb5c5538ae61ec1b2dba5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_4f2148e56760d9c49d6521060354d8c4934f9c22adb5c5538ae61ec1b2dba5bb->leave($__internal_4f2148e56760d9c49d6521060354d8c4934f9c22adb5c5538ae61ec1b2dba5bb_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81e099306a1cc6fa04692f9e46e16f9cdde311036a611a76f290c25b27e06837 = $this->env->getExtension("native_profiler");
        $__internal_81e099306a1cc6fa04692f9e46e16f9cdde311036a611a76f290c25b27e06837->enter($__internal_81e099306a1cc6fa04692f9e46e16f9cdde311036a611a76f290c25b27e06837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_81e099306a1cc6fa04692f9e46e16f9cdde311036a611a76f290c25b27e06837->leave($__internal_81e099306a1cc6fa04692f9e46e16f9cdde311036a611a76f290c25b27e06837_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_5575dbe56cf3adb8c51ff349df1ab1bb4c4c8c324dfa541c3174ebed5816ba11 = $this->env->getExtension("native_profiler");
        $__internal_5575dbe56cf3adb8c51ff349df1ab1bb4c4c8c324dfa541c3174ebed5816ba11->enter($__internal_5575dbe56cf3adb8c51ff349df1ab1bb4c4c8c324dfa541c3174ebed5816ba11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_5575dbe56cf3adb8c51ff349df1ab1bb4c4c8c324dfa541c3174ebed5816ba11->leave($__internal_5575dbe56cf3adb8c51ff349df1ab1bb4c4c8c324dfa541c3174ebed5816ba11_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_eb95311d70839f83741eab078ef449c49e0202a6e2adb0a2a25eb323e2010c4d = $this->env->getExtension("native_profiler");
        $__internal_eb95311d70839f83741eab078ef449c49e0202a6e2adb0a2a25eb323e2010c4d->enter($__internal_eb95311d70839f83741eab078ef449c49e0202a6e2adb0a2a25eb323e2010c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_eb95311d70839f83741eab078ef449c49e0202a6e2adb0a2a25eb323e2010c4d->leave($__internal_eb95311d70839f83741eab078ef449c49e0202a6e2adb0a2a25eb323e2010c4d_prof);

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
