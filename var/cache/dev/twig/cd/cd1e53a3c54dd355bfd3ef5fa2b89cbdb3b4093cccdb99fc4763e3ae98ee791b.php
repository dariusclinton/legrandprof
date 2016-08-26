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
        $__internal_af0b274be90503708191697ed4d3959b190d2aff26b59781e77f62bacd28dab6 = $this->env->getExtension("native_profiler");
        $__internal_af0b274be90503708191697ed4d3959b190d2aff26b59781e77f62bacd28dab6->enter($__internal_af0b274be90503708191697ed4d3959b190d2aff26b59781e77f62bacd28dab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af0b274be90503708191697ed4d3959b190d2aff26b59781e77f62bacd28dab6->leave($__internal_af0b274be90503708191697ed4d3959b190d2aff26b59781e77f62bacd28dab6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3fbe2b6fb174dc95fef01a6818bfc6b83c131974c43c28ec40f10e4895487bf = $this->env->getExtension("native_profiler");
        $__internal_a3fbe2b6fb174dc95fef01a6818bfc6b83c131974c43c28ec40f10e4895487bf->enter($__internal_a3fbe2b6fb174dc95fef01a6818bfc6b83c131974c43c28ec40f10e4895487bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a3fbe2b6fb174dc95fef01a6818bfc6b83c131974c43c28ec40f10e4895487bf->leave($__internal_a3fbe2b6fb174dc95fef01a6818bfc6b83c131974c43c28ec40f10e4895487bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8a5039e46b61e9da0366f78491d167deca184029d69cb414377c8f8904583d3 = $this->env->getExtension("native_profiler");
        $__internal_e8a5039e46b61e9da0366f78491d167deca184029d69cb414377c8f8904583d3->enter($__internal_e8a5039e46b61e9da0366f78491d167deca184029d69cb414377c8f8904583d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e8a5039e46b61e9da0366f78491d167deca184029d69cb414377c8f8904583d3->leave($__internal_e8a5039e46b61e9da0366f78491d167deca184029d69cb414377c8f8904583d3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_55e69b024c011e9527c95ce70d81bf661ab335f5c61d7e93e9bb0f4a9855cbc2 = $this->env->getExtension("native_profiler");
        $__internal_55e69b024c011e9527c95ce70d81bf661ab335f5c61d7e93e9bb0f4a9855cbc2->enter($__internal_55e69b024c011e9527c95ce70d81bf661ab335f5c61d7e93e9bb0f4a9855cbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_55e69b024c011e9527c95ce70d81bf661ab335f5c61d7e93e9bb0f4a9855cbc2->leave($__internal_55e69b024c011e9527c95ce70d81bf661ab335f5c61d7e93e9bb0f4a9855cbc2_prof);

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
