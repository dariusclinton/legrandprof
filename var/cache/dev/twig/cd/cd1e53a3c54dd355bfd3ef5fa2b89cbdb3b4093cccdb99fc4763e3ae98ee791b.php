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
        $__internal_cfbc9d12a8ec85fcf7c6bbae28f167af87120fd602d8aceb5c7d6eb4ab80136c = $this->env->getExtension("native_profiler");
        $__internal_cfbc9d12a8ec85fcf7c6bbae28f167af87120fd602d8aceb5c7d6eb4ab80136c->enter($__internal_cfbc9d12a8ec85fcf7c6bbae28f167af87120fd602d8aceb5c7d6eb4ab80136c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfbc9d12a8ec85fcf7c6bbae28f167af87120fd602d8aceb5c7d6eb4ab80136c->leave($__internal_cfbc9d12a8ec85fcf7c6bbae28f167af87120fd602d8aceb5c7d6eb4ab80136c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c28df2d190c950223f3df436ece06fbf7bc8794aa7af4b47eb7e0b4f3f6f3a06 = $this->env->getExtension("native_profiler");
        $__internal_c28df2d190c950223f3df436ece06fbf7bc8794aa7af4b47eb7e0b4f3f6f3a06->enter($__internal_c28df2d190c950223f3df436ece06fbf7bc8794aa7af4b47eb7e0b4f3f6f3a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c28df2d190c950223f3df436ece06fbf7bc8794aa7af4b47eb7e0b4f3f6f3a06->leave($__internal_c28df2d190c950223f3df436ece06fbf7bc8794aa7af4b47eb7e0b4f3f6f3a06_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b773c6311a1618de35d45d82aa3ae58eb58130d5d7261dedede55592ff57bb0d = $this->env->getExtension("native_profiler");
        $__internal_b773c6311a1618de35d45d82aa3ae58eb58130d5d7261dedede55592ff57bb0d->enter($__internal_b773c6311a1618de35d45d82aa3ae58eb58130d5d7261dedede55592ff57bb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b773c6311a1618de35d45d82aa3ae58eb58130d5d7261dedede55592ff57bb0d->leave($__internal_b773c6311a1618de35d45d82aa3ae58eb58130d5d7261dedede55592ff57bb0d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e9875fa0ccf8542ca3202df1e7f4b58a773ce6e94684f5950bdbe9922631e5f = $this->env->getExtension("native_profiler");
        $__internal_0e9875fa0ccf8542ca3202df1e7f4b58a773ce6e94684f5950bdbe9922631e5f->enter($__internal_0e9875fa0ccf8542ca3202df1e7f4b58a773ce6e94684f5950bdbe9922631e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0e9875fa0ccf8542ca3202df1e7f4b58a773ce6e94684f5950bdbe9922631e5f->leave($__internal_0e9875fa0ccf8542ca3202df1e7f4b58a773ce6e94684f5950bdbe9922631e5f_prof);

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
