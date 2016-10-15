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
        $__internal_ac8779253a41f52f0c29aeb735b5362e6bfac68dff4356613af313b15a1b8325 = $this->env->getExtension("native_profiler");
        $__internal_ac8779253a41f52f0c29aeb735b5362e6bfac68dff4356613af313b15a1b8325->enter($__internal_ac8779253a41f52f0c29aeb735b5362e6bfac68dff4356613af313b15a1b8325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac8779253a41f52f0c29aeb735b5362e6bfac68dff4356613af313b15a1b8325->leave($__internal_ac8779253a41f52f0c29aeb735b5362e6bfac68dff4356613af313b15a1b8325_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_afa2b14986e8edd0c9c5294e1921e062488356701fdf0c7ecd468899f72e4e93 = $this->env->getExtension("native_profiler");
        $__internal_afa2b14986e8edd0c9c5294e1921e062488356701fdf0c7ecd468899f72e4e93->enter($__internal_afa2b14986e8edd0c9c5294e1921e062488356701fdf0c7ecd468899f72e4e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_afa2b14986e8edd0c9c5294e1921e062488356701fdf0c7ecd468899f72e4e93->leave($__internal_afa2b14986e8edd0c9c5294e1921e062488356701fdf0c7ecd468899f72e4e93_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_779b1fa67d7094432bc3dbda51abb2564736da4c46969c034ad9138d11703449 = $this->env->getExtension("native_profiler");
        $__internal_779b1fa67d7094432bc3dbda51abb2564736da4c46969c034ad9138d11703449->enter($__internal_779b1fa67d7094432bc3dbda51abb2564736da4c46969c034ad9138d11703449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_779b1fa67d7094432bc3dbda51abb2564736da4c46969c034ad9138d11703449->leave($__internal_779b1fa67d7094432bc3dbda51abb2564736da4c46969c034ad9138d11703449_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_021afa58a41ada3ca06973f014259064c2c7da565544339a4e86d52528722f50 = $this->env->getExtension("native_profiler");
        $__internal_021afa58a41ada3ca06973f014259064c2c7da565544339a4e86d52528722f50->enter($__internal_021afa58a41ada3ca06973f014259064c2c7da565544339a4e86d52528722f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_021afa58a41ada3ca06973f014259064c2c7da565544339a4e86d52528722f50->leave($__internal_021afa58a41ada3ca06973f014259064c2c7da565544339a4e86d52528722f50_prof);

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
