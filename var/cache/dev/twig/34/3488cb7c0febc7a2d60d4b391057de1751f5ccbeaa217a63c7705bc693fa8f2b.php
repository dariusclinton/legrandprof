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
        $__internal_7c1f170ea5c978928d737247adb507c9503f39382a5b552056854f93eebd5678 = $this->env->getExtension("native_profiler");
        $__internal_7c1f170ea5c978928d737247adb507c9503f39382a5b552056854f93eebd5678->enter($__internal_7c1f170ea5c978928d737247adb507c9503f39382a5b552056854f93eebd5678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c1f170ea5c978928d737247adb507c9503f39382a5b552056854f93eebd5678->leave($__internal_7c1f170ea5c978928d737247adb507c9503f39382a5b552056854f93eebd5678_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3e5c7848b0f4d4bd987686eeb82098fcc09655585b6f89b00e3d9338e5b6f02 = $this->env->getExtension("native_profiler");
        $__internal_b3e5c7848b0f4d4bd987686eeb82098fcc09655585b6f89b00e3d9338e5b6f02->enter($__internal_b3e5c7848b0f4d4bd987686eeb82098fcc09655585b6f89b00e3d9338e5b6f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b3e5c7848b0f4d4bd987686eeb82098fcc09655585b6f89b00e3d9338e5b6f02->leave($__internal_b3e5c7848b0f4d4bd987686eeb82098fcc09655585b6f89b00e3d9338e5b6f02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b91849bcec92559ab27e9a9206956ee6006c336b2ac057629877ab92a2163fa4 = $this->env->getExtension("native_profiler");
        $__internal_b91849bcec92559ab27e9a9206956ee6006c336b2ac057629877ab92a2163fa4->enter($__internal_b91849bcec92559ab27e9a9206956ee6006c336b2ac057629877ab92a2163fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b91849bcec92559ab27e9a9206956ee6006c336b2ac057629877ab92a2163fa4->leave($__internal_b91849bcec92559ab27e9a9206956ee6006c336b2ac057629877ab92a2163fa4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d02c2328d99ae8487788b060b42e4446ee9688b8596fd31965bcb1f3955a8e48 = $this->env->getExtension("native_profiler");
        $__internal_d02c2328d99ae8487788b060b42e4446ee9688b8596fd31965bcb1f3955a8e48->enter($__internal_d02c2328d99ae8487788b060b42e4446ee9688b8596fd31965bcb1f3955a8e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d02c2328d99ae8487788b060b42e4446ee9688b8596fd31965bcb1f3955a8e48->leave($__internal_d02c2328d99ae8487788b060b42e4446ee9688b8596fd31965bcb1f3955a8e48_prof);

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
