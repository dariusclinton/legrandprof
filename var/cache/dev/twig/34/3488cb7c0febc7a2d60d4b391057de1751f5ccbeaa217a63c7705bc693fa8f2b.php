<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5b3448eb9145abee8be5c169870831eefa9a3549feab7708148b97cf49702500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71b2c606a37a71fb6d19300ded3cb2a51a9cdbf92298939113bfb4a4d5b8c047 = $this->env->getExtension("native_profiler");
        $__internal_71b2c606a37a71fb6d19300ded3cb2a51a9cdbf92298939113bfb4a4d5b8c047->enter($__internal_71b2c606a37a71fb6d19300ded3cb2a51a9cdbf92298939113bfb4a4d5b8c047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71b2c606a37a71fb6d19300ded3cb2a51a9cdbf92298939113bfb4a4d5b8c047->leave($__internal_71b2c606a37a71fb6d19300ded3cb2a51a9cdbf92298939113bfb4a4d5b8c047_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef9981113232efeb3b539184b596a03c535a474bf4c8a7f597266dd43f7b56d0 = $this->env->getExtension("native_profiler");
        $__internal_ef9981113232efeb3b539184b596a03c535a474bf4c8a7f597266dd43f7b56d0->enter($__internal_ef9981113232efeb3b539184b596a03c535a474bf4c8a7f597266dd43f7b56d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ef9981113232efeb3b539184b596a03c535a474bf4c8a7f597266dd43f7b56d0->leave($__internal_ef9981113232efeb3b539184b596a03c535a474bf4c8a7f597266dd43f7b56d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78872ead68e08b26d4f03c633c6396527782c30169acfcc35e1129f12eb4a3d2 = $this->env->getExtension("native_profiler");
        $__internal_78872ead68e08b26d4f03c633c6396527782c30169acfcc35e1129f12eb4a3d2->enter($__internal_78872ead68e08b26d4f03c633c6396527782c30169acfcc35e1129f12eb4a3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78872ead68e08b26d4f03c633c6396527782c30169acfcc35e1129f12eb4a3d2->leave($__internal_78872ead68e08b26d4f03c633c6396527782c30169acfcc35e1129f12eb4a3d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e6a4e68d878e50f1c2e43ecdef0c799d8c1d412a98f3558a862e975619bde0b = $this->env->getExtension("native_profiler");
        $__internal_9e6a4e68d878e50f1c2e43ecdef0c799d8c1d412a98f3558a862e975619bde0b->enter($__internal_9e6a4e68d878e50f1c2e43ecdef0c799d8c1d412a98f3558a862e975619bde0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9e6a4e68d878e50f1c2e43ecdef0c799d8c1d412a98f3558a862e975619bde0b->leave($__internal_9e6a4e68d878e50f1c2e43ecdef0c799d8c1d412a98f3558a862e975619bde0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
