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
        $__internal_38dbfbb14f9ab4aa5b57ec0e4057a341221a819d40d134088a3c4e953bdc8729 = $this->env->getExtension("native_profiler");
        $__internal_38dbfbb14f9ab4aa5b57ec0e4057a341221a819d40d134088a3c4e953bdc8729->enter($__internal_38dbfbb14f9ab4aa5b57ec0e4057a341221a819d40d134088a3c4e953bdc8729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38dbfbb14f9ab4aa5b57ec0e4057a341221a819d40d134088a3c4e953bdc8729->leave($__internal_38dbfbb14f9ab4aa5b57ec0e4057a341221a819d40d134088a3c4e953bdc8729_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e3a29731c827fefcd405f73d16d9d98eb5d78d5646caf466fc12eb05dad1f7c = $this->env->getExtension("native_profiler");
        $__internal_4e3a29731c827fefcd405f73d16d9d98eb5d78d5646caf466fc12eb05dad1f7c->enter($__internal_4e3a29731c827fefcd405f73d16d9d98eb5d78d5646caf466fc12eb05dad1f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4e3a29731c827fefcd405f73d16d9d98eb5d78d5646caf466fc12eb05dad1f7c->leave($__internal_4e3a29731c827fefcd405f73d16d9d98eb5d78d5646caf466fc12eb05dad1f7c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fca91e2413e90d392ae8c96dfc3662499e273ae2c4a1a93c59137237746fef9a = $this->env->getExtension("native_profiler");
        $__internal_fca91e2413e90d392ae8c96dfc3662499e273ae2c4a1a93c59137237746fef9a->enter($__internal_fca91e2413e90d392ae8c96dfc3662499e273ae2c4a1a93c59137237746fef9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fca91e2413e90d392ae8c96dfc3662499e273ae2c4a1a93c59137237746fef9a->leave($__internal_fca91e2413e90d392ae8c96dfc3662499e273ae2c4a1a93c59137237746fef9a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bd4d80c30f407b5919c1354149742267b6c3d2f40a64744f29c40921cc35413 = $this->env->getExtension("native_profiler");
        $__internal_7bd4d80c30f407b5919c1354149742267b6c3d2f40a64744f29c40921cc35413->enter($__internal_7bd4d80c30f407b5919c1354149742267b6c3d2f40a64744f29c40921cc35413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7bd4d80c30f407b5919c1354149742267b6c3d2f40a64744f29c40921cc35413->leave($__internal_7bd4d80c30f407b5919c1354149742267b6c3d2f40a64744f29c40921cc35413_prof);

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
