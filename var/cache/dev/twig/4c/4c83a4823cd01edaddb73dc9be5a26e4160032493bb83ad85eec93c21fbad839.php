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
        $__internal_dc45c61781b7915d23364655261168093e3c38327c191905bc5b8e00023a1b0a = $this->env->getExtension("native_profiler");
        $__internal_dc45c61781b7915d23364655261168093e3c38327c191905bc5b8e00023a1b0a->enter($__internal_dc45c61781b7915d23364655261168093e3c38327c191905bc5b8e00023a1b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc45c61781b7915d23364655261168093e3c38327c191905bc5b8e00023a1b0a->leave($__internal_dc45c61781b7915d23364655261168093e3c38327c191905bc5b8e00023a1b0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03cb989cebf97bbd0a3bc784c54013ab9d591acda1b9081b8ba58c58ed35f3e2 = $this->env->getExtension("native_profiler");
        $__internal_03cb989cebf97bbd0a3bc784c54013ab9d591acda1b9081b8ba58c58ed35f3e2->enter($__internal_03cb989cebf97bbd0a3bc784c54013ab9d591acda1b9081b8ba58c58ed35f3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_03cb989cebf97bbd0a3bc784c54013ab9d591acda1b9081b8ba58c58ed35f3e2->leave($__internal_03cb989cebf97bbd0a3bc784c54013ab9d591acda1b9081b8ba58c58ed35f3e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b2bcc03d26436ad764425cb7f130cf9a51029b5d71531ed866fd56aa44efa48 = $this->env->getExtension("native_profiler");
        $__internal_7b2bcc03d26436ad764425cb7f130cf9a51029b5d71531ed866fd56aa44efa48->enter($__internal_7b2bcc03d26436ad764425cb7f130cf9a51029b5d71531ed866fd56aa44efa48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b2bcc03d26436ad764425cb7f130cf9a51029b5d71531ed866fd56aa44efa48->leave($__internal_7b2bcc03d26436ad764425cb7f130cf9a51029b5d71531ed866fd56aa44efa48_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9c878b0cee31e2efa958fd5aa7037b5998024a4f6c59f5ada3a1b9c4fd34e28 = $this->env->getExtension("native_profiler");
        $__internal_a9c878b0cee31e2efa958fd5aa7037b5998024a4f6c59f5ada3a1b9c4fd34e28->enter($__internal_a9c878b0cee31e2efa958fd5aa7037b5998024a4f6c59f5ada3a1b9c4fd34e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a9c878b0cee31e2efa958fd5aa7037b5998024a4f6c59f5ada3a1b9c4fd34e28->leave($__internal_a9c878b0cee31e2efa958fd5aa7037b5998024a4f6c59f5ada3a1b9c4fd34e28_prof);

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
