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
        $__internal_9cd76aecb9013053b0e97e1f61653577b539caf1a76ff61740eabcb15d6c6249 = $this->env->getExtension("native_profiler");
        $__internal_9cd76aecb9013053b0e97e1f61653577b539caf1a76ff61740eabcb15d6c6249->enter($__internal_9cd76aecb9013053b0e97e1f61653577b539caf1a76ff61740eabcb15d6c6249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cd76aecb9013053b0e97e1f61653577b539caf1a76ff61740eabcb15d6c6249->leave($__internal_9cd76aecb9013053b0e97e1f61653577b539caf1a76ff61740eabcb15d6c6249_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5eed852554cdb862b70d60d3c5520a5b53aebd1a27a5fd7f638d2c3fbaa0bba2 = $this->env->getExtension("native_profiler");
        $__internal_5eed852554cdb862b70d60d3c5520a5b53aebd1a27a5fd7f638d2c3fbaa0bba2->enter($__internal_5eed852554cdb862b70d60d3c5520a5b53aebd1a27a5fd7f638d2c3fbaa0bba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5eed852554cdb862b70d60d3c5520a5b53aebd1a27a5fd7f638d2c3fbaa0bba2->leave($__internal_5eed852554cdb862b70d60d3c5520a5b53aebd1a27a5fd7f638d2c3fbaa0bba2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b6510872bc2073b0d0d448a09cd0c625adf1ec5cccebd3b3e04b753d28813c3 = $this->env->getExtension("native_profiler");
        $__internal_3b6510872bc2073b0d0d448a09cd0c625adf1ec5cccebd3b3e04b753d28813c3->enter($__internal_3b6510872bc2073b0d0d448a09cd0c625adf1ec5cccebd3b3e04b753d28813c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b6510872bc2073b0d0d448a09cd0c625adf1ec5cccebd3b3e04b753d28813c3->leave($__internal_3b6510872bc2073b0d0d448a09cd0c625adf1ec5cccebd3b3e04b753d28813c3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_79acd312946e9b04b8cfa4bd664614609fd2bbc32cf779a4d05e8a9d532bfa7a = $this->env->getExtension("native_profiler");
        $__internal_79acd312946e9b04b8cfa4bd664614609fd2bbc32cf779a4d05e8a9d532bfa7a->enter($__internal_79acd312946e9b04b8cfa4bd664614609fd2bbc32cf779a4d05e8a9d532bfa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_79acd312946e9b04b8cfa4bd664614609fd2bbc32cf779a4d05e8a9d532bfa7a->leave($__internal_79acd312946e9b04b8cfa4bd664614609fd2bbc32cf779a4d05e8a9d532bfa7a_prof);

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
