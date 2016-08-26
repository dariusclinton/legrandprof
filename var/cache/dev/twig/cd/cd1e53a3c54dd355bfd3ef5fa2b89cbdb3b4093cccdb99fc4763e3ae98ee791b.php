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
        $__internal_50a07c7020bc3cda71a8c003013dde1266381fb9df5e68f675129aceb6238959 = $this->env->getExtension("native_profiler");
        $__internal_50a07c7020bc3cda71a8c003013dde1266381fb9df5e68f675129aceb6238959->enter($__internal_50a07c7020bc3cda71a8c003013dde1266381fb9df5e68f675129aceb6238959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50a07c7020bc3cda71a8c003013dde1266381fb9df5e68f675129aceb6238959->leave($__internal_50a07c7020bc3cda71a8c003013dde1266381fb9df5e68f675129aceb6238959_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5a6c30b1899df1e617f3e13117e935981296bf09239b19361252f9cf6c0a44d = $this->env->getExtension("native_profiler");
        $__internal_a5a6c30b1899df1e617f3e13117e935981296bf09239b19361252f9cf6c0a44d->enter($__internal_a5a6c30b1899df1e617f3e13117e935981296bf09239b19361252f9cf6c0a44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a5a6c30b1899df1e617f3e13117e935981296bf09239b19361252f9cf6c0a44d->leave($__internal_a5a6c30b1899df1e617f3e13117e935981296bf09239b19361252f9cf6c0a44d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d00d83c22c3d031958e525b6274a1251bebc52bfb5be8284dfe0b572b497ca4 = $this->env->getExtension("native_profiler");
        $__internal_1d00d83c22c3d031958e525b6274a1251bebc52bfb5be8284dfe0b572b497ca4->enter($__internal_1d00d83c22c3d031958e525b6274a1251bebc52bfb5be8284dfe0b572b497ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1d00d83c22c3d031958e525b6274a1251bebc52bfb5be8284dfe0b572b497ca4->leave($__internal_1d00d83c22c3d031958e525b6274a1251bebc52bfb5be8284dfe0b572b497ca4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1693075f02d434c9655450dbe73223209b9dd402624ea81f17453e75c461730 = $this->env->getExtension("native_profiler");
        $__internal_c1693075f02d434c9655450dbe73223209b9dd402624ea81f17453e75c461730->enter($__internal_c1693075f02d434c9655450dbe73223209b9dd402624ea81f17453e75c461730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c1693075f02d434c9655450dbe73223209b9dd402624ea81f17453e75c461730->leave($__internal_c1693075f02d434c9655450dbe73223209b9dd402624ea81f17453e75c461730_prof);

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
