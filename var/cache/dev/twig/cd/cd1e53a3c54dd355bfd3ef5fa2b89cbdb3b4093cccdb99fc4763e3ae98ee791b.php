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
        $__internal_30a617c8905e05593c558b4a9ddcf9d5e245ec539d5542a39385af62a16cfbdd = $this->env->getExtension("native_profiler");
        $__internal_30a617c8905e05593c558b4a9ddcf9d5e245ec539d5542a39385af62a16cfbdd->enter($__internal_30a617c8905e05593c558b4a9ddcf9d5e245ec539d5542a39385af62a16cfbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a617c8905e05593c558b4a9ddcf9d5e245ec539d5542a39385af62a16cfbdd->leave($__internal_30a617c8905e05593c558b4a9ddcf9d5e245ec539d5542a39385af62a16cfbdd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_119a103641005dd84c018b68f0d76f99084aa787ae04bd8c1f5d4595bbcd7072 = $this->env->getExtension("native_profiler");
        $__internal_119a103641005dd84c018b68f0d76f99084aa787ae04bd8c1f5d4595bbcd7072->enter($__internal_119a103641005dd84c018b68f0d76f99084aa787ae04bd8c1f5d4595bbcd7072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_119a103641005dd84c018b68f0d76f99084aa787ae04bd8c1f5d4595bbcd7072->leave($__internal_119a103641005dd84c018b68f0d76f99084aa787ae04bd8c1f5d4595bbcd7072_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd6cea85ec35cdb3378456ec0a1577c15fa5f32f31b6bda2527819d6d8e2e5ce = $this->env->getExtension("native_profiler");
        $__internal_cd6cea85ec35cdb3378456ec0a1577c15fa5f32f31b6bda2527819d6d8e2e5ce->enter($__internal_cd6cea85ec35cdb3378456ec0a1577c15fa5f32f31b6bda2527819d6d8e2e5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cd6cea85ec35cdb3378456ec0a1577c15fa5f32f31b6bda2527819d6d8e2e5ce->leave($__internal_cd6cea85ec35cdb3378456ec0a1577c15fa5f32f31b6bda2527819d6d8e2e5ce_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ad0cd9b99bb05c7a61ef3ba26311d064c34f463ef695fc37adc3599ac9d9d86 = $this->env->getExtension("native_profiler");
        $__internal_0ad0cd9b99bb05c7a61ef3ba26311d064c34f463ef695fc37adc3599ac9d9d86->enter($__internal_0ad0cd9b99bb05c7a61ef3ba26311d064c34f463ef695fc37adc3599ac9d9d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0ad0cd9b99bb05c7a61ef3ba26311d064c34f463ef695fc37adc3599ac9d9d86->leave($__internal_0ad0cd9b99bb05c7a61ef3ba26311d064c34f463ef695fc37adc3599ac9d9d86_prof);

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
