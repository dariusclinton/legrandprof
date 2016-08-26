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
        $__internal_f4c85372ee5dea657711b78939db65fe9367c0911648376b7eea14c2730d876f = $this->env->getExtension("native_profiler");
        $__internal_f4c85372ee5dea657711b78939db65fe9367c0911648376b7eea14c2730d876f->enter($__internal_f4c85372ee5dea657711b78939db65fe9367c0911648376b7eea14c2730d876f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4c85372ee5dea657711b78939db65fe9367c0911648376b7eea14c2730d876f->leave($__internal_f4c85372ee5dea657711b78939db65fe9367c0911648376b7eea14c2730d876f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d77acc6dd0662a1e268451a4fee3a9852a4abfb5100354b1a24e57b45f43336 = $this->env->getExtension("native_profiler");
        $__internal_0d77acc6dd0662a1e268451a4fee3a9852a4abfb5100354b1a24e57b45f43336->enter($__internal_0d77acc6dd0662a1e268451a4fee3a9852a4abfb5100354b1a24e57b45f43336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0d77acc6dd0662a1e268451a4fee3a9852a4abfb5100354b1a24e57b45f43336->leave($__internal_0d77acc6dd0662a1e268451a4fee3a9852a4abfb5100354b1a24e57b45f43336_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86ba549ae15c37b658f5dd5eccca48a426dfc95c41e7ca0c691dec8e3dc00c5e = $this->env->getExtension("native_profiler");
        $__internal_86ba549ae15c37b658f5dd5eccca48a426dfc95c41e7ca0c691dec8e3dc00c5e->enter($__internal_86ba549ae15c37b658f5dd5eccca48a426dfc95c41e7ca0c691dec8e3dc00c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_86ba549ae15c37b658f5dd5eccca48a426dfc95c41e7ca0c691dec8e3dc00c5e->leave($__internal_86ba549ae15c37b658f5dd5eccca48a426dfc95c41e7ca0c691dec8e3dc00c5e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_07aecf7f09dcd7d51f9cb6bab918f2dac838a67212fb01aa34bf26061536c290 = $this->env->getExtension("native_profiler");
        $__internal_07aecf7f09dcd7d51f9cb6bab918f2dac838a67212fb01aa34bf26061536c290->enter($__internal_07aecf7f09dcd7d51f9cb6bab918f2dac838a67212fb01aa34bf26061536c290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_07aecf7f09dcd7d51f9cb6bab918f2dac838a67212fb01aa34bf26061536c290->leave($__internal_07aecf7f09dcd7d51f9cb6bab918f2dac838a67212fb01aa34bf26061536c290_prof);

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
