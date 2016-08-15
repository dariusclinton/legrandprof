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
        $__internal_f1f6549d615cef745e9fd62010150c6211ba40e0e07d85a8e4844de085716be3 = $this->env->getExtension("native_profiler");
        $__internal_f1f6549d615cef745e9fd62010150c6211ba40e0e07d85a8e4844de085716be3->enter($__internal_f1f6549d615cef745e9fd62010150c6211ba40e0e07d85a8e4844de085716be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1f6549d615cef745e9fd62010150c6211ba40e0e07d85a8e4844de085716be3->leave($__internal_f1f6549d615cef745e9fd62010150c6211ba40e0e07d85a8e4844de085716be3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_370f8c0b5ceb2ea3d359b6ac19543b5753bf7aac08265398cccd9b8c019024e9 = $this->env->getExtension("native_profiler");
        $__internal_370f8c0b5ceb2ea3d359b6ac19543b5753bf7aac08265398cccd9b8c019024e9->enter($__internal_370f8c0b5ceb2ea3d359b6ac19543b5753bf7aac08265398cccd9b8c019024e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_370f8c0b5ceb2ea3d359b6ac19543b5753bf7aac08265398cccd9b8c019024e9->leave($__internal_370f8c0b5ceb2ea3d359b6ac19543b5753bf7aac08265398cccd9b8c019024e9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c9ac76944a452e8a823f39364c63cd1139e6381133c878a574cc5d327a5819c = $this->env->getExtension("native_profiler");
        $__internal_1c9ac76944a452e8a823f39364c63cd1139e6381133c878a574cc5d327a5819c->enter($__internal_1c9ac76944a452e8a823f39364c63cd1139e6381133c878a574cc5d327a5819c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c9ac76944a452e8a823f39364c63cd1139e6381133c878a574cc5d327a5819c->leave($__internal_1c9ac76944a452e8a823f39364c63cd1139e6381133c878a574cc5d327a5819c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2c6e8175c146298e2466666bb5841d0a2f65bde897d63b252a8c5f321ec7253 = $this->env->getExtension("native_profiler");
        $__internal_d2c6e8175c146298e2466666bb5841d0a2f65bde897d63b252a8c5f321ec7253->enter($__internal_d2c6e8175c146298e2466666bb5841d0a2f65bde897d63b252a8c5f321ec7253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d2c6e8175c146298e2466666bb5841d0a2f65bde897d63b252a8c5f321ec7253->leave($__internal_d2c6e8175c146298e2466666bb5841d0a2f65bde897d63b252a8c5f321ec7253_prof);

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
