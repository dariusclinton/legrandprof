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
        $__internal_80fe807bdec81c4f5eaefce705797185247f653b65fc78dab9d16904d893d3e4 = $this->env->getExtension("native_profiler");
        $__internal_80fe807bdec81c4f5eaefce705797185247f653b65fc78dab9d16904d893d3e4->enter($__internal_80fe807bdec81c4f5eaefce705797185247f653b65fc78dab9d16904d893d3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80fe807bdec81c4f5eaefce705797185247f653b65fc78dab9d16904d893d3e4->leave($__internal_80fe807bdec81c4f5eaefce705797185247f653b65fc78dab9d16904d893d3e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03a4632eecf698ac7ee65e48a7066f29972b0388c0bd3e2c26b0540f08c4cd11 = $this->env->getExtension("native_profiler");
        $__internal_03a4632eecf698ac7ee65e48a7066f29972b0388c0bd3e2c26b0540f08c4cd11->enter($__internal_03a4632eecf698ac7ee65e48a7066f29972b0388c0bd3e2c26b0540f08c4cd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_03a4632eecf698ac7ee65e48a7066f29972b0388c0bd3e2c26b0540f08c4cd11->leave($__internal_03a4632eecf698ac7ee65e48a7066f29972b0388c0bd3e2c26b0540f08c4cd11_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78606a98bd76fdf54f06dd59111f281310c067ceccc1b5cc791c2f6bb3097091 = $this->env->getExtension("native_profiler");
        $__internal_78606a98bd76fdf54f06dd59111f281310c067ceccc1b5cc791c2f6bb3097091->enter($__internal_78606a98bd76fdf54f06dd59111f281310c067ceccc1b5cc791c2f6bb3097091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78606a98bd76fdf54f06dd59111f281310c067ceccc1b5cc791c2f6bb3097091->leave($__internal_78606a98bd76fdf54f06dd59111f281310c067ceccc1b5cc791c2f6bb3097091_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a534bc1f7ccb4c5074f6286844731eb01b9c3219cdd2fbfc0266d89d36afede = $this->env->getExtension("native_profiler");
        $__internal_3a534bc1f7ccb4c5074f6286844731eb01b9c3219cdd2fbfc0266d89d36afede->enter($__internal_3a534bc1f7ccb4c5074f6286844731eb01b9c3219cdd2fbfc0266d89d36afede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3a534bc1f7ccb4c5074f6286844731eb01b9c3219cdd2fbfc0266d89d36afede->leave($__internal_3a534bc1f7ccb4c5074f6286844731eb01b9c3219cdd2fbfc0266d89d36afede_prof);

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
