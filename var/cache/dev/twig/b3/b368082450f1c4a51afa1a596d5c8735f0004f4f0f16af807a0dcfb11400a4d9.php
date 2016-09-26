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
        $__internal_ecc6ff6dbc8183010877f52d0c52f36a0d17d303af4dfc6ea56a6664caecb24d = $this->env->getExtension("native_profiler");
        $__internal_ecc6ff6dbc8183010877f52d0c52f36a0d17d303af4dfc6ea56a6664caecb24d->enter($__internal_ecc6ff6dbc8183010877f52d0c52f36a0d17d303af4dfc6ea56a6664caecb24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecc6ff6dbc8183010877f52d0c52f36a0d17d303af4dfc6ea56a6664caecb24d->leave($__internal_ecc6ff6dbc8183010877f52d0c52f36a0d17d303af4dfc6ea56a6664caecb24d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e03ae0d76189f88b8fc39a00b317e70d0e3ee048903e2ec1084cb479f7a276dd = $this->env->getExtension("native_profiler");
        $__internal_e03ae0d76189f88b8fc39a00b317e70d0e3ee048903e2ec1084cb479f7a276dd->enter($__internal_e03ae0d76189f88b8fc39a00b317e70d0e3ee048903e2ec1084cb479f7a276dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e03ae0d76189f88b8fc39a00b317e70d0e3ee048903e2ec1084cb479f7a276dd->leave($__internal_e03ae0d76189f88b8fc39a00b317e70d0e3ee048903e2ec1084cb479f7a276dd_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_11963771a8fd8d48c0fca252da0f3bf2c29d4e19a20f9d0b0e2ea1a5b01a9991 = $this->env->getExtension("native_profiler");
        $__internal_11963771a8fd8d48c0fca252da0f3bf2c29d4e19a20f9d0b0e2ea1a5b01a9991->enter($__internal_11963771a8fd8d48c0fca252da0f3bf2c29d4e19a20f9d0b0e2ea1a5b01a9991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_11963771a8fd8d48c0fca252da0f3bf2c29d4e19a20f9d0b0e2ea1a5b01a9991->leave($__internal_11963771a8fd8d48c0fca252da0f3bf2c29d4e19a20f9d0b0e2ea1a5b01a9991_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be4299766101cb12d65bfb502e99005a6973a3cc31452c89a577d38eff567a30 = $this->env->getExtension("native_profiler");
        $__internal_be4299766101cb12d65bfb502e99005a6973a3cc31452c89a577d38eff567a30->enter($__internal_be4299766101cb12d65bfb502e99005a6973a3cc31452c89a577d38eff567a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_be4299766101cb12d65bfb502e99005a6973a3cc31452c89a577d38eff567a30->leave($__internal_be4299766101cb12d65bfb502e99005a6973a3cc31452c89a577d38eff567a30_prof);

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
