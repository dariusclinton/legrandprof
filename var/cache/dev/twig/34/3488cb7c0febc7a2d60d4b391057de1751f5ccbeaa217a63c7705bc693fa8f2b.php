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
        $__internal_70da07a7d7702abb7b433f023d85f3d6b89b8c4bd4fa7b8db30482c76198dfed = $this->env->getExtension("native_profiler");
        $__internal_70da07a7d7702abb7b433f023d85f3d6b89b8c4bd4fa7b8db30482c76198dfed->enter($__internal_70da07a7d7702abb7b433f023d85f3d6b89b8c4bd4fa7b8db30482c76198dfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70da07a7d7702abb7b433f023d85f3d6b89b8c4bd4fa7b8db30482c76198dfed->leave($__internal_70da07a7d7702abb7b433f023d85f3d6b89b8c4bd4fa7b8db30482c76198dfed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_86a797aaebf6a4d15f41cd9b153dff9a97260e232a8588518d91d2599bb43bc7 = $this->env->getExtension("native_profiler");
        $__internal_86a797aaebf6a4d15f41cd9b153dff9a97260e232a8588518d91d2599bb43bc7->enter($__internal_86a797aaebf6a4d15f41cd9b153dff9a97260e232a8588518d91d2599bb43bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_86a797aaebf6a4d15f41cd9b153dff9a97260e232a8588518d91d2599bb43bc7->leave($__internal_86a797aaebf6a4d15f41cd9b153dff9a97260e232a8588518d91d2599bb43bc7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d6796ad91a013884266c972b3ba522f0feaf37e0ece6c2fedbfb1e078d15bc5 = $this->env->getExtension("native_profiler");
        $__internal_4d6796ad91a013884266c972b3ba522f0feaf37e0ece6c2fedbfb1e078d15bc5->enter($__internal_4d6796ad91a013884266c972b3ba522f0feaf37e0ece6c2fedbfb1e078d15bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4d6796ad91a013884266c972b3ba522f0feaf37e0ece6c2fedbfb1e078d15bc5->leave($__internal_4d6796ad91a013884266c972b3ba522f0feaf37e0ece6c2fedbfb1e078d15bc5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b64992e7d21021c06362e3da2cfba336aa68860db753401e0068b92ccf7a87a2 = $this->env->getExtension("native_profiler");
        $__internal_b64992e7d21021c06362e3da2cfba336aa68860db753401e0068b92ccf7a87a2->enter($__internal_b64992e7d21021c06362e3da2cfba336aa68860db753401e0068b92ccf7a87a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b64992e7d21021c06362e3da2cfba336aa68860db753401e0068b92ccf7a87a2->leave($__internal_b64992e7d21021c06362e3da2cfba336aa68860db753401e0068b92ccf7a87a2_prof);

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
