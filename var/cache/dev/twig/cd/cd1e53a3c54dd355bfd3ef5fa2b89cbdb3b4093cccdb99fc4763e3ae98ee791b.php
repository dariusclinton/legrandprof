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
        $__internal_60060ba0d8082bfae2d6b2bdf2f475db950cc0cf6318e557592b40ca4fc25777 = $this->env->getExtension("native_profiler");
        $__internal_60060ba0d8082bfae2d6b2bdf2f475db950cc0cf6318e557592b40ca4fc25777->enter($__internal_60060ba0d8082bfae2d6b2bdf2f475db950cc0cf6318e557592b40ca4fc25777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60060ba0d8082bfae2d6b2bdf2f475db950cc0cf6318e557592b40ca4fc25777->leave($__internal_60060ba0d8082bfae2d6b2bdf2f475db950cc0cf6318e557592b40ca4fc25777_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f7a7ff420e64a31feda52deeb7bf7162832a39757981c8a5f744846b4c1ca7e = $this->env->getExtension("native_profiler");
        $__internal_7f7a7ff420e64a31feda52deeb7bf7162832a39757981c8a5f744846b4c1ca7e->enter($__internal_7f7a7ff420e64a31feda52deeb7bf7162832a39757981c8a5f744846b4c1ca7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7f7a7ff420e64a31feda52deeb7bf7162832a39757981c8a5f744846b4c1ca7e->leave($__internal_7f7a7ff420e64a31feda52deeb7bf7162832a39757981c8a5f744846b4c1ca7e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_705a5b5d52c50624b06cb67f81152ba09dfa6927167aa8b94b7a2eb5cbfd2234 = $this->env->getExtension("native_profiler");
        $__internal_705a5b5d52c50624b06cb67f81152ba09dfa6927167aa8b94b7a2eb5cbfd2234->enter($__internal_705a5b5d52c50624b06cb67f81152ba09dfa6927167aa8b94b7a2eb5cbfd2234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_705a5b5d52c50624b06cb67f81152ba09dfa6927167aa8b94b7a2eb5cbfd2234->leave($__internal_705a5b5d52c50624b06cb67f81152ba09dfa6927167aa8b94b7a2eb5cbfd2234_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2add4cad768edcabdb3c8229eeb1df308c38f5878282b52c6d4129d1165d072 = $this->env->getExtension("native_profiler");
        $__internal_f2add4cad768edcabdb3c8229eeb1df308c38f5878282b52c6d4129d1165d072->enter($__internal_f2add4cad768edcabdb3c8229eeb1df308c38f5878282b52c6d4129d1165d072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f2add4cad768edcabdb3c8229eeb1df308c38f5878282b52c6d4129d1165d072->leave($__internal_f2add4cad768edcabdb3c8229eeb1df308c38f5878282b52c6d4129d1165d072_prof);

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
