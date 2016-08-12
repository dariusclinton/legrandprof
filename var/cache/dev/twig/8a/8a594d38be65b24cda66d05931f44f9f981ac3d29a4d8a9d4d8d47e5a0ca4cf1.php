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
        $__internal_69c413e7e673e5a19b3be374d92af96b45126ce01b60b0304ca5594daa312c49 = $this->env->getExtension("native_profiler");
        $__internal_69c413e7e673e5a19b3be374d92af96b45126ce01b60b0304ca5594daa312c49->enter($__internal_69c413e7e673e5a19b3be374d92af96b45126ce01b60b0304ca5594daa312c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69c413e7e673e5a19b3be374d92af96b45126ce01b60b0304ca5594daa312c49->leave($__internal_69c413e7e673e5a19b3be374d92af96b45126ce01b60b0304ca5594daa312c49_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce7b896388fcec3b491fd9163f8a9e8400c841b8c1a8818841dd816e02f065e4 = $this->env->getExtension("native_profiler");
        $__internal_ce7b896388fcec3b491fd9163f8a9e8400c841b8c1a8818841dd816e02f065e4->enter($__internal_ce7b896388fcec3b491fd9163f8a9e8400c841b8c1a8818841dd816e02f065e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ce7b896388fcec3b491fd9163f8a9e8400c841b8c1a8818841dd816e02f065e4->leave($__internal_ce7b896388fcec3b491fd9163f8a9e8400c841b8c1a8818841dd816e02f065e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a67e34acc80623df32298b00eb7ae123f5355c0caa9bf08a731ec0a840b38da = $this->env->getExtension("native_profiler");
        $__internal_8a67e34acc80623df32298b00eb7ae123f5355c0caa9bf08a731ec0a840b38da->enter($__internal_8a67e34acc80623df32298b00eb7ae123f5355c0caa9bf08a731ec0a840b38da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8a67e34acc80623df32298b00eb7ae123f5355c0caa9bf08a731ec0a840b38da->leave($__internal_8a67e34acc80623df32298b00eb7ae123f5355c0caa9bf08a731ec0a840b38da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e9bee07b771169f0757dc7b9b3203ee8db549d3d127dfa17b2508d9604fb6c2 = $this->env->getExtension("native_profiler");
        $__internal_8e9bee07b771169f0757dc7b9b3203ee8db549d3d127dfa17b2508d9604fb6c2->enter($__internal_8e9bee07b771169f0757dc7b9b3203ee8db549d3d127dfa17b2508d9604fb6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8e9bee07b771169f0757dc7b9b3203ee8db549d3d127dfa17b2508d9604fb6c2->leave($__internal_8e9bee07b771169f0757dc7b9b3203ee8db549d3d127dfa17b2508d9604fb6c2_prof);

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
