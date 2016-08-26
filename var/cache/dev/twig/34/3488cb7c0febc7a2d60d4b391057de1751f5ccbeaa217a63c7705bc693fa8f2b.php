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
        $__internal_a4bd3afc0d45f063945c2ad8cb490a9968becf748a30ed5090dca6a24034f610 = $this->env->getExtension("native_profiler");
        $__internal_a4bd3afc0d45f063945c2ad8cb490a9968becf748a30ed5090dca6a24034f610->enter($__internal_a4bd3afc0d45f063945c2ad8cb490a9968becf748a30ed5090dca6a24034f610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4bd3afc0d45f063945c2ad8cb490a9968becf748a30ed5090dca6a24034f610->leave($__internal_a4bd3afc0d45f063945c2ad8cb490a9968becf748a30ed5090dca6a24034f610_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82b8e5a00184c547f9779886d665500e09e718254e53072aafec4548d1ffeb07 = $this->env->getExtension("native_profiler");
        $__internal_82b8e5a00184c547f9779886d665500e09e718254e53072aafec4548d1ffeb07->enter($__internal_82b8e5a00184c547f9779886d665500e09e718254e53072aafec4548d1ffeb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_82b8e5a00184c547f9779886d665500e09e718254e53072aafec4548d1ffeb07->leave($__internal_82b8e5a00184c547f9779886d665500e09e718254e53072aafec4548d1ffeb07_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1755e885f76751ed3edb167b733edc3405c08d9ba4f14748eb7a685c231230d7 = $this->env->getExtension("native_profiler");
        $__internal_1755e885f76751ed3edb167b733edc3405c08d9ba4f14748eb7a685c231230d7->enter($__internal_1755e885f76751ed3edb167b733edc3405c08d9ba4f14748eb7a685c231230d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1755e885f76751ed3edb167b733edc3405c08d9ba4f14748eb7a685c231230d7->leave($__internal_1755e885f76751ed3edb167b733edc3405c08d9ba4f14748eb7a685c231230d7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4532763b9b5a75fba413bf001c1ee6533ba721eba87b93d771c23767027eaaca = $this->env->getExtension("native_profiler");
        $__internal_4532763b9b5a75fba413bf001c1ee6533ba721eba87b93d771c23767027eaaca->enter($__internal_4532763b9b5a75fba413bf001c1ee6533ba721eba87b93d771c23767027eaaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4532763b9b5a75fba413bf001c1ee6533ba721eba87b93d771c23767027eaaca->leave($__internal_4532763b9b5a75fba413bf001c1ee6533ba721eba87b93d771c23767027eaaca_prof);

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
