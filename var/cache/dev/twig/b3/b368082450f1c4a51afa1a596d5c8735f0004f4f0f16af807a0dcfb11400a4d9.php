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
        $__internal_94187abd4ef4bbd1fdf2ff9ca4e0fa264887f56b60088dc99ba28aed30adcd50 = $this->env->getExtension("native_profiler");
        $__internal_94187abd4ef4bbd1fdf2ff9ca4e0fa264887f56b60088dc99ba28aed30adcd50->enter($__internal_94187abd4ef4bbd1fdf2ff9ca4e0fa264887f56b60088dc99ba28aed30adcd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94187abd4ef4bbd1fdf2ff9ca4e0fa264887f56b60088dc99ba28aed30adcd50->leave($__internal_94187abd4ef4bbd1fdf2ff9ca4e0fa264887f56b60088dc99ba28aed30adcd50_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_84bc2f162d4906fc6a01420bd66f333ea784507da218231c3f95a8aaedeb6b5a = $this->env->getExtension("native_profiler");
        $__internal_84bc2f162d4906fc6a01420bd66f333ea784507da218231c3f95a8aaedeb6b5a->enter($__internal_84bc2f162d4906fc6a01420bd66f333ea784507da218231c3f95a8aaedeb6b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_84bc2f162d4906fc6a01420bd66f333ea784507da218231c3f95a8aaedeb6b5a->leave($__internal_84bc2f162d4906fc6a01420bd66f333ea784507da218231c3f95a8aaedeb6b5a_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_4284b4ee1c6bb6b743b8f93afe43f6a5be24008da4a97fd95ecc45175f054655 = $this->env->getExtension("native_profiler");
        $__internal_4284b4ee1c6bb6b743b8f93afe43f6a5be24008da4a97fd95ecc45175f054655->enter($__internal_4284b4ee1c6bb6b743b8f93afe43f6a5be24008da4a97fd95ecc45175f054655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_4284b4ee1c6bb6b743b8f93afe43f6a5be24008da4a97fd95ecc45175f054655->leave($__internal_4284b4ee1c6bb6b743b8f93afe43f6a5be24008da4a97fd95ecc45175f054655_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3746912152950fbad06b89082e5f8371d13962c5b672be01664721952c37d72a = $this->env->getExtension("native_profiler");
        $__internal_3746912152950fbad06b89082e5f8371d13962c5b672be01664721952c37d72a->enter($__internal_3746912152950fbad06b89082e5f8371d13962c5b672be01664721952c37d72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_3746912152950fbad06b89082e5f8371d13962c5b672be01664721952c37d72a->leave($__internal_3746912152950fbad06b89082e5f8371d13962c5b672be01664721952c37d72a_prof);

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
