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
        $__internal_6cf550bc1edd7c4e6b7e21fb2c6b5300a9451ab86d5f98fb55721b85cecd7d2f = $this->env->getExtension("native_profiler");
        $__internal_6cf550bc1edd7c4e6b7e21fb2c6b5300a9451ab86d5f98fb55721b85cecd7d2f->enter($__internal_6cf550bc1edd7c4e6b7e21fb2c6b5300a9451ab86d5f98fb55721b85cecd7d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cf550bc1edd7c4e6b7e21fb2c6b5300a9451ab86d5f98fb55721b85cecd7d2f->leave($__internal_6cf550bc1edd7c4e6b7e21fb2c6b5300a9451ab86d5f98fb55721b85cecd7d2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb4755a9c02c8273198849331144063b53dd72644a692064cadba5c89587ad52 = $this->env->getExtension("native_profiler");
        $__internal_cb4755a9c02c8273198849331144063b53dd72644a692064cadba5c89587ad52->enter($__internal_cb4755a9c02c8273198849331144063b53dd72644a692064cadba5c89587ad52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cb4755a9c02c8273198849331144063b53dd72644a692064cadba5c89587ad52->leave($__internal_cb4755a9c02c8273198849331144063b53dd72644a692064cadba5c89587ad52_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_298aa9c35fef64b0b6287347072126e23d4b2a74f3fa2235bf70363ae84534fb = $this->env->getExtension("native_profiler");
        $__internal_298aa9c35fef64b0b6287347072126e23d4b2a74f3fa2235bf70363ae84534fb->enter($__internal_298aa9c35fef64b0b6287347072126e23d4b2a74f3fa2235bf70363ae84534fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_298aa9c35fef64b0b6287347072126e23d4b2a74f3fa2235bf70363ae84534fb->leave($__internal_298aa9c35fef64b0b6287347072126e23d4b2a74f3fa2235bf70363ae84534fb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5e8db02ba1b5dc955ae02ad858a2769f7fdaea181852f5005287384ed2497f5 = $this->env->getExtension("native_profiler");
        $__internal_a5e8db02ba1b5dc955ae02ad858a2769f7fdaea181852f5005287384ed2497f5->enter($__internal_a5e8db02ba1b5dc955ae02ad858a2769f7fdaea181852f5005287384ed2497f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a5e8db02ba1b5dc955ae02ad858a2769f7fdaea181852f5005287384ed2497f5->leave($__internal_a5e8db02ba1b5dc955ae02ad858a2769f7fdaea181852f5005287384ed2497f5_prof);

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
