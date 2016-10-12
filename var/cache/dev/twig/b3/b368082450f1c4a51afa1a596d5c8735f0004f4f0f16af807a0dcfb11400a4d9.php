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
        $__internal_39ce1f355b8252b6aa1d25b802f0cd9bbaa198ef5ba1893f3444c0946153d122 = $this->env->getExtension("native_profiler");
        $__internal_39ce1f355b8252b6aa1d25b802f0cd9bbaa198ef5ba1893f3444c0946153d122->enter($__internal_39ce1f355b8252b6aa1d25b802f0cd9bbaa198ef5ba1893f3444c0946153d122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ce1f355b8252b6aa1d25b802f0cd9bbaa198ef5ba1893f3444c0946153d122->leave($__internal_39ce1f355b8252b6aa1d25b802f0cd9bbaa198ef5ba1893f3444c0946153d122_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44a12a669cd5c63642dfe3f1ed3a90043531877a781b1a248ed49d751992376f = $this->env->getExtension("native_profiler");
        $__internal_44a12a669cd5c63642dfe3f1ed3a90043531877a781b1a248ed49d751992376f->enter($__internal_44a12a669cd5c63642dfe3f1ed3a90043531877a781b1a248ed49d751992376f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_44a12a669cd5c63642dfe3f1ed3a90043531877a781b1a248ed49d751992376f->leave($__internal_44a12a669cd5c63642dfe3f1ed3a90043531877a781b1a248ed49d751992376f_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_4f3ebe32a464c70e6318e3dfe420413c411e6721c373937bcf28c2b6a924703c = $this->env->getExtension("native_profiler");
        $__internal_4f3ebe32a464c70e6318e3dfe420413c411e6721c373937bcf28c2b6a924703c->enter($__internal_4f3ebe32a464c70e6318e3dfe420413c411e6721c373937bcf28c2b6a924703c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_4f3ebe32a464c70e6318e3dfe420413c411e6721c373937bcf28c2b6a924703c->leave($__internal_4f3ebe32a464c70e6318e3dfe420413c411e6721c373937bcf28c2b6a924703c_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e17557c3c8f49b88d73a624e56474bd0fe522401770dccade60cdae44425f18b = $this->env->getExtension("native_profiler");
        $__internal_e17557c3c8f49b88d73a624e56474bd0fe522401770dccade60cdae44425f18b->enter($__internal_e17557c3c8f49b88d73a624e56474bd0fe522401770dccade60cdae44425f18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_e17557c3c8f49b88d73a624e56474bd0fe522401770dccade60cdae44425f18b->leave($__internal_e17557c3c8f49b88d73a624e56474bd0fe522401770dccade60cdae44425f18b_prof);

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
