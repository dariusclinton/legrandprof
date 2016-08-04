<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_084d9869f06e9265f2fc66e7ea1ea902d98247baa65de4650128bb7c254e34bc extends Twig_Template
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
        $__internal_6793c4a8e0e4bb86d497d43eb86a51d01328586c09bf09b801046ea398a7ef8e = $this->env->getExtension("native_profiler");
        $__internal_6793c4a8e0e4bb86d497d43eb86a51d01328586c09bf09b801046ea398a7ef8e->enter($__internal_6793c4a8e0e4bb86d497d43eb86a51d01328586c09bf09b801046ea398a7ef8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6793c4a8e0e4bb86d497d43eb86a51d01328586c09bf09b801046ea398a7ef8e->leave($__internal_6793c4a8e0e4bb86d497d43eb86a51d01328586c09bf09b801046ea398a7ef8e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33a37d603a3eee31aeb5cbeaa0843f9d20b4ad2ceefebd41d60854621074aaf1 = $this->env->getExtension("native_profiler");
        $__internal_33a37d603a3eee31aeb5cbeaa0843f9d20b4ad2ceefebd41d60854621074aaf1->enter($__internal_33a37d603a3eee31aeb5cbeaa0843f9d20b4ad2ceefebd41d60854621074aaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_33a37d603a3eee31aeb5cbeaa0843f9d20b4ad2ceefebd41d60854621074aaf1->leave($__internal_33a37d603a3eee31aeb5cbeaa0843f9d20b4ad2ceefebd41d60854621074aaf1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_39c788a9f6d966aab530fa560c56b95258177628af91048246518e92fb5e71d2 = $this->env->getExtension("native_profiler");
        $__internal_39c788a9f6d966aab530fa560c56b95258177628af91048246518e92fb5e71d2->enter($__internal_39c788a9f6d966aab530fa560c56b95258177628af91048246518e92fb5e71d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_39c788a9f6d966aab530fa560c56b95258177628af91048246518e92fb5e71d2->leave($__internal_39c788a9f6d966aab530fa560c56b95258177628af91048246518e92fb5e71d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_37f40038be6e8744617db7286139374249a8dbc621a9f5bcaa3d2720ae39dc23 = $this->env->getExtension("native_profiler");
        $__internal_37f40038be6e8744617db7286139374249a8dbc621a9f5bcaa3d2720ae39dc23->enter($__internal_37f40038be6e8744617db7286139374249a8dbc621a9f5bcaa3d2720ae39dc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_37f40038be6e8744617db7286139374249a8dbc621a9f5bcaa3d2720ae39dc23->leave($__internal_37f40038be6e8744617db7286139374249a8dbc621a9f5bcaa3d2720ae39dc23_prof);

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
