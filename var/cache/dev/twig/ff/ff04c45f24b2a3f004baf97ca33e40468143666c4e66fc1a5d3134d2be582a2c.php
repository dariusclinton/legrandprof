<?php

/* LGPUserBundle:Paiement:add.html.twig */
class __TwigTemplate_94bd12566cebe1e29a77311e1a8b290fa94810dc690ce7d2623a584b44140c98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Paiement:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f462119a67270e9ec1200943c04885b3a1f393d601ce44245e37c846c299b6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f462119a67270e9ec1200943c04885b3a1f393d601ce44245e37c846c299b6d9->enter($__internal_f462119a67270e9ec1200943c04885b3a1f393d601ce44245e37c846c299b6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Paiement:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f462119a67270e9ec1200943c04885b3a1f393d601ce44245e37c846c299b6d9->leave($__internal_f462119a67270e9ec1200943c04885b3a1f393d601ce44245e37c846c299b6d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fb5b85a9c4eed8102e4f973007f847057c540a450f1d26ee5ebbfc19e1a005c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb5b85a9c4eed8102e4f973007f847057c540a450f1d26ee5ebbfc19e1a005c->enter($__internal_1fb5b85a9c4eed8102e4f973007f847057c540a450f1d26ee5ebbfc19e1a005c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    paiement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1fb5b85a9c4eed8102e4f973007f847057c540a450f1d26ee5ebbfc19e1a005c->leave($__internal_1fb5b85a9c4eed8102e4f973007f847057c540a450f1d26ee5ebbfc19e1a005c_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_0b41942b1d28beae165d06fc57e4e31a28a5a134260c9f126043c5eb0d7144a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b41942b1d28beae165d06fc57e4e31a28a5a134260c9f126043c5eb0d7144a6->enter($__internal_0b41942b1d28beae165d06fc57e4e31a28a5a134260c9f126043c5eb0d7144a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_0b41942b1d28beae165d06fc57e4e31a28a5a134260c9f126043c5eb0d7144a6->leave($__internal_0b41942b1d28beae165d06fc57e4e31a28a5a134260c9f126043c5eb0d7144a6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bac5abc46127d16020bcd72ca449b48f937d2146d710c8c12daf8c175287b7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac5abc46127d16020bcd72ca449b48f937d2146d710c8c12daf8c175287b7ad->enter($__internal_bac5abc46127d16020bcd72ca449b48f937d2146d710c8c12daf8c175287b7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">

                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_bac5abc46127d16020bcd72ca449b48f937d2146d710c8c12daf8c175287b7ad->leave($__internal_bac5abc46127d16020bcd72ca449b48f937d2146d710c8c12daf8c175287b7ad_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Paiement:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    paiement - {{ parent() }}
{% endblock %}

{% block header_submenu %}
    {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}

    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">

                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}";
    }
}
