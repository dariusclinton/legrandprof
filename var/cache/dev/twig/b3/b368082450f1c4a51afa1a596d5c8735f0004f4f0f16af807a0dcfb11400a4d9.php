<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_51ab9805b8091f065e4d7514a5d6b1f7e98186476f1409be8aec14f2662c93ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dae781aa4242736c9d49a231d603a85b7e8cdbfcdfc8dd20563f05967987ca45 = $this->env->getExtension("native_profiler");
        $__internal_dae781aa4242736c9d49a231d603a85b7e8cdbfcdfc8dd20563f05967987ca45->enter($__internal_dae781aa4242736c9d49a231d603a85b7e8cdbfcdfc8dd20563f05967987ca45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dae781aa4242736c9d49a231d603a85b7e8cdbfcdfc8dd20563f05967987ca45->leave($__internal_dae781aa4242736c9d49a231d603a85b7e8cdbfcdfc8dd20563f05967987ca45_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6687d7fbedb7f841e9a58419c62d4d9c7f824c461798ad81968d26a458b393c = $this->env->getExtension("native_profiler");
        $__internal_d6687d7fbedb7f841e9a58419c62d4d9c7f824c461798ad81968d26a458b393c->enter($__internal_d6687d7fbedb7f841e9a58419c62d4d9c7f824c461798ad81968d26a458b393c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d6687d7fbedb7f841e9a58419c62d4d9c7f824c461798ad81968d26a458b393c->leave($__internal_d6687d7fbedb7f841e9a58419c62d4d9c7f824c461798ad81968d26a458b393c_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_60060c0285e9c1fa73ca2638e977a00387080c14310c73e2bae7da5989e9663f = $this->env->getExtension("native_profiler");
        $__internal_60060c0285e9c1fa73ca2638e977a00387080c14310c73e2bae7da5989e9663f->enter($__internal_60060c0285e9c1fa73ca2638e977a00387080c14310c73e2bae7da5989e9663f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_60060c0285e9c1fa73ca2638e977a00387080c14310c73e2bae7da5989e9663f->leave($__internal_60060c0285e9c1fa73ca2638e977a00387080c14310c73e2bae7da5989e9663f_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcc3f0a673235e88367e6f6a4041c30f11b82e21d14c6d5be7c11f2c88a054ee = $this->env->getExtension("native_profiler");
        $__internal_fcc3f0a673235e88367e6f6a4041c30f11b82e21d14c6d5be7c11f2c88a054ee->enter($__internal_fcc3f0a673235e88367e6f6a4041c30f11b82e21d14c6d5be7c11f2c88a054ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_fcc3f0a673235e88367e6f6a4041c30f11b82e21d14c6d5be7c11f2c88a054ee->leave($__internal_fcc3f0a673235e88367e6f6a4041c30f11b82e21d14c6d5be7c11f2c88a054ee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  82 => 13,  79 => 12,  73 => 11,  64 => 8,  56 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}
    {{ app.user.prenoms }} {{ app.user.nom }} - Edit profile - {{ parent() }}
{% endblock %}

{% block header_submenu %} 
    {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block fos_user_content %}
    <div class=\"bg-grey dashboard\">
        {% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
    </div>
{% endblock fos_user_content %}
";
    }
}
