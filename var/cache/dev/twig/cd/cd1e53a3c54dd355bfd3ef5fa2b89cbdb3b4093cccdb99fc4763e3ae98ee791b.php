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
        $__internal_59b8d1e065b9bc470b1ca39a6957f71cb53684560301ab656de62b8685642e52 = $this->env->getExtension("native_profiler");
        $__internal_59b8d1e065b9bc470b1ca39a6957f71cb53684560301ab656de62b8685642e52->enter($__internal_59b8d1e065b9bc470b1ca39a6957f71cb53684560301ab656de62b8685642e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59b8d1e065b9bc470b1ca39a6957f71cb53684560301ab656de62b8685642e52->leave($__internal_59b8d1e065b9bc470b1ca39a6957f71cb53684560301ab656de62b8685642e52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_415a810f2abeecc03660f2a0ce92969a24a189fe13889f40b04bf3e3377a4fc0 = $this->env->getExtension("native_profiler");
        $__internal_415a810f2abeecc03660f2a0ce92969a24a189fe13889f40b04bf3e3377a4fc0->enter($__internal_415a810f2abeecc03660f2a0ce92969a24a189fe13889f40b04bf3e3377a4fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_415a810f2abeecc03660f2a0ce92969a24a189fe13889f40b04bf3e3377a4fc0->leave($__internal_415a810f2abeecc03660f2a0ce92969a24a189fe13889f40b04bf3e3377a4fc0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_18e0c88127731a2af59972311b27372678346455b89a8e121c43c51f70064b17 = $this->env->getExtension("native_profiler");
        $__internal_18e0c88127731a2af59972311b27372678346455b89a8e121c43c51f70064b17->enter($__internal_18e0c88127731a2af59972311b27372678346455b89a8e121c43c51f70064b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_18e0c88127731a2af59972311b27372678346455b89a8e121c43c51f70064b17->leave($__internal_18e0c88127731a2af59972311b27372678346455b89a8e121c43c51f70064b17_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd5d91d38fba39c9111050a5e136777d204c2d1ce939ee9470f3fd5eead0201e = $this->env->getExtension("native_profiler");
        $__internal_bd5d91d38fba39c9111050a5e136777d204c2d1ce939ee9470f3fd5eead0201e->enter($__internal_bd5d91d38fba39c9111050a5e136777d204c2d1ce939ee9470f3fd5eead0201e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bd5d91d38fba39c9111050a5e136777d204c2d1ce939ee9470f3fd5eead0201e->leave($__internal_bd5d91d38fba39c9111050a5e136777d204c2d1ce939ee9470f3fd5eead0201e_prof);

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
