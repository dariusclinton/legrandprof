<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d9b9399575216c1afe7e03521cf79f2f433207c32c1fa691555ad9baff499b7a extends Twig_Template
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
        $__internal_c05622029fd8fb684b73377c4af12eba25566d6eae08b2cbc233f16cd021103e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05622029fd8fb684b73377c4af12eba25566d6eae08b2cbc233f16cd021103e->enter($__internal_c05622029fd8fb684b73377c4af12eba25566d6eae08b2cbc233f16cd021103e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c05622029fd8fb684b73377c4af12eba25566d6eae08b2cbc233f16cd021103e->leave($__internal_c05622029fd8fb684b73377c4af12eba25566d6eae08b2cbc233f16cd021103e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_35ec109c49afaf11b0aa8228c7c51619d98decc3fbde1799fc18c7323f40bfae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ec109c49afaf11b0aa8228c7c51619d98decc3fbde1799fc18c7323f40bfae->enter($__internal_35ec109c49afaf11b0aa8228c7c51619d98decc3fbde1799fc18c7323f40bfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_35ec109c49afaf11b0aa8228c7c51619d98decc3fbde1799fc18c7323f40bfae->leave($__internal_35ec109c49afaf11b0aa8228c7c51619d98decc3fbde1799fc18c7323f40bfae_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_5e677f15483ce0f648feb55fd079e5df555c63fe4b2b71c93f3b5d12f2a771a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e677f15483ce0f648feb55fd079e5df555c63fe4b2b71c93f3b5d12f2a771a4->enter($__internal_5e677f15483ce0f648feb55fd079e5df555c63fe4b2b71c93f3b5d12f2a771a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_5e677f15483ce0f648feb55fd079e5df555c63fe4b2b71c93f3b5d12f2a771a4->leave($__internal_5e677f15483ce0f648feb55fd079e5df555c63fe4b2b71c93f3b5d12f2a771a4_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdd837203dcce4fc698d1f6c7d28b492259e840522a15dfefe6ec54172179ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd837203dcce4fc698d1f6c7d28b492259e840522a15dfefe6ec54172179ac8->enter($__internal_bdd837203dcce4fc698d1f6c7d28b492259e840522a15dfefe6ec54172179ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_bdd837203dcce4fc698d1f6c7d28b492259e840522a15dfefe6ec54172179ac8->leave($__internal_bdd837203dcce4fc698d1f6c7d28b492259e840522a15dfefe6ec54172179ac8_prof);

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
