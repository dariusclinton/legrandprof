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
        $__internal_945901d108eed9b8546783ab26256c7414b6f1ac39fb977e5127cb4d0c2e8a86 = $this->env->getExtension("native_profiler");
        $__internal_945901d108eed9b8546783ab26256c7414b6f1ac39fb977e5127cb4d0c2e8a86->enter($__internal_945901d108eed9b8546783ab26256c7414b6f1ac39fb977e5127cb4d0c2e8a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_945901d108eed9b8546783ab26256c7414b6f1ac39fb977e5127cb4d0c2e8a86->leave($__internal_945901d108eed9b8546783ab26256c7414b6f1ac39fb977e5127cb4d0c2e8a86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64f251be8185c97fb30b734a60c98808e59f346e4eb601ec477d8c855e3472bd = $this->env->getExtension("native_profiler");
        $__internal_64f251be8185c97fb30b734a60c98808e59f346e4eb601ec477d8c855e3472bd->enter($__internal_64f251be8185c97fb30b734a60c98808e59f346e4eb601ec477d8c855e3472bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_64f251be8185c97fb30b734a60c98808e59f346e4eb601ec477d8c855e3472bd->leave($__internal_64f251be8185c97fb30b734a60c98808e59f346e4eb601ec477d8c855e3472bd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_28b1dc0317a9bafb1eae0dba554c80fb5110a4171b8b0ce14950c95a9943eb6f = $this->env->getExtension("native_profiler");
        $__internal_28b1dc0317a9bafb1eae0dba554c80fb5110a4171b8b0ce14950c95a9943eb6f->enter($__internal_28b1dc0317a9bafb1eae0dba554c80fb5110a4171b8b0ce14950c95a9943eb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_28b1dc0317a9bafb1eae0dba554c80fb5110a4171b8b0ce14950c95a9943eb6f->leave($__internal_28b1dc0317a9bafb1eae0dba554c80fb5110a4171b8b0ce14950c95a9943eb6f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_83274476dea74a5458e36b05cdc40d627b9e1fb6559e2accbcc97402c911995d = $this->env->getExtension("native_profiler");
        $__internal_83274476dea74a5458e36b05cdc40d627b9e1fb6559e2accbcc97402c911995d->enter($__internal_83274476dea74a5458e36b05cdc40d627b9e1fb6559e2accbcc97402c911995d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_83274476dea74a5458e36b05cdc40d627b9e1fb6559e2accbcc97402c911995d->leave($__internal_83274476dea74a5458e36b05cdc40d627b9e1fb6559e2accbcc97402c911995d_prof);

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
