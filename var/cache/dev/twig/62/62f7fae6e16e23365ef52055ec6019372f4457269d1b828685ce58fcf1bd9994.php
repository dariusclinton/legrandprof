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
        $__internal_be458e256ce0ea454b0aee0372a68dbed6a53479a73b3640f553080ecff72c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be458e256ce0ea454b0aee0372a68dbed6a53479a73b3640f553080ecff72c10->enter($__internal_be458e256ce0ea454b0aee0372a68dbed6a53479a73b3640f553080ecff72c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be458e256ce0ea454b0aee0372a68dbed6a53479a73b3640f553080ecff72c10->leave($__internal_be458e256ce0ea454b0aee0372a68dbed6a53479a73b3640f553080ecff72c10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16d02f3d301f56d6945986f9a5b9a7c206935613d401a8ce58c5b0c7a7d777ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d02f3d301f56d6945986f9a5b9a7c206935613d401a8ce58c5b0c7a7d777ab->enter($__internal_16d02f3d301f56d6945986f9a5b9a7c206935613d401a8ce58c5b0c7a7d777ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_16d02f3d301f56d6945986f9a5b9a7c206935613d401a8ce58c5b0c7a7d777ab->leave($__internal_16d02f3d301f56d6945986f9a5b9a7c206935613d401a8ce58c5b0c7a7d777ab_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_e38e55e3005aa7ac57541d1214e09a52d40439ad6196889e0306b0453721ea18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38e55e3005aa7ac57541d1214e09a52d40439ad6196889e0306b0453721ea18->enter($__internal_e38e55e3005aa7ac57541d1214e09a52d40439ad6196889e0306b0453721ea18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_e38e55e3005aa7ac57541d1214e09a52d40439ad6196889e0306b0453721ea18->leave($__internal_e38e55e3005aa7ac57541d1214e09a52d40439ad6196889e0306b0453721ea18_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_289073f424241e32531c50cf3e6098af97ccc643a19764a622d9ad97cddd1229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289073f424241e32531c50cf3e6098af97ccc643a19764a622d9ad97cddd1229->enter($__internal_289073f424241e32531c50cf3e6098af97ccc643a19764a622d9ad97cddd1229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_289073f424241e32531c50cf3e6098af97ccc643a19764a622d9ad97cddd1229->leave($__internal_289073f424241e32531c50cf3e6098af97ccc643a19764a622d9ad97cddd1229_prof);

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
