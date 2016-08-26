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
        $__internal_16ae1ead0c457b4c8cbc0542a7ce899c548fb9b446c0c7b1b4d1f704a8ef0273 = $this->env->getExtension("native_profiler");
        $__internal_16ae1ead0c457b4c8cbc0542a7ce899c548fb9b446c0c7b1b4d1f704a8ef0273->enter($__internal_16ae1ead0c457b4c8cbc0542a7ce899c548fb9b446c0c7b1b4d1f704a8ef0273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16ae1ead0c457b4c8cbc0542a7ce899c548fb9b446c0c7b1b4d1f704a8ef0273->leave($__internal_16ae1ead0c457b4c8cbc0542a7ce899c548fb9b446c0c7b1b4d1f704a8ef0273_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c62f02eee00198a50c386727483aaefb14073ed43e6216d532bbb85d2d75c4ab = $this->env->getExtension("native_profiler");
        $__internal_c62f02eee00198a50c386727483aaefb14073ed43e6216d532bbb85d2d75c4ab->enter($__internal_c62f02eee00198a50c386727483aaefb14073ed43e6216d532bbb85d2d75c4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c62f02eee00198a50c386727483aaefb14073ed43e6216d532bbb85d2d75c4ab->leave($__internal_c62f02eee00198a50c386727483aaefb14073ed43e6216d532bbb85d2d75c4ab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ad03cd197f68b055eee1c77795165e6a5b3fa767b01031ef7b8d4bcebbe3528 = $this->env->getExtension("native_profiler");
        $__internal_8ad03cd197f68b055eee1c77795165e6a5b3fa767b01031ef7b8d4bcebbe3528->enter($__internal_8ad03cd197f68b055eee1c77795165e6a5b3fa767b01031ef7b8d4bcebbe3528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8ad03cd197f68b055eee1c77795165e6a5b3fa767b01031ef7b8d4bcebbe3528->leave($__internal_8ad03cd197f68b055eee1c77795165e6a5b3fa767b01031ef7b8d4bcebbe3528_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f13a8eff0686970af7e32be7e884b674a7285320904c971730735931c0734768 = $this->env->getExtension("native_profiler");
        $__internal_f13a8eff0686970af7e32be7e884b674a7285320904c971730735931c0734768->enter($__internal_f13a8eff0686970af7e32be7e884b674a7285320904c971730735931c0734768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f13a8eff0686970af7e32be7e884b674a7285320904c971730735931c0734768->leave($__internal_f13a8eff0686970af7e32be7e884b674a7285320904c971730735931c0734768_prof);

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
