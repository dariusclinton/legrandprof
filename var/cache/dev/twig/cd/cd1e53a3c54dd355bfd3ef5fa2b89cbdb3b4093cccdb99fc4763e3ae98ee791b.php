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
        $__internal_4aa9e3c19471fe2345717fac9b85bb876bde97f96087178b936aefb35c42f3fe = $this->env->getExtension("native_profiler");
        $__internal_4aa9e3c19471fe2345717fac9b85bb876bde97f96087178b936aefb35c42f3fe->enter($__internal_4aa9e3c19471fe2345717fac9b85bb876bde97f96087178b936aefb35c42f3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aa9e3c19471fe2345717fac9b85bb876bde97f96087178b936aefb35c42f3fe->leave($__internal_4aa9e3c19471fe2345717fac9b85bb876bde97f96087178b936aefb35c42f3fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aff88f2632f1e5ee7b3fa3f58107bed05c19d505490106fd8d6d4afcb7b0df60 = $this->env->getExtension("native_profiler");
        $__internal_aff88f2632f1e5ee7b3fa3f58107bed05c19d505490106fd8d6d4afcb7b0df60->enter($__internal_aff88f2632f1e5ee7b3fa3f58107bed05c19d505490106fd8d6d4afcb7b0df60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aff88f2632f1e5ee7b3fa3f58107bed05c19d505490106fd8d6d4afcb7b0df60->leave($__internal_aff88f2632f1e5ee7b3fa3f58107bed05c19d505490106fd8d6d4afcb7b0df60_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c063a46021d8e64806e3e3bd7b1cafe5618f3793cb4ada830e32f325348c38d = $this->env->getExtension("native_profiler");
        $__internal_3c063a46021d8e64806e3e3bd7b1cafe5618f3793cb4ada830e32f325348c38d->enter($__internal_3c063a46021d8e64806e3e3bd7b1cafe5618f3793cb4ada830e32f325348c38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3c063a46021d8e64806e3e3bd7b1cafe5618f3793cb4ada830e32f325348c38d->leave($__internal_3c063a46021d8e64806e3e3bd7b1cafe5618f3793cb4ada830e32f325348c38d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cae9b37b715025122f27e04045631763ca9d768127eaed0b7bbdcf9045f12598 = $this->env->getExtension("native_profiler");
        $__internal_cae9b37b715025122f27e04045631763ca9d768127eaed0b7bbdcf9045f12598->enter($__internal_cae9b37b715025122f27e04045631763ca9d768127eaed0b7bbdcf9045f12598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cae9b37b715025122f27e04045631763ca9d768127eaed0b7bbdcf9045f12598->leave($__internal_cae9b37b715025122f27e04045631763ca9d768127eaed0b7bbdcf9045f12598_prof);

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
