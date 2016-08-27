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
        $__internal_975e7ecc9aaafa7c168158874b63bedfe80232e160aed86700c7c3363ab20ef1 = $this->env->getExtension("native_profiler");
        $__internal_975e7ecc9aaafa7c168158874b63bedfe80232e160aed86700c7c3363ab20ef1->enter($__internal_975e7ecc9aaafa7c168158874b63bedfe80232e160aed86700c7c3363ab20ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_975e7ecc9aaafa7c168158874b63bedfe80232e160aed86700c7c3363ab20ef1->leave($__internal_975e7ecc9aaafa7c168158874b63bedfe80232e160aed86700c7c3363ab20ef1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f110f43496f1dbb03675c28617c8af0984b94d130cc6ad06a1ef207fc5ec94a = $this->env->getExtension("native_profiler");
        $__internal_7f110f43496f1dbb03675c28617c8af0984b94d130cc6ad06a1ef207fc5ec94a->enter($__internal_7f110f43496f1dbb03675c28617c8af0984b94d130cc6ad06a1ef207fc5ec94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7f110f43496f1dbb03675c28617c8af0984b94d130cc6ad06a1ef207fc5ec94a->leave($__internal_7f110f43496f1dbb03675c28617c8af0984b94d130cc6ad06a1ef207fc5ec94a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11aae44702ca612f336d6170c2d24168970742cbed9956291777da9dd70bc2b5 = $this->env->getExtension("native_profiler");
        $__internal_11aae44702ca612f336d6170c2d24168970742cbed9956291777da9dd70bc2b5->enter($__internal_11aae44702ca612f336d6170c2d24168970742cbed9956291777da9dd70bc2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_11aae44702ca612f336d6170c2d24168970742cbed9956291777da9dd70bc2b5->leave($__internal_11aae44702ca612f336d6170c2d24168970742cbed9956291777da9dd70bc2b5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7190d7704d821c7bcf827e587d053912068553bde65a352116b48fb4bb9d61cb = $this->env->getExtension("native_profiler");
        $__internal_7190d7704d821c7bcf827e587d053912068553bde65a352116b48fb4bb9d61cb->enter($__internal_7190d7704d821c7bcf827e587d053912068553bde65a352116b48fb4bb9d61cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7190d7704d821c7bcf827e587d053912068553bde65a352116b48fb4bb9d61cb->leave($__internal_7190d7704d821c7bcf827e587d053912068553bde65a352116b48fb4bb9d61cb_prof);

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
