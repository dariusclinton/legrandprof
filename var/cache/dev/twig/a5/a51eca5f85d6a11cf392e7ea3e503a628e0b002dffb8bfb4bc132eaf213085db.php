<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_c77483159a4284352d6b02b3e9542d6f3d0dea104e70b019c49097ff87b6af12 extends Twig_Template
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
        $__internal_de4eb0642f72e2c20b5ed240deec725974e28f1e168897856b497156f7250cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4eb0642f72e2c20b5ed240deec725974e28f1e168897856b497156f7250cab->enter($__internal_de4eb0642f72e2c20b5ed240deec725974e28f1e168897856b497156f7250cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de4eb0642f72e2c20b5ed240deec725974e28f1e168897856b497156f7250cab->leave($__internal_de4eb0642f72e2c20b5ed240deec725974e28f1e168897856b497156f7250cab_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_3cb110828b0daedf0636ed7a91752495c3084b6e70da53d3f9db95fbb6b5d069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb110828b0daedf0636ed7a91752495c3084b6e70da53d3f9db95fbb6b5d069->enter($__internal_3cb110828b0daedf0636ed7a91752495c3084b6e70da53d3f9db95fbb6b5d069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_3cb110828b0daedf0636ed7a91752495c3084b6e70da53d3f9db95fbb6b5d069->leave($__internal_3cb110828b0daedf0636ed7a91752495c3084b6e70da53d3f9db95fbb6b5d069_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_7a8df7a7835998679d47c00ba168c1009accaed152ddda9d135fa4874f995383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a8df7a7835998679d47c00ba168c1009accaed152ddda9d135fa4874f995383->enter($__internal_7a8df7a7835998679d47c00ba168c1009accaed152ddda9d135fa4874f995383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_7a8df7a7835998679d47c00ba168c1009accaed152ddda9d135fa4874f995383->leave($__internal_7a8df7a7835998679d47c00ba168c1009accaed152ddda9d135fa4874f995383_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_95d127227ef299110c9ad9282439ba41ab696fdd812a4ddd6577b529289857cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d127227ef299110c9ad9282439ba41ab696fdd812a4ddd6577b529289857cc->enter($__internal_95d127227ef299110c9ad9282439ba41ab696fdd812a4ddd6577b529289857cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_95d127227ef299110c9ad9282439ba41ab696fdd812a4ddd6577b529289857cc->leave($__internal_95d127227ef299110c9ad9282439ba41ab696fdd812a4ddd6577b529289857cc_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_42fe54e99dd8247c5b1c266f63b71146edc8cae8a49af6e333593da570d67375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42fe54e99dd8247c5b1c266f63b71146edc8cae8a49af6e333593da570d67375->enter($__internal_42fe54e99dd8247c5b1c266f63b71146edc8cae8a49af6e333593da570d67375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_42fe54e99dd8247c5b1c266f63b71146edc8cae8a49af6e333593da570d67375->leave($__internal_42fe54e99dd8247c5b1c266f63b71146edc8cae8a49af6e333593da570d67375_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_354a4fb469c17dec839b543cc7e684ab306dede0b463d18d6dd4ab6ee1dcc828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354a4fb469c17dec839b543cc7e684ab306dede0b463d18d6dd4ab6ee1dcc828->enter($__internal_354a4fb469c17dec839b543cc7e684ab306dede0b463d18d6dd4ab6ee1dcc828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_354a4fb469c17dec839b543cc7e684ab306dede0b463d18d6dd4ab6ee1dcc828->leave($__internal_354a4fb469c17dec839b543cc7e684ab306dede0b463d18d6dd4ab6ee1dcc828_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_8d261589d2b22b367111d85dc4beb99eed1f65add2ccfa71d734947e22a265d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d261589d2b22b367111d85dc4beb99eed1f65add2ccfa71d734947e22a265d3->enter($__internal_8d261589d2b22b367111d85dc4beb99eed1f65add2ccfa71d734947e22a265d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_8d261589d2b22b367111d85dc4beb99eed1f65add2ccfa71d734947e22a265d3->leave($__internal_8d261589d2b22b367111d85dc4beb99eed1f65add2ccfa71d734947e22a265d3_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_4b633cf643399756699533db33f6bb5855ab03bc7e11ae4863b5af5d32292910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b633cf643399756699533db33f6bb5855ab03bc7e11ae4863b5af5d32292910->enter($__internal_4b633cf643399756699533db33f6bb5855ab03bc7e11ae4863b5af5d32292910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_4b633cf643399756699533db33f6bb5855ab03bc7e11ae4863b5af5d32292910->leave($__internal_4b633cf643399756699533db33f6bb5855ab03bc7e11ae4863b5af5d32292910_prof);

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
