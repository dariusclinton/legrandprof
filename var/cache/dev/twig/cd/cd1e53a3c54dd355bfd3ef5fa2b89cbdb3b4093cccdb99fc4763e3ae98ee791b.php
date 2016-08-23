<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_45656b21e02fa37b5829467f39206d847fe0e5aa3f1a8baaff385aabd815b134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_7aab6cd0af449866155e8d419c152bbf9050fd0a7304ee98a5c16d0df03cc38a = $this->env->getExtension("native_profiler");
        $__internal_7aab6cd0af449866155e8d419c152bbf9050fd0a7304ee98a5c16d0df03cc38a->enter($__internal_7aab6cd0af449866155e8d419c152bbf9050fd0a7304ee98a5c16d0df03cc38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aab6cd0af449866155e8d419c152bbf9050fd0a7304ee98a5c16d0df03cc38a->leave($__internal_7aab6cd0af449866155e8d419c152bbf9050fd0a7304ee98a5c16d0df03cc38a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_970ee9337d98da577570be41a45a04e3de260b2556c80381d405c6d80256875f = $this->env->getExtension("native_profiler");
        $__internal_970ee9337d98da577570be41a45a04e3de260b2556c80381d405c6d80256875f->enter($__internal_970ee9337d98da577570be41a45a04e3de260b2556c80381d405c6d80256875f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_970ee9337d98da577570be41a45a04e3de260b2556c80381d405c6d80256875f->leave($__internal_970ee9337d98da577570be41a45a04e3de260b2556c80381d405c6d80256875f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6f74d3f8695945a9261099daba891121aba45e52b4a394e85d475c583709417 = $this->env->getExtension("native_profiler");
        $__internal_a6f74d3f8695945a9261099daba891121aba45e52b4a394e85d475c583709417->enter($__internal_a6f74d3f8695945a9261099daba891121aba45e52b4a394e85d475c583709417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a6f74d3f8695945a9261099daba891121aba45e52b4a394e85d475c583709417->leave($__internal_a6f74d3f8695945a9261099daba891121aba45e52b4a394e85d475c583709417_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_be39f9df3db498cfb2ef94f3868e26efa40572f369d6b609a3d254b037d3baed = $this->env->getExtension("native_profiler");
        $__internal_be39f9df3db498cfb2ef94f3868e26efa40572f369d6b609a3d254b037d3baed->enter($__internal_be39f9df3db498cfb2ef94f3868e26efa40572f369d6b609a3d254b037d3baed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_be39f9df3db498cfb2ef94f3868e26efa40572f369d6b609a3d254b037d3baed->leave($__internal_be39f9df3db498cfb2ef94f3868e26efa40572f369d6b609a3d254b037d3baed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
