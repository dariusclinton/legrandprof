<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5b3448eb9145abee8be5c169870831eefa9a3549feab7708148b97cf49702500 extends Twig_Template
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
        $__internal_855469056dd992944e3338b84abdc15bfeb2e853e36e932246d892a54cc707e4 = $this->env->getExtension("native_profiler");
        $__internal_855469056dd992944e3338b84abdc15bfeb2e853e36e932246d892a54cc707e4->enter($__internal_855469056dd992944e3338b84abdc15bfeb2e853e36e932246d892a54cc707e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_855469056dd992944e3338b84abdc15bfeb2e853e36e932246d892a54cc707e4->leave($__internal_855469056dd992944e3338b84abdc15bfeb2e853e36e932246d892a54cc707e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_124d5ae3615b1aea65552e6765e4ada361f9c631e520cde75def55edfe25b65b = $this->env->getExtension("native_profiler");
        $__internal_124d5ae3615b1aea65552e6765e4ada361f9c631e520cde75def55edfe25b65b->enter($__internal_124d5ae3615b1aea65552e6765e4ada361f9c631e520cde75def55edfe25b65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_124d5ae3615b1aea65552e6765e4ada361f9c631e520cde75def55edfe25b65b->leave($__internal_124d5ae3615b1aea65552e6765e4ada361f9c631e520cde75def55edfe25b65b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd865d12fd1e6649b8b26805d71fff6e066b9f319c69c8b97e00a37f77b6220e = $this->env->getExtension("native_profiler");
        $__internal_fd865d12fd1e6649b8b26805d71fff6e066b9f319c69c8b97e00a37f77b6220e->enter($__internal_fd865d12fd1e6649b8b26805d71fff6e066b9f319c69c8b97e00a37f77b6220e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd865d12fd1e6649b8b26805d71fff6e066b9f319c69c8b97e00a37f77b6220e->leave($__internal_fd865d12fd1e6649b8b26805d71fff6e066b9f319c69c8b97e00a37f77b6220e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_275e5415111db7c89ef41b4601a18dde13ca66a69008983b01b59621dc51bcb7 = $this->env->getExtension("native_profiler");
        $__internal_275e5415111db7c89ef41b4601a18dde13ca66a69008983b01b59621dc51bcb7->enter($__internal_275e5415111db7c89ef41b4601a18dde13ca66a69008983b01b59621dc51bcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_275e5415111db7c89ef41b4601a18dde13ca66a69008983b01b59621dc51bcb7->leave($__internal_275e5415111db7c89ef41b4601a18dde13ca66a69008983b01b59621dc51bcb7_prof);

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
