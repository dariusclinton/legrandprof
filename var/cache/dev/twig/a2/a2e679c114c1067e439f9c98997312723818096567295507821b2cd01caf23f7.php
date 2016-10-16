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
        $__internal_bbc83143dfb6995555d980e01f4c6bef7078d6524ee8274206652c635e9ef05f = $this->env->getExtension("native_profiler");
        $__internal_bbc83143dfb6995555d980e01f4c6bef7078d6524ee8274206652c635e9ef05f->enter($__internal_bbc83143dfb6995555d980e01f4c6bef7078d6524ee8274206652c635e9ef05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbc83143dfb6995555d980e01f4c6bef7078d6524ee8274206652c635e9ef05f->leave($__internal_bbc83143dfb6995555d980e01f4c6bef7078d6524ee8274206652c635e9ef05f_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_1a4f37af4e4f8d23155e9c745dff6b13204ebca1b07355ab971cd9510972b670 = $this->env->getExtension("native_profiler");
        $__internal_1a4f37af4e4f8d23155e9c745dff6b13204ebca1b07355ab971cd9510972b670->enter($__internal_1a4f37af4e4f8d23155e9c745dff6b13204ebca1b07355ab971cd9510972b670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_1a4f37af4e4f8d23155e9c745dff6b13204ebca1b07355ab971cd9510972b670->leave($__internal_1a4f37af4e4f8d23155e9c745dff6b13204ebca1b07355ab971cd9510972b670_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_2d340cc888909f8daadfb5d349c2fc34c75e994b33e5976aa331cac89ad8e243 = $this->env->getExtension("native_profiler");
        $__internal_2d340cc888909f8daadfb5d349c2fc34c75e994b33e5976aa331cac89ad8e243->enter($__internal_2d340cc888909f8daadfb5d349c2fc34c75e994b33e5976aa331cac89ad8e243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_2d340cc888909f8daadfb5d349c2fc34c75e994b33e5976aa331cac89ad8e243->leave($__internal_2d340cc888909f8daadfb5d349c2fc34c75e994b33e5976aa331cac89ad8e243_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_12ac276a7805ede1bda118fd8daec96bd8287095dc6ae525af2c92b5d0768045 = $this->env->getExtension("native_profiler");
        $__internal_12ac276a7805ede1bda118fd8daec96bd8287095dc6ae525af2c92b5d0768045->enter($__internal_12ac276a7805ede1bda118fd8daec96bd8287095dc6ae525af2c92b5d0768045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_12ac276a7805ede1bda118fd8daec96bd8287095dc6ae525af2c92b5d0768045->leave($__internal_12ac276a7805ede1bda118fd8daec96bd8287095dc6ae525af2c92b5d0768045_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_a24622ecc100903fa2dfb7b44d41d4b09730509ec711fd2ff1c0ce2567dce535 = $this->env->getExtension("native_profiler");
        $__internal_a24622ecc100903fa2dfb7b44d41d4b09730509ec711fd2ff1c0ce2567dce535->enter($__internal_a24622ecc100903fa2dfb7b44d41d4b09730509ec711fd2ff1c0ce2567dce535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_a24622ecc100903fa2dfb7b44d41d4b09730509ec711fd2ff1c0ce2567dce535->leave($__internal_a24622ecc100903fa2dfb7b44d41d4b09730509ec711fd2ff1c0ce2567dce535_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b4ad8cced10bee32555cf5fb859738125fbe8186d7f640d4dd2d249169557d7 = $this->env->getExtension("native_profiler");
        $__internal_1b4ad8cced10bee32555cf5fb859738125fbe8186d7f640d4dd2d249169557d7->enter($__internal_1b4ad8cced10bee32555cf5fb859738125fbe8186d7f640d4dd2d249169557d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1b4ad8cced10bee32555cf5fb859738125fbe8186d7f640d4dd2d249169557d7->leave($__internal_1b4ad8cced10bee32555cf5fb859738125fbe8186d7f640d4dd2d249169557d7_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_71bf016a6344ca007531cf1d59711af9634d13150f2b7bc141b2d437f95b201b = $this->env->getExtension("native_profiler");
        $__internal_71bf016a6344ca007531cf1d59711af9634d13150f2b7bc141b2d437f95b201b->enter($__internal_71bf016a6344ca007531cf1d59711af9634d13150f2b7bc141b2d437f95b201b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_71bf016a6344ca007531cf1d59711af9634d13150f2b7bc141b2d437f95b201b->leave($__internal_71bf016a6344ca007531cf1d59711af9634d13150f2b7bc141b2d437f95b201b_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_886199b24174290772fcf21ca7f23faa144aa519f9050bfbde03f10978535b38 = $this->env->getExtension("native_profiler");
        $__internal_886199b24174290772fcf21ca7f23faa144aa519f9050bfbde03f10978535b38->enter($__internal_886199b24174290772fcf21ca7f23faa144aa519f9050bfbde03f10978535b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_886199b24174290772fcf21ca7f23faa144aa519f9050bfbde03f10978535b38->leave($__internal_886199b24174290772fcf21ca7f23faa144aa519f9050bfbde03f10978535b38_prof);

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
