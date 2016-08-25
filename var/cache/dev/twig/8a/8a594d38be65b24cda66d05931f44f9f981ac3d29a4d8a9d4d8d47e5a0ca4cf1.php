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
        $__internal_fabed402e8b4d3eca350758903469692236a61e36f5b46782db1b9bfb5074c43 = $this->env->getExtension("native_profiler");
        $__internal_fabed402e8b4d3eca350758903469692236a61e36f5b46782db1b9bfb5074c43->enter($__internal_fabed402e8b4d3eca350758903469692236a61e36f5b46782db1b9bfb5074c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fabed402e8b4d3eca350758903469692236a61e36f5b46782db1b9bfb5074c43->leave($__internal_fabed402e8b4d3eca350758903469692236a61e36f5b46782db1b9bfb5074c43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae00ec1856da619f3518ba1726a66586106225dbb8a68c26ab39c53b983e0cf0 = $this->env->getExtension("native_profiler");
        $__internal_ae00ec1856da619f3518ba1726a66586106225dbb8a68c26ab39c53b983e0cf0->enter($__internal_ae00ec1856da619f3518ba1726a66586106225dbb8a68c26ab39c53b983e0cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ae00ec1856da619f3518ba1726a66586106225dbb8a68c26ab39c53b983e0cf0->leave($__internal_ae00ec1856da619f3518ba1726a66586106225dbb8a68c26ab39c53b983e0cf0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17dde1f04516d2574c5ee9528d5cd8917c9be94887ff3d86d091cad1c7a30ac7 = $this->env->getExtension("native_profiler");
        $__internal_17dde1f04516d2574c5ee9528d5cd8917c9be94887ff3d86d091cad1c7a30ac7->enter($__internal_17dde1f04516d2574c5ee9528d5cd8917c9be94887ff3d86d091cad1c7a30ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17dde1f04516d2574c5ee9528d5cd8917c9be94887ff3d86d091cad1c7a30ac7->leave($__internal_17dde1f04516d2574c5ee9528d5cd8917c9be94887ff3d86d091cad1c7a30ac7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ad9281202ab24d885b9031eff4cbe0a788abcbc0c6da1522009b488479e781f = $this->env->getExtension("native_profiler");
        $__internal_4ad9281202ab24d885b9031eff4cbe0a788abcbc0c6da1522009b488479e781f->enter($__internal_4ad9281202ab24d885b9031eff4cbe0a788abcbc0c6da1522009b488479e781f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4ad9281202ab24d885b9031eff4cbe0a788abcbc0c6da1522009b488479e781f->leave($__internal_4ad9281202ab24d885b9031eff4cbe0a788abcbc0c6da1522009b488479e781f_prof);

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
