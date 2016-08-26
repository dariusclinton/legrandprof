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
        $__internal_abcc84b09c1f3e1fe4415cefd43b49affc02e9ada730a50ec4e2b1a38c811927 = $this->env->getExtension("native_profiler");
        $__internal_abcc84b09c1f3e1fe4415cefd43b49affc02e9ada730a50ec4e2b1a38c811927->enter($__internal_abcc84b09c1f3e1fe4415cefd43b49affc02e9ada730a50ec4e2b1a38c811927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abcc84b09c1f3e1fe4415cefd43b49affc02e9ada730a50ec4e2b1a38c811927->leave($__internal_abcc84b09c1f3e1fe4415cefd43b49affc02e9ada730a50ec4e2b1a38c811927_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a6036e5fb7b3e6d34841160f751e6b0220d0c9ee687dcd0fde3611c5a560ebb = $this->env->getExtension("native_profiler");
        $__internal_6a6036e5fb7b3e6d34841160f751e6b0220d0c9ee687dcd0fde3611c5a560ebb->enter($__internal_6a6036e5fb7b3e6d34841160f751e6b0220d0c9ee687dcd0fde3611c5a560ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6a6036e5fb7b3e6d34841160f751e6b0220d0c9ee687dcd0fde3611c5a560ebb->leave($__internal_6a6036e5fb7b3e6d34841160f751e6b0220d0c9ee687dcd0fde3611c5a560ebb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b08897a1830dac481a317a7fa58528b86f94f0269c60988653622fb56fb23d6 = $this->env->getExtension("native_profiler");
        $__internal_4b08897a1830dac481a317a7fa58528b86f94f0269c60988653622fb56fb23d6->enter($__internal_4b08897a1830dac481a317a7fa58528b86f94f0269c60988653622fb56fb23d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b08897a1830dac481a317a7fa58528b86f94f0269c60988653622fb56fb23d6->leave($__internal_4b08897a1830dac481a317a7fa58528b86f94f0269c60988653622fb56fb23d6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_025115457ee469e9a9d8e5c778cba775479b266ed4058b41e5e81373f0982961 = $this->env->getExtension("native_profiler");
        $__internal_025115457ee469e9a9d8e5c778cba775479b266ed4058b41e5e81373f0982961->enter($__internal_025115457ee469e9a9d8e5c778cba775479b266ed4058b41e5e81373f0982961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_025115457ee469e9a9d8e5c778cba775479b266ed4058b41e5e81373f0982961->leave($__internal_025115457ee469e9a9d8e5c778cba775479b266ed4058b41e5e81373f0982961_prof);

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
