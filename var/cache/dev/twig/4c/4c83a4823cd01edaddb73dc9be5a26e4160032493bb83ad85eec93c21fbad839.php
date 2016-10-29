<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3ef93532d91729998b6ad105b8b1910dccd9deb93c6d57f5c15943077c5dac20 extends Twig_Template
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
        $__internal_3ad3436840b0164ebaab1b596ed4d09d98dd88cfabde9c19133d44a486e72f2b = $this->env->getExtension("native_profiler");
        $__internal_3ad3436840b0164ebaab1b596ed4d09d98dd88cfabde9c19133d44a486e72f2b->enter($__internal_3ad3436840b0164ebaab1b596ed4d09d98dd88cfabde9c19133d44a486e72f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ad3436840b0164ebaab1b596ed4d09d98dd88cfabde9c19133d44a486e72f2b->leave($__internal_3ad3436840b0164ebaab1b596ed4d09d98dd88cfabde9c19133d44a486e72f2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e58e4d1638c38613a90733078c55fb2d911d864f5252e4b89893a3e65b1981fa = $this->env->getExtension("native_profiler");
        $__internal_e58e4d1638c38613a90733078c55fb2d911d864f5252e4b89893a3e65b1981fa->enter($__internal_e58e4d1638c38613a90733078c55fb2d911d864f5252e4b89893a3e65b1981fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e58e4d1638c38613a90733078c55fb2d911d864f5252e4b89893a3e65b1981fa->leave($__internal_e58e4d1638c38613a90733078c55fb2d911d864f5252e4b89893a3e65b1981fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c4b701af0ec9c9381ae1c2d9df924a377acb67edf7ef60e765756e6c1f9ea4f = $this->env->getExtension("native_profiler");
        $__internal_2c4b701af0ec9c9381ae1c2d9df924a377acb67edf7ef60e765756e6c1f9ea4f->enter($__internal_2c4b701af0ec9c9381ae1c2d9df924a377acb67edf7ef60e765756e6c1f9ea4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2c4b701af0ec9c9381ae1c2d9df924a377acb67edf7ef60e765756e6c1f9ea4f->leave($__internal_2c4b701af0ec9c9381ae1c2d9df924a377acb67edf7ef60e765756e6c1f9ea4f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9e023662082d39736d733d00836dc514063ee017e380f80771226ffd61e207b = $this->env->getExtension("native_profiler");
        $__internal_b9e023662082d39736d733d00836dc514063ee017e380f80771226ffd61e207b->enter($__internal_b9e023662082d39736d733d00836dc514063ee017e380f80771226ffd61e207b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b9e023662082d39736d733d00836dc514063ee017e380f80771226ffd61e207b->leave($__internal_b9e023662082d39736d733d00836dc514063ee017e380f80771226ffd61e207b_prof);

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

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
