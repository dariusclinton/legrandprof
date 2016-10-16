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
        $__internal_859b169908de5bd3634090ef7eb900c3958551a61d01bb50094ae70e6a583f7e = $this->env->getExtension("native_profiler");
        $__internal_859b169908de5bd3634090ef7eb900c3958551a61d01bb50094ae70e6a583f7e->enter($__internal_859b169908de5bd3634090ef7eb900c3958551a61d01bb50094ae70e6a583f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_859b169908de5bd3634090ef7eb900c3958551a61d01bb50094ae70e6a583f7e->leave($__internal_859b169908de5bd3634090ef7eb900c3958551a61d01bb50094ae70e6a583f7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba6182f079600f75f36e022a2955bbcf8e570a62bba7caf6e142fdf6ef636a30 = $this->env->getExtension("native_profiler");
        $__internal_ba6182f079600f75f36e022a2955bbcf8e570a62bba7caf6e142fdf6ef636a30->enter($__internal_ba6182f079600f75f36e022a2955bbcf8e570a62bba7caf6e142fdf6ef636a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ba6182f079600f75f36e022a2955bbcf8e570a62bba7caf6e142fdf6ef636a30->leave($__internal_ba6182f079600f75f36e022a2955bbcf8e570a62bba7caf6e142fdf6ef636a30_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_25a0f7aa19930c959d94e9ccf2dee67e646c9071ccf9b6907e256e18e13e9e75 = $this->env->getExtension("native_profiler");
        $__internal_25a0f7aa19930c959d94e9ccf2dee67e646c9071ccf9b6907e256e18e13e9e75->enter($__internal_25a0f7aa19930c959d94e9ccf2dee67e646c9071ccf9b6907e256e18e13e9e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_25a0f7aa19930c959d94e9ccf2dee67e646c9071ccf9b6907e256e18e13e9e75->leave($__internal_25a0f7aa19930c959d94e9ccf2dee67e646c9071ccf9b6907e256e18e13e9e75_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4811f9104df847f956d8e115e846eedd9a69a2607616981cb06bd0cdeb048cc = $this->env->getExtension("native_profiler");
        $__internal_f4811f9104df847f956d8e115e846eedd9a69a2607616981cb06bd0cdeb048cc->enter($__internal_f4811f9104df847f956d8e115e846eedd9a69a2607616981cb06bd0cdeb048cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_f4811f9104df847f956d8e115e846eedd9a69a2607616981cb06bd0cdeb048cc->leave($__internal_f4811f9104df847f956d8e115e846eedd9a69a2607616981cb06bd0cdeb048cc_prof);

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
