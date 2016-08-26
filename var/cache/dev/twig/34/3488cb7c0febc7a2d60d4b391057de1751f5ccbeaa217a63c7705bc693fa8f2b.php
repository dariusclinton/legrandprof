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
        $__internal_186c830c0f4ce962d7f73bc8bc43cb948b2d167f4fc9de1d43b0aad3ac308888 = $this->env->getExtension("native_profiler");
        $__internal_186c830c0f4ce962d7f73bc8bc43cb948b2d167f4fc9de1d43b0aad3ac308888->enter($__internal_186c830c0f4ce962d7f73bc8bc43cb948b2d167f4fc9de1d43b0aad3ac308888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_186c830c0f4ce962d7f73bc8bc43cb948b2d167f4fc9de1d43b0aad3ac308888->leave($__internal_186c830c0f4ce962d7f73bc8bc43cb948b2d167f4fc9de1d43b0aad3ac308888_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3fa5e13915d11e2bdccb0b91ce1fa6db4dd2401df09da13f54919a36ce73b7be = $this->env->getExtension("native_profiler");
        $__internal_3fa5e13915d11e2bdccb0b91ce1fa6db4dd2401df09da13f54919a36ce73b7be->enter($__internal_3fa5e13915d11e2bdccb0b91ce1fa6db4dd2401df09da13f54919a36ce73b7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3fa5e13915d11e2bdccb0b91ce1fa6db4dd2401df09da13f54919a36ce73b7be->leave($__internal_3fa5e13915d11e2bdccb0b91ce1fa6db4dd2401df09da13f54919a36ce73b7be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2168aa151c77ef1e8cd314296337485f0cd8a52dfe69a810e2be57719a62d8bc = $this->env->getExtension("native_profiler");
        $__internal_2168aa151c77ef1e8cd314296337485f0cd8a52dfe69a810e2be57719a62d8bc->enter($__internal_2168aa151c77ef1e8cd314296337485f0cd8a52dfe69a810e2be57719a62d8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2168aa151c77ef1e8cd314296337485f0cd8a52dfe69a810e2be57719a62d8bc->leave($__internal_2168aa151c77ef1e8cd314296337485f0cd8a52dfe69a810e2be57719a62d8bc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7fbd285ad6fec14c2ef5e247ca2f810afb86a17f6428d60182de57db771e828 = $this->env->getExtension("native_profiler");
        $__internal_e7fbd285ad6fec14c2ef5e247ca2f810afb86a17f6428d60182de57db771e828->enter($__internal_e7fbd285ad6fec14c2ef5e247ca2f810afb86a17f6428d60182de57db771e828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e7fbd285ad6fec14c2ef5e247ca2f810afb86a17f6428d60182de57db771e828->leave($__internal_e7fbd285ad6fec14c2ef5e247ca2f810afb86a17f6428d60182de57db771e828_prof);

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
