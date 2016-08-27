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
        $__internal_807242edad5384e9085d753eb4263cf87c4b025aec8d50723239a2b2b3b5b5bd = $this->env->getExtension("native_profiler");
        $__internal_807242edad5384e9085d753eb4263cf87c4b025aec8d50723239a2b2b3b5b5bd->enter($__internal_807242edad5384e9085d753eb4263cf87c4b025aec8d50723239a2b2b3b5b5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_807242edad5384e9085d753eb4263cf87c4b025aec8d50723239a2b2b3b5b5bd->leave($__internal_807242edad5384e9085d753eb4263cf87c4b025aec8d50723239a2b2b3b5b5bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10b79735c6e4c585e7f66f0196e4b0178726f23d259207a3f09db0e3e4f88c4b = $this->env->getExtension("native_profiler");
        $__internal_10b79735c6e4c585e7f66f0196e4b0178726f23d259207a3f09db0e3e4f88c4b->enter($__internal_10b79735c6e4c585e7f66f0196e4b0178726f23d259207a3f09db0e3e4f88c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_10b79735c6e4c585e7f66f0196e4b0178726f23d259207a3f09db0e3e4f88c4b->leave($__internal_10b79735c6e4c585e7f66f0196e4b0178726f23d259207a3f09db0e3e4f88c4b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11fc6d5c0003aded7c08e81d49b43c218c475979daf45a63825f05920fa4a349 = $this->env->getExtension("native_profiler");
        $__internal_11fc6d5c0003aded7c08e81d49b43c218c475979daf45a63825f05920fa4a349->enter($__internal_11fc6d5c0003aded7c08e81d49b43c218c475979daf45a63825f05920fa4a349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_11fc6d5c0003aded7c08e81d49b43c218c475979daf45a63825f05920fa4a349->leave($__internal_11fc6d5c0003aded7c08e81d49b43c218c475979daf45a63825f05920fa4a349_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_720588e99cb9419d47d7cdcf84c341af5d766a23349077a42af926b7058c1999 = $this->env->getExtension("native_profiler");
        $__internal_720588e99cb9419d47d7cdcf84c341af5d766a23349077a42af926b7058c1999->enter($__internal_720588e99cb9419d47d7cdcf84c341af5d766a23349077a42af926b7058c1999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_720588e99cb9419d47d7cdcf84c341af5d766a23349077a42af926b7058c1999->leave($__internal_720588e99cb9419d47d7cdcf84c341af5d766a23349077a42af926b7058c1999_prof);

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
