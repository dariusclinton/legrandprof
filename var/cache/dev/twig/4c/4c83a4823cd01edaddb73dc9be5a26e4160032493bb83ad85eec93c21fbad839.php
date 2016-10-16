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
        $__internal_d6ebb06f002d579b5f9a021921c313b0d8a7554ead7589be1b168bdc76310225 = $this->env->getExtension("native_profiler");
        $__internal_d6ebb06f002d579b5f9a021921c313b0d8a7554ead7589be1b168bdc76310225->enter($__internal_d6ebb06f002d579b5f9a021921c313b0d8a7554ead7589be1b168bdc76310225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6ebb06f002d579b5f9a021921c313b0d8a7554ead7589be1b168bdc76310225->leave($__internal_d6ebb06f002d579b5f9a021921c313b0d8a7554ead7589be1b168bdc76310225_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7dfdf16d21a25c5f3e86c6a9bfa67c50ce1c97b9593a646db3c918fb00d4484f = $this->env->getExtension("native_profiler");
        $__internal_7dfdf16d21a25c5f3e86c6a9bfa67c50ce1c97b9593a646db3c918fb00d4484f->enter($__internal_7dfdf16d21a25c5f3e86c6a9bfa67c50ce1c97b9593a646db3c918fb00d4484f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7dfdf16d21a25c5f3e86c6a9bfa67c50ce1c97b9593a646db3c918fb00d4484f->leave($__internal_7dfdf16d21a25c5f3e86c6a9bfa67c50ce1c97b9593a646db3c918fb00d4484f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7f3574ef5eea798109e9e347637b56d7df3ed2cca1b92eb0c5c8a5656b89e08 = $this->env->getExtension("native_profiler");
        $__internal_d7f3574ef5eea798109e9e347637b56d7df3ed2cca1b92eb0c5c8a5656b89e08->enter($__internal_d7f3574ef5eea798109e9e347637b56d7df3ed2cca1b92eb0c5c8a5656b89e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d7f3574ef5eea798109e9e347637b56d7df3ed2cca1b92eb0c5c8a5656b89e08->leave($__internal_d7f3574ef5eea798109e9e347637b56d7df3ed2cca1b92eb0c5c8a5656b89e08_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3201eef5b0bb71034a83c30b1ce0423fe22c08b1c0f930127738486261f283e = $this->env->getExtension("native_profiler");
        $__internal_a3201eef5b0bb71034a83c30b1ce0423fe22c08b1c0f930127738486261f283e->enter($__internal_a3201eef5b0bb71034a83c30b1ce0423fe22c08b1c0f930127738486261f283e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a3201eef5b0bb71034a83c30b1ce0423fe22c08b1c0f930127738486261f283e->leave($__internal_a3201eef5b0bb71034a83c30b1ce0423fe22c08b1c0f930127738486261f283e_prof);

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
