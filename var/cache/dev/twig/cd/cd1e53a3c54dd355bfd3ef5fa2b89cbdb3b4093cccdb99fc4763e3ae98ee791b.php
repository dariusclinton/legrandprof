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
        $__internal_d238de71a2557f1da31ee1392b3c56ec532ac18edce2be906cdd677e547bc5af = $this->env->getExtension("native_profiler");
        $__internal_d238de71a2557f1da31ee1392b3c56ec532ac18edce2be906cdd677e547bc5af->enter($__internal_d238de71a2557f1da31ee1392b3c56ec532ac18edce2be906cdd677e547bc5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d238de71a2557f1da31ee1392b3c56ec532ac18edce2be906cdd677e547bc5af->leave($__internal_d238de71a2557f1da31ee1392b3c56ec532ac18edce2be906cdd677e547bc5af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78a538a3720ee5fc06dee67e061ca5cde03f5f83faf0ca3c3f6d48bb241a9501 = $this->env->getExtension("native_profiler");
        $__internal_78a538a3720ee5fc06dee67e061ca5cde03f5f83faf0ca3c3f6d48bb241a9501->enter($__internal_78a538a3720ee5fc06dee67e061ca5cde03f5f83faf0ca3c3f6d48bb241a9501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_78a538a3720ee5fc06dee67e061ca5cde03f5f83faf0ca3c3f6d48bb241a9501->leave($__internal_78a538a3720ee5fc06dee67e061ca5cde03f5f83faf0ca3c3f6d48bb241a9501_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f42942220a3b8965367b01562404d280bb38eec4dc473b2a59c31cebcc9c8b02 = $this->env->getExtension("native_profiler");
        $__internal_f42942220a3b8965367b01562404d280bb38eec4dc473b2a59c31cebcc9c8b02->enter($__internal_f42942220a3b8965367b01562404d280bb38eec4dc473b2a59c31cebcc9c8b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f42942220a3b8965367b01562404d280bb38eec4dc473b2a59c31cebcc9c8b02->leave($__internal_f42942220a3b8965367b01562404d280bb38eec4dc473b2a59c31cebcc9c8b02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2686ef02c2cf0278752618faf44a412cb80dfe0b75b20fc68c3269e23772bf7 = $this->env->getExtension("native_profiler");
        $__internal_a2686ef02c2cf0278752618faf44a412cb80dfe0b75b20fc68c3269e23772bf7->enter($__internal_a2686ef02c2cf0278752618faf44a412cb80dfe0b75b20fc68c3269e23772bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a2686ef02c2cf0278752618faf44a412cb80dfe0b75b20fc68c3269e23772bf7->leave($__internal_a2686ef02c2cf0278752618faf44a412cb80dfe0b75b20fc68c3269e23772bf7_prof);

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
