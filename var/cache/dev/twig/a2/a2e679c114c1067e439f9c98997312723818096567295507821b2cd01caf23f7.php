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
        $__internal_1e981b1af06136000d6548d879fb850294fd3dce543227302b4c95a276d878bf = $this->env->getExtension("native_profiler");
        $__internal_1e981b1af06136000d6548d879fb850294fd3dce543227302b4c95a276d878bf->enter($__internal_1e981b1af06136000d6548d879fb850294fd3dce543227302b4c95a276d878bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e981b1af06136000d6548d879fb850294fd3dce543227302b4c95a276d878bf->leave($__internal_1e981b1af06136000d6548d879fb850294fd3dce543227302b4c95a276d878bf_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_6831b15f0fe5d22937298a69e0a7b7140198853316c5ac252d171063af28111c = $this->env->getExtension("native_profiler");
        $__internal_6831b15f0fe5d22937298a69e0a7b7140198853316c5ac252d171063af28111c->enter($__internal_6831b15f0fe5d22937298a69e0a7b7140198853316c5ac252d171063af28111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_6831b15f0fe5d22937298a69e0a7b7140198853316c5ac252d171063af28111c->leave($__internal_6831b15f0fe5d22937298a69e0a7b7140198853316c5ac252d171063af28111c_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_c1c32d273714bcd2cbcb1da27912900abed1928b56ee22574c4433a09f61799f = $this->env->getExtension("native_profiler");
        $__internal_c1c32d273714bcd2cbcb1da27912900abed1928b56ee22574c4433a09f61799f->enter($__internal_c1c32d273714bcd2cbcb1da27912900abed1928b56ee22574c4433a09f61799f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_c1c32d273714bcd2cbcb1da27912900abed1928b56ee22574c4433a09f61799f->leave($__internal_c1c32d273714bcd2cbcb1da27912900abed1928b56ee22574c4433a09f61799f_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_2f2e96263bddfcde4f597c9ade97faed568f1d9f70c30bf2ba2f9ddcd421091a = $this->env->getExtension("native_profiler");
        $__internal_2f2e96263bddfcde4f597c9ade97faed568f1d9f70c30bf2ba2f9ddcd421091a->enter($__internal_2f2e96263bddfcde4f597c9ade97faed568f1d9f70c30bf2ba2f9ddcd421091a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_2f2e96263bddfcde4f597c9ade97faed568f1d9f70c30bf2ba2f9ddcd421091a->leave($__internal_2f2e96263bddfcde4f597c9ade97faed568f1d9f70c30bf2ba2f9ddcd421091a_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_f6f4ab1be8a8271ed60ca609b180854a1c661fbf0deefaa395b02f5b4a93bfac = $this->env->getExtension("native_profiler");
        $__internal_f6f4ab1be8a8271ed60ca609b180854a1c661fbf0deefaa395b02f5b4a93bfac->enter($__internal_f6f4ab1be8a8271ed60ca609b180854a1c661fbf0deefaa395b02f5b4a93bfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_f6f4ab1be8a8271ed60ca609b180854a1c661fbf0deefaa395b02f5b4a93bfac->leave($__internal_f6f4ab1be8a8271ed60ca609b180854a1c661fbf0deefaa395b02f5b4a93bfac_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0aa8d110aadaf9dcadb1df11097302f73ccec7120df3364e265ef4d0a569b3d = $this->env->getExtension("native_profiler");
        $__internal_b0aa8d110aadaf9dcadb1df11097302f73ccec7120df3364e265ef4d0a569b3d->enter($__internal_b0aa8d110aadaf9dcadb1df11097302f73ccec7120df3364e265ef4d0a569b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b0aa8d110aadaf9dcadb1df11097302f73ccec7120df3364e265ef4d0a569b3d->leave($__internal_b0aa8d110aadaf9dcadb1df11097302f73ccec7120df3364e265ef4d0a569b3d_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_cd0915fd2f34c4d639d2ed39d8b5556902e4acee9bedc3d1303c014b37a5837c = $this->env->getExtension("native_profiler");
        $__internal_cd0915fd2f34c4d639d2ed39d8b5556902e4acee9bedc3d1303c014b37a5837c->enter($__internal_cd0915fd2f34c4d639d2ed39d8b5556902e4acee9bedc3d1303c014b37a5837c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_cd0915fd2f34c4d639d2ed39d8b5556902e4acee9bedc3d1303c014b37a5837c->leave($__internal_cd0915fd2f34c4d639d2ed39d8b5556902e4acee9bedc3d1303c014b37a5837c_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_c181532df5df96e4b12f60615899179ce7064e5073a7533549e1aa6ca1dd5266 = $this->env->getExtension("native_profiler");
        $__internal_c181532df5df96e4b12f60615899179ce7064e5073a7533549e1aa6ca1dd5266->enter($__internal_c181532df5df96e4b12f60615899179ce7064e5073a7533549e1aa6ca1dd5266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_c181532df5df96e4b12f60615899179ce7064e5073a7533549e1aa6ca1dd5266->leave($__internal_c181532df5df96e4b12f60615899179ce7064e5073a7533549e1aa6ca1dd5266_prof);

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
