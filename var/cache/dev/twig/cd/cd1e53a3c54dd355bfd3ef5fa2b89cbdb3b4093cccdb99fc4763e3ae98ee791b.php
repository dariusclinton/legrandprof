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
        $__internal_3f42e2be1360ecde815053d8d419796f814ea1475a5b9f38eafc0412fe3e7b28 = $this->env->getExtension("native_profiler");
        $__internal_3f42e2be1360ecde815053d8d419796f814ea1475a5b9f38eafc0412fe3e7b28->enter($__internal_3f42e2be1360ecde815053d8d419796f814ea1475a5b9f38eafc0412fe3e7b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f42e2be1360ecde815053d8d419796f814ea1475a5b9f38eafc0412fe3e7b28->leave($__internal_3f42e2be1360ecde815053d8d419796f814ea1475a5b9f38eafc0412fe3e7b28_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b3d4705514dd86cde5ee92671add7991de45d2f264aabb60b9925227fbe3b8d = $this->env->getExtension("native_profiler");
        $__internal_9b3d4705514dd86cde5ee92671add7991de45d2f264aabb60b9925227fbe3b8d->enter($__internal_9b3d4705514dd86cde5ee92671add7991de45d2f264aabb60b9925227fbe3b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9b3d4705514dd86cde5ee92671add7991de45d2f264aabb60b9925227fbe3b8d->leave($__internal_9b3d4705514dd86cde5ee92671add7991de45d2f264aabb60b9925227fbe3b8d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b15461a519d94aacef4bf900a7127ea2ccbee77496d75430ad5133d3fb18de4 = $this->env->getExtension("native_profiler");
        $__internal_9b15461a519d94aacef4bf900a7127ea2ccbee77496d75430ad5133d3fb18de4->enter($__internal_9b15461a519d94aacef4bf900a7127ea2ccbee77496d75430ad5133d3fb18de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9b15461a519d94aacef4bf900a7127ea2ccbee77496d75430ad5133d3fb18de4->leave($__internal_9b15461a519d94aacef4bf900a7127ea2ccbee77496d75430ad5133d3fb18de4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_55bff21484333b518b15c9a5253de751fd4e7db1d92fd79daae290a5a833b7c3 = $this->env->getExtension("native_profiler");
        $__internal_55bff21484333b518b15c9a5253de751fd4e7db1d92fd79daae290a5a833b7c3->enter($__internal_55bff21484333b518b15c9a5253de751fd4e7db1d92fd79daae290a5a833b7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_55bff21484333b518b15c9a5253de751fd4e7db1d92fd79daae290a5a833b7c3->leave($__internal_55bff21484333b518b15c9a5253de751fd4e7db1d92fd79daae290a5a833b7c3_prof);

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
