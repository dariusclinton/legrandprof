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
        $__internal_a23ba209dbc1f084652ce6f31b0b8b187d2ec10bf1f73767e08bedc56e7bf315 = $this->env->getExtension("native_profiler");
        $__internal_a23ba209dbc1f084652ce6f31b0b8b187d2ec10bf1f73767e08bedc56e7bf315->enter($__internal_a23ba209dbc1f084652ce6f31b0b8b187d2ec10bf1f73767e08bedc56e7bf315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a23ba209dbc1f084652ce6f31b0b8b187d2ec10bf1f73767e08bedc56e7bf315->leave($__internal_a23ba209dbc1f084652ce6f31b0b8b187d2ec10bf1f73767e08bedc56e7bf315_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5537097894c98afe890a039a5ed1e242783f17bad27c46c2152ea32c464f3851 = $this->env->getExtension("native_profiler");
        $__internal_5537097894c98afe890a039a5ed1e242783f17bad27c46c2152ea32c464f3851->enter($__internal_5537097894c98afe890a039a5ed1e242783f17bad27c46c2152ea32c464f3851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5537097894c98afe890a039a5ed1e242783f17bad27c46c2152ea32c464f3851->leave($__internal_5537097894c98afe890a039a5ed1e242783f17bad27c46c2152ea32c464f3851_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3581f8149b1ee2003972f383daf7cddcafccdb643d3bcd9da8c33658e0d8a21b = $this->env->getExtension("native_profiler");
        $__internal_3581f8149b1ee2003972f383daf7cddcafccdb643d3bcd9da8c33658e0d8a21b->enter($__internal_3581f8149b1ee2003972f383daf7cddcafccdb643d3bcd9da8c33658e0d8a21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3581f8149b1ee2003972f383daf7cddcafccdb643d3bcd9da8c33658e0d8a21b->leave($__internal_3581f8149b1ee2003972f383daf7cddcafccdb643d3bcd9da8c33658e0d8a21b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4e3cb7b59b69fb8d90e7b47a33fcb11289ed4ad2382b0d5c429a430d4990f5b = $this->env->getExtension("native_profiler");
        $__internal_b4e3cb7b59b69fb8d90e7b47a33fcb11289ed4ad2382b0d5c429a430d4990f5b->enter($__internal_b4e3cb7b59b69fb8d90e7b47a33fcb11289ed4ad2382b0d5c429a430d4990f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b4e3cb7b59b69fb8d90e7b47a33fcb11289ed4ad2382b0d5c429a430d4990f5b->leave($__internal_b4e3cb7b59b69fb8d90e7b47a33fcb11289ed4ad2382b0d5c429a430d4990f5b_prof);

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
