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
        $__internal_d24298565d8dc6a94039ea637affdbdc344b31ea52e1fe998466dfccdc7f5dab = $this->env->getExtension("native_profiler");
        $__internal_d24298565d8dc6a94039ea637affdbdc344b31ea52e1fe998466dfccdc7f5dab->enter($__internal_d24298565d8dc6a94039ea637affdbdc344b31ea52e1fe998466dfccdc7f5dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d24298565d8dc6a94039ea637affdbdc344b31ea52e1fe998466dfccdc7f5dab->leave($__internal_d24298565d8dc6a94039ea637affdbdc344b31ea52e1fe998466dfccdc7f5dab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d11d6398b7d04c13621f3bf0eee17ad55ea0da8e47fdd5c236fcd32ee81a13a = $this->env->getExtension("native_profiler");
        $__internal_6d11d6398b7d04c13621f3bf0eee17ad55ea0da8e47fdd5c236fcd32ee81a13a->enter($__internal_6d11d6398b7d04c13621f3bf0eee17ad55ea0da8e47fdd5c236fcd32ee81a13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6d11d6398b7d04c13621f3bf0eee17ad55ea0da8e47fdd5c236fcd32ee81a13a->leave($__internal_6d11d6398b7d04c13621f3bf0eee17ad55ea0da8e47fdd5c236fcd32ee81a13a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d7a458b57c9d1c55c458e7e6522dfd3815cd439d0c1bb10ed7cfe80757c96a8 = $this->env->getExtension("native_profiler");
        $__internal_9d7a458b57c9d1c55c458e7e6522dfd3815cd439d0c1bb10ed7cfe80757c96a8->enter($__internal_9d7a458b57c9d1c55c458e7e6522dfd3815cd439d0c1bb10ed7cfe80757c96a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9d7a458b57c9d1c55c458e7e6522dfd3815cd439d0c1bb10ed7cfe80757c96a8->leave($__internal_9d7a458b57c9d1c55c458e7e6522dfd3815cd439d0c1bb10ed7cfe80757c96a8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1829799fc6ea2e721150b2ff1d870b575b2b5b9bec930a7f51900702093596d = $this->env->getExtension("native_profiler");
        $__internal_f1829799fc6ea2e721150b2ff1d870b575b2b5b9bec930a7f51900702093596d->enter($__internal_f1829799fc6ea2e721150b2ff1d870b575b2b5b9bec930a7f51900702093596d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f1829799fc6ea2e721150b2ff1d870b575b2b5b9bec930a7f51900702093596d->leave($__internal_f1829799fc6ea2e721150b2ff1d870b575b2b5b9bec930a7f51900702093596d_prof);

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
