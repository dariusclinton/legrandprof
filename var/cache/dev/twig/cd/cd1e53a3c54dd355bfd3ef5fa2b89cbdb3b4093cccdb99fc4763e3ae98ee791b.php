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
        $__internal_0a720e71e58f9044b444857c07d31f020b63e3af2b0663c76fc657b92f33a084 = $this->env->getExtension("native_profiler");
        $__internal_0a720e71e58f9044b444857c07d31f020b63e3af2b0663c76fc657b92f33a084->enter($__internal_0a720e71e58f9044b444857c07d31f020b63e3af2b0663c76fc657b92f33a084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a720e71e58f9044b444857c07d31f020b63e3af2b0663c76fc657b92f33a084->leave($__internal_0a720e71e58f9044b444857c07d31f020b63e3af2b0663c76fc657b92f33a084_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_981fba11f816592ddc95b060e339befc0efb24334f25aa483ab9a402841981f4 = $this->env->getExtension("native_profiler");
        $__internal_981fba11f816592ddc95b060e339befc0efb24334f25aa483ab9a402841981f4->enter($__internal_981fba11f816592ddc95b060e339befc0efb24334f25aa483ab9a402841981f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_981fba11f816592ddc95b060e339befc0efb24334f25aa483ab9a402841981f4->leave($__internal_981fba11f816592ddc95b060e339befc0efb24334f25aa483ab9a402841981f4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_160f5985b6c76a2f6e333b262928f03a8f26b1e238a5532abf02025f263999a6 = $this->env->getExtension("native_profiler");
        $__internal_160f5985b6c76a2f6e333b262928f03a8f26b1e238a5532abf02025f263999a6->enter($__internal_160f5985b6c76a2f6e333b262928f03a8f26b1e238a5532abf02025f263999a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_160f5985b6c76a2f6e333b262928f03a8f26b1e238a5532abf02025f263999a6->leave($__internal_160f5985b6c76a2f6e333b262928f03a8f26b1e238a5532abf02025f263999a6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d67b8b7796fbb8b66067257e256b0852b5acded937cc994e8b953b3366ac26d9 = $this->env->getExtension("native_profiler");
        $__internal_d67b8b7796fbb8b66067257e256b0852b5acded937cc994e8b953b3366ac26d9->enter($__internal_d67b8b7796fbb8b66067257e256b0852b5acded937cc994e8b953b3366ac26d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d67b8b7796fbb8b66067257e256b0852b5acded937cc994e8b953b3366ac26d9->leave($__internal_d67b8b7796fbb8b66067257e256b0852b5acded937cc994e8b953b3366ac26d9_prof);

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
