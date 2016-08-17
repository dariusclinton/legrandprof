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
        $__internal_2c10a847d0cff32c87e6d16f71bbaac754746521ebd166d3fd47956dfae67f6c = $this->env->getExtension("native_profiler");
        $__internal_2c10a847d0cff32c87e6d16f71bbaac754746521ebd166d3fd47956dfae67f6c->enter($__internal_2c10a847d0cff32c87e6d16f71bbaac754746521ebd166d3fd47956dfae67f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c10a847d0cff32c87e6d16f71bbaac754746521ebd166d3fd47956dfae67f6c->leave($__internal_2c10a847d0cff32c87e6d16f71bbaac754746521ebd166d3fd47956dfae67f6c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_35319ed93c38a494d2b1ac0741ee11d9cf7acfb61d621a3c03ae6f03a2911d62 = $this->env->getExtension("native_profiler");
        $__internal_35319ed93c38a494d2b1ac0741ee11d9cf7acfb61d621a3c03ae6f03a2911d62->enter($__internal_35319ed93c38a494d2b1ac0741ee11d9cf7acfb61d621a3c03ae6f03a2911d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_35319ed93c38a494d2b1ac0741ee11d9cf7acfb61d621a3c03ae6f03a2911d62->leave($__internal_35319ed93c38a494d2b1ac0741ee11d9cf7acfb61d621a3c03ae6f03a2911d62_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_80ba8ac1f855f95f3475519e13d25dfd980e14933c90f00b7e628b715b68cd0f = $this->env->getExtension("native_profiler");
        $__internal_80ba8ac1f855f95f3475519e13d25dfd980e14933c90f00b7e628b715b68cd0f->enter($__internal_80ba8ac1f855f95f3475519e13d25dfd980e14933c90f00b7e628b715b68cd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_80ba8ac1f855f95f3475519e13d25dfd980e14933c90f00b7e628b715b68cd0f->leave($__internal_80ba8ac1f855f95f3475519e13d25dfd980e14933c90f00b7e628b715b68cd0f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_02318712621a2fe09f6513efe4300840c038544cdc74ac2d554dc3a14a0c7c38 = $this->env->getExtension("native_profiler");
        $__internal_02318712621a2fe09f6513efe4300840c038544cdc74ac2d554dc3a14a0c7c38->enter($__internal_02318712621a2fe09f6513efe4300840c038544cdc74ac2d554dc3a14a0c7c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_02318712621a2fe09f6513efe4300840c038544cdc74ac2d554dc3a14a0c7c38->leave($__internal_02318712621a2fe09f6513efe4300840c038544cdc74ac2d554dc3a14a0c7c38_prof);

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
