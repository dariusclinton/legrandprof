<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5b3448eb9145abee8be5c169870831eefa9a3549feab7708148b97cf49702500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_48465bbbc16843ea2ed0c360a6fbc7c036bb02440ad41a9fa97136aec37a2484 = $this->env->getExtension("native_profiler");
        $__internal_48465bbbc16843ea2ed0c360a6fbc7c036bb02440ad41a9fa97136aec37a2484->enter($__internal_48465bbbc16843ea2ed0c360a6fbc7c036bb02440ad41a9fa97136aec37a2484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48465bbbc16843ea2ed0c360a6fbc7c036bb02440ad41a9fa97136aec37a2484->leave($__internal_48465bbbc16843ea2ed0c360a6fbc7c036bb02440ad41a9fa97136aec37a2484_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e56215742b5236daf91e2ab53afaa2ce8297e3ce6b767d62a7accb911f55f796 = $this->env->getExtension("native_profiler");
        $__internal_e56215742b5236daf91e2ab53afaa2ce8297e3ce6b767d62a7accb911f55f796->enter($__internal_e56215742b5236daf91e2ab53afaa2ce8297e3ce6b767d62a7accb911f55f796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e56215742b5236daf91e2ab53afaa2ce8297e3ce6b767d62a7accb911f55f796->leave($__internal_e56215742b5236daf91e2ab53afaa2ce8297e3ce6b767d62a7accb911f55f796_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_855208395302d1c2393d06f738ca4678656d33ee06274581f94535aae59c0638 = $this->env->getExtension("native_profiler");
        $__internal_855208395302d1c2393d06f738ca4678656d33ee06274581f94535aae59c0638->enter($__internal_855208395302d1c2393d06f738ca4678656d33ee06274581f94535aae59c0638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_855208395302d1c2393d06f738ca4678656d33ee06274581f94535aae59c0638->leave($__internal_855208395302d1c2393d06f738ca4678656d33ee06274581f94535aae59c0638_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c70a50cbe0870b1b121efb14700942a64bade247b672e4556a12befe09ea77c1 = $this->env->getExtension("native_profiler");
        $__internal_c70a50cbe0870b1b121efb14700942a64bade247b672e4556a12befe09ea77c1->enter($__internal_c70a50cbe0870b1b121efb14700942a64bade247b672e4556a12befe09ea77c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c70a50cbe0870b1b121efb14700942a64bade247b672e4556a12befe09ea77c1->leave($__internal_c70a50cbe0870b1b121efb14700942a64bade247b672e4556a12befe09ea77c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
