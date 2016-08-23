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
        $__internal_7adfdb9fa1a113df5340e0d0980c01497a5c77e2e6ee72c5e14cbafa51fc8cef = $this->env->getExtension("native_profiler");
        $__internal_7adfdb9fa1a113df5340e0d0980c01497a5c77e2e6ee72c5e14cbafa51fc8cef->enter($__internal_7adfdb9fa1a113df5340e0d0980c01497a5c77e2e6ee72c5e14cbafa51fc8cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7adfdb9fa1a113df5340e0d0980c01497a5c77e2e6ee72c5e14cbafa51fc8cef->leave($__internal_7adfdb9fa1a113df5340e0d0980c01497a5c77e2e6ee72c5e14cbafa51fc8cef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f5e8af5fb8c97bdcbef6419d75ea3e899a1f4eeb1f5bc769811090ca5fd592b = $this->env->getExtension("native_profiler");
        $__internal_9f5e8af5fb8c97bdcbef6419d75ea3e899a1f4eeb1f5bc769811090ca5fd592b->enter($__internal_9f5e8af5fb8c97bdcbef6419d75ea3e899a1f4eeb1f5bc769811090ca5fd592b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9f5e8af5fb8c97bdcbef6419d75ea3e899a1f4eeb1f5bc769811090ca5fd592b->leave($__internal_9f5e8af5fb8c97bdcbef6419d75ea3e899a1f4eeb1f5bc769811090ca5fd592b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd41f6dd6dbffc8c456f67e8ac729aee8a3170c37665ef9b6e37d41ee307d49b = $this->env->getExtension("native_profiler");
        $__internal_dd41f6dd6dbffc8c456f67e8ac729aee8a3170c37665ef9b6e37d41ee307d49b->enter($__internal_dd41f6dd6dbffc8c456f67e8ac729aee8a3170c37665ef9b6e37d41ee307d49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dd41f6dd6dbffc8c456f67e8ac729aee8a3170c37665ef9b6e37d41ee307d49b->leave($__internal_dd41f6dd6dbffc8c456f67e8ac729aee8a3170c37665ef9b6e37d41ee307d49b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f45242e4ae0afeb4e0bd796dd399450a09a97d1bb3260921fe0ee449a7b809b7 = $this->env->getExtension("native_profiler");
        $__internal_f45242e4ae0afeb4e0bd796dd399450a09a97d1bb3260921fe0ee449a7b809b7->enter($__internal_f45242e4ae0afeb4e0bd796dd399450a09a97d1bb3260921fe0ee449a7b809b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f45242e4ae0afeb4e0bd796dd399450a09a97d1bb3260921fe0ee449a7b809b7->leave($__internal_f45242e4ae0afeb4e0bd796dd399450a09a97d1bb3260921fe0ee449a7b809b7_prof);

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
