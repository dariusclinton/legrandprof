<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3ef93532d91729998b6ad105b8b1910dccd9deb93c6d57f5c15943077c5dac20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_7083636cbc114b07893ed9dcf9c20f28f07148d7da023b14a42b3b0a970bb712 = $this->env->getExtension("native_profiler");
        $__internal_7083636cbc114b07893ed9dcf9c20f28f07148d7da023b14a42b3b0a970bb712->enter($__internal_7083636cbc114b07893ed9dcf9c20f28f07148d7da023b14a42b3b0a970bb712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7083636cbc114b07893ed9dcf9c20f28f07148d7da023b14a42b3b0a970bb712->leave($__internal_7083636cbc114b07893ed9dcf9c20f28f07148d7da023b14a42b3b0a970bb712_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82cf6d3e1c6334176a41f9287dc3c7b6d959ab2a5b5fc8031f14e752b79c17ce = $this->env->getExtension("native_profiler");
        $__internal_82cf6d3e1c6334176a41f9287dc3c7b6d959ab2a5b5fc8031f14e752b79c17ce->enter($__internal_82cf6d3e1c6334176a41f9287dc3c7b6d959ab2a5b5fc8031f14e752b79c17ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_82cf6d3e1c6334176a41f9287dc3c7b6d959ab2a5b5fc8031f14e752b79c17ce->leave($__internal_82cf6d3e1c6334176a41f9287dc3c7b6d959ab2a5b5fc8031f14e752b79c17ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e457fd079a220e7ab8a6e9988014adc78a52bf0d5849e3a278dd42e81273ad8b = $this->env->getExtension("native_profiler");
        $__internal_e457fd079a220e7ab8a6e9988014adc78a52bf0d5849e3a278dd42e81273ad8b->enter($__internal_e457fd079a220e7ab8a6e9988014adc78a52bf0d5849e3a278dd42e81273ad8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e457fd079a220e7ab8a6e9988014adc78a52bf0d5849e3a278dd42e81273ad8b->leave($__internal_e457fd079a220e7ab8a6e9988014adc78a52bf0d5849e3a278dd42e81273ad8b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b8426ae6139a5f7e4a33d28562eb86eb217bf7c70b2999f3214f44cfd18999f = $this->env->getExtension("native_profiler");
        $__internal_4b8426ae6139a5f7e4a33d28562eb86eb217bf7c70b2999f3214f44cfd18999f->enter($__internal_4b8426ae6139a5f7e4a33d28562eb86eb217bf7c70b2999f3214f44cfd18999f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4b8426ae6139a5f7e4a33d28562eb86eb217bf7c70b2999f3214f44cfd18999f->leave($__internal_4b8426ae6139a5f7e4a33d28562eb86eb217bf7c70b2999f3214f44cfd18999f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
