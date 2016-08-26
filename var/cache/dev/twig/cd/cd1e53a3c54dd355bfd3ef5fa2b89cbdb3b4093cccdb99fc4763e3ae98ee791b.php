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
        $__internal_ced1dd25fe78d9ea73da76424bd788abeed56afa2a65e28059f2f170c7f98dc0 = $this->env->getExtension("native_profiler");
        $__internal_ced1dd25fe78d9ea73da76424bd788abeed56afa2a65e28059f2f170c7f98dc0->enter($__internal_ced1dd25fe78d9ea73da76424bd788abeed56afa2a65e28059f2f170c7f98dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ced1dd25fe78d9ea73da76424bd788abeed56afa2a65e28059f2f170c7f98dc0->leave($__internal_ced1dd25fe78d9ea73da76424bd788abeed56afa2a65e28059f2f170c7f98dc0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf495ad690d1725629f87dbb3b83127d0534d143a0426479d890837fb8ca8a96 = $this->env->getExtension("native_profiler");
        $__internal_cf495ad690d1725629f87dbb3b83127d0534d143a0426479d890837fb8ca8a96->enter($__internal_cf495ad690d1725629f87dbb3b83127d0534d143a0426479d890837fb8ca8a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cf495ad690d1725629f87dbb3b83127d0534d143a0426479d890837fb8ca8a96->leave($__internal_cf495ad690d1725629f87dbb3b83127d0534d143a0426479d890837fb8ca8a96_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6558f2589e37e267ef1e5f3882148cc37e1382769c8856f897ffab830136fd28 = $this->env->getExtension("native_profiler");
        $__internal_6558f2589e37e267ef1e5f3882148cc37e1382769c8856f897ffab830136fd28->enter($__internal_6558f2589e37e267ef1e5f3882148cc37e1382769c8856f897ffab830136fd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6558f2589e37e267ef1e5f3882148cc37e1382769c8856f897ffab830136fd28->leave($__internal_6558f2589e37e267ef1e5f3882148cc37e1382769c8856f897ffab830136fd28_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c22b38c059dcd46efba7c9b2a1c9a357ab3a6883a7bf02295ae1615d54d532bf = $this->env->getExtension("native_profiler");
        $__internal_c22b38c059dcd46efba7c9b2a1c9a357ab3a6883a7bf02295ae1615d54d532bf->enter($__internal_c22b38c059dcd46efba7c9b2a1c9a357ab3a6883a7bf02295ae1615d54d532bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c22b38c059dcd46efba7c9b2a1c9a357ab3a6883a7bf02295ae1615d54d532bf->leave($__internal_c22b38c059dcd46efba7c9b2a1c9a357ab3a6883a7bf02295ae1615d54d532bf_prof);

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
