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
        $__internal_e0d108ee4f4c8edb3e231935b00a8db45b37376f9da5ba9467a7f70a564cd5f2 = $this->env->getExtension("native_profiler");
        $__internal_e0d108ee4f4c8edb3e231935b00a8db45b37376f9da5ba9467a7f70a564cd5f2->enter($__internal_e0d108ee4f4c8edb3e231935b00a8db45b37376f9da5ba9467a7f70a564cd5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0d108ee4f4c8edb3e231935b00a8db45b37376f9da5ba9467a7f70a564cd5f2->leave($__internal_e0d108ee4f4c8edb3e231935b00a8db45b37376f9da5ba9467a7f70a564cd5f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bce965ea4f76e05701bc3e06306f5ac08be94329104ecd582165f6fb455a6414 = $this->env->getExtension("native_profiler");
        $__internal_bce965ea4f76e05701bc3e06306f5ac08be94329104ecd582165f6fb455a6414->enter($__internal_bce965ea4f76e05701bc3e06306f5ac08be94329104ecd582165f6fb455a6414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bce965ea4f76e05701bc3e06306f5ac08be94329104ecd582165f6fb455a6414->leave($__internal_bce965ea4f76e05701bc3e06306f5ac08be94329104ecd582165f6fb455a6414_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_22a47ccc4a479e385fc508780d7ba9afd51b9eb2808bb6aa80c1bdc445040192 = $this->env->getExtension("native_profiler");
        $__internal_22a47ccc4a479e385fc508780d7ba9afd51b9eb2808bb6aa80c1bdc445040192->enter($__internal_22a47ccc4a479e385fc508780d7ba9afd51b9eb2808bb6aa80c1bdc445040192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_22a47ccc4a479e385fc508780d7ba9afd51b9eb2808bb6aa80c1bdc445040192->leave($__internal_22a47ccc4a479e385fc508780d7ba9afd51b9eb2808bb6aa80c1bdc445040192_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_42f4a4c0a39e149514ce24b3bac3ed601de7d4bd777a1052d5cb805796beab6a = $this->env->getExtension("native_profiler");
        $__internal_42f4a4c0a39e149514ce24b3bac3ed601de7d4bd777a1052d5cb805796beab6a->enter($__internal_42f4a4c0a39e149514ce24b3bac3ed601de7d4bd777a1052d5cb805796beab6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_42f4a4c0a39e149514ce24b3bac3ed601de7d4bd777a1052d5cb805796beab6a->leave($__internal_42f4a4c0a39e149514ce24b3bac3ed601de7d4bd777a1052d5cb805796beab6a_prof);

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
