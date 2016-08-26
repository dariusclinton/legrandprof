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
        $__internal_6193085eab57820addf9f0284e7c84ae590ddfed156109a3926c273d37333e8a = $this->env->getExtension("native_profiler");
        $__internal_6193085eab57820addf9f0284e7c84ae590ddfed156109a3926c273d37333e8a->enter($__internal_6193085eab57820addf9f0284e7c84ae590ddfed156109a3926c273d37333e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6193085eab57820addf9f0284e7c84ae590ddfed156109a3926c273d37333e8a->leave($__internal_6193085eab57820addf9f0284e7c84ae590ddfed156109a3926c273d37333e8a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fee4025734aa081d25c5a319b23e0c1eb14f9fc5e4699800ef1624814450af0e = $this->env->getExtension("native_profiler");
        $__internal_fee4025734aa081d25c5a319b23e0c1eb14f9fc5e4699800ef1624814450af0e->enter($__internal_fee4025734aa081d25c5a319b23e0c1eb14f9fc5e4699800ef1624814450af0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fee4025734aa081d25c5a319b23e0c1eb14f9fc5e4699800ef1624814450af0e->leave($__internal_fee4025734aa081d25c5a319b23e0c1eb14f9fc5e4699800ef1624814450af0e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d336ac44fde3b88a54528e6f3ed61d5a5dd5ca21839c24880a485e623f966e03 = $this->env->getExtension("native_profiler");
        $__internal_d336ac44fde3b88a54528e6f3ed61d5a5dd5ca21839c24880a485e623f966e03->enter($__internal_d336ac44fde3b88a54528e6f3ed61d5a5dd5ca21839c24880a485e623f966e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d336ac44fde3b88a54528e6f3ed61d5a5dd5ca21839c24880a485e623f966e03->leave($__internal_d336ac44fde3b88a54528e6f3ed61d5a5dd5ca21839c24880a485e623f966e03_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_100e15310e9e471e099b514ec64917f1fc6cf4d6f8637b6d05a852d47c97cfac = $this->env->getExtension("native_profiler");
        $__internal_100e15310e9e471e099b514ec64917f1fc6cf4d6f8637b6d05a852d47c97cfac->enter($__internal_100e15310e9e471e099b514ec64917f1fc6cf4d6f8637b6d05a852d47c97cfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_100e15310e9e471e099b514ec64917f1fc6cf4d6f8637b6d05a852d47c97cfac->leave($__internal_100e15310e9e471e099b514ec64917f1fc6cf4d6f8637b6d05a852d47c97cfac_prof);

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
