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
        $__internal_a47300d69c702f728ad0d1c90e922c55219edda1306fa95707d601e732858f19 = $this->env->getExtension("native_profiler");
        $__internal_a47300d69c702f728ad0d1c90e922c55219edda1306fa95707d601e732858f19->enter($__internal_a47300d69c702f728ad0d1c90e922c55219edda1306fa95707d601e732858f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a47300d69c702f728ad0d1c90e922c55219edda1306fa95707d601e732858f19->leave($__internal_a47300d69c702f728ad0d1c90e922c55219edda1306fa95707d601e732858f19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05f8d57c0b79c34e0b22294ab94d320d20b579a7cc5eb363e35af96de6906864 = $this->env->getExtension("native_profiler");
        $__internal_05f8d57c0b79c34e0b22294ab94d320d20b579a7cc5eb363e35af96de6906864->enter($__internal_05f8d57c0b79c34e0b22294ab94d320d20b579a7cc5eb363e35af96de6906864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_05f8d57c0b79c34e0b22294ab94d320d20b579a7cc5eb363e35af96de6906864->leave($__internal_05f8d57c0b79c34e0b22294ab94d320d20b579a7cc5eb363e35af96de6906864_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7df96df6ed86a3071970581924bf4d52acbc257fc94fbdaa077f7f47230495ee = $this->env->getExtension("native_profiler");
        $__internal_7df96df6ed86a3071970581924bf4d52acbc257fc94fbdaa077f7f47230495ee->enter($__internal_7df96df6ed86a3071970581924bf4d52acbc257fc94fbdaa077f7f47230495ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7df96df6ed86a3071970581924bf4d52acbc257fc94fbdaa077f7f47230495ee->leave($__internal_7df96df6ed86a3071970581924bf4d52acbc257fc94fbdaa077f7f47230495ee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2ceb8e7208d17344b73fe2333901b4c86c8859be3e71257a6560ac7644af20e = $this->env->getExtension("native_profiler");
        $__internal_c2ceb8e7208d17344b73fe2333901b4c86c8859be3e71257a6560ac7644af20e->enter($__internal_c2ceb8e7208d17344b73fe2333901b4c86c8859be3e71257a6560ac7644af20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c2ceb8e7208d17344b73fe2333901b4c86c8859be3e71257a6560ac7644af20e->leave($__internal_c2ceb8e7208d17344b73fe2333901b4c86c8859be3e71257a6560ac7644af20e_prof);

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
