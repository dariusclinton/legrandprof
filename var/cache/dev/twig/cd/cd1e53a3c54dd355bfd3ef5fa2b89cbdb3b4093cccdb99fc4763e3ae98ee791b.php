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
        $__internal_a469c7753b7c5929139fc15b3ce6e7ade81f6dfe2d368fb968402cd128015cb9 = $this->env->getExtension("native_profiler");
        $__internal_a469c7753b7c5929139fc15b3ce6e7ade81f6dfe2d368fb968402cd128015cb9->enter($__internal_a469c7753b7c5929139fc15b3ce6e7ade81f6dfe2d368fb968402cd128015cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a469c7753b7c5929139fc15b3ce6e7ade81f6dfe2d368fb968402cd128015cb9->leave($__internal_a469c7753b7c5929139fc15b3ce6e7ade81f6dfe2d368fb968402cd128015cb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24fe3d60235dea1baa0d7efc4aadec0ee00efa8037e2f7999bc9850676dfa4cc = $this->env->getExtension("native_profiler");
        $__internal_24fe3d60235dea1baa0d7efc4aadec0ee00efa8037e2f7999bc9850676dfa4cc->enter($__internal_24fe3d60235dea1baa0d7efc4aadec0ee00efa8037e2f7999bc9850676dfa4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_24fe3d60235dea1baa0d7efc4aadec0ee00efa8037e2f7999bc9850676dfa4cc->leave($__internal_24fe3d60235dea1baa0d7efc4aadec0ee00efa8037e2f7999bc9850676dfa4cc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1016e3b0f082dc2468681b83a248e68b0d97348efd8d8f839c623ada65c3e311 = $this->env->getExtension("native_profiler");
        $__internal_1016e3b0f082dc2468681b83a248e68b0d97348efd8d8f839c623ada65c3e311->enter($__internal_1016e3b0f082dc2468681b83a248e68b0d97348efd8d8f839c623ada65c3e311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1016e3b0f082dc2468681b83a248e68b0d97348efd8d8f839c623ada65c3e311->leave($__internal_1016e3b0f082dc2468681b83a248e68b0d97348efd8d8f839c623ada65c3e311_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed0ee49676cc8e6458e69e4c107233029901ca17df49ef2bc6788691cc643423 = $this->env->getExtension("native_profiler");
        $__internal_ed0ee49676cc8e6458e69e4c107233029901ca17df49ef2bc6788691cc643423->enter($__internal_ed0ee49676cc8e6458e69e4c107233029901ca17df49ef2bc6788691cc643423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ed0ee49676cc8e6458e69e4c107233029901ca17df49ef2bc6788691cc643423->leave($__internal_ed0ee49676cc8e6458e69e4c107233029901ca17df49ef2bc6788691cc643423_prof);

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
