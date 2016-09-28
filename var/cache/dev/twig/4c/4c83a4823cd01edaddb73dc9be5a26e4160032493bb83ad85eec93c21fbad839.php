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
        $__internal_50be0f2ea62138f574fb97f290cd54009ff518eac4d5741eea5501dfd04979b6 = $this->env->getExtension("native_profiler");
        $__internal_50be0f2ea62138f574fb97f290cd54009ff518eac4d5741eea5501dfd04979b6->enter($__internal_50be0f2ea62138f574fb97f290cd54009ff518eac4d5741eea5501dfd04979b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50be0f2ea62138f574fb97f290cd54009ff518eac4d5741eea5501dfd04979b6->leave($__internal_50be0f2ea62138f574fb97f290cd54009ff518eac4d5741eea5501dfd04979b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c0d5d6b3d52804358535a29c19db33099b0c4c32517b0e98e983037b639ec37 = $this->env->getExtension("native_profiler");
        $__internal_6c0d5d6b3d52804358535a29c19db33099b0c4c32517b0e98e983037b639ec37->enter($__internal_6c0d5d6b3d52804358535a29c19db33099b0c4c32517b0e98e983037b639ec37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6c0d5d6b3d52804358535a29c19db33099b0c4c32517b0e98e983037b639ec37->leave($__internal_6c0d5d6b3d52804358535a29c19db33099b0c4c32517b0e98e983037b639ec37_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcade9b6f3a0c018091904567a05fda825cf28f3f0bd6c38e78e29253985f9de = $this->env->getExtension("native_profiler");
        $__internal_dcade9b6f3a0c018091904567a05fda825cf28f3f0bd6c38e78e29253985f9de->enter($__internal_dcade9b6f3a0c018091904567a05fda825cf28f3f0bd6c38e78e29253985f9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dcade9b6f3a0c018091904567a05fda825cf28f3f0bd6c38e78e29253985f9de->leave($__internal_dcade9b6f3a0c018091904567a05fda825cf28f3f0bd6c38e78e29253985f9de_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0f194048f73be9d0c7416c35a6e4f44651c04baeac41b9cf054f1aefe64eb01 = $this->env->getExtension("native_profiler");
        $__internal_f0f194048f73be9d0c7416c35a6e4f44651c04baeac41b9cf054f1aefe64eb01->enter($__internal_f0f194048f73be9d0c7416c35a6e4f44651c04baeac41b9cf054f1aefe64eb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f0f194048f73be9d0c7416c35a6e4f44651c04baeac41b9cf054f1aefe64eb01->leave($__internal_f0f194048f73be9d0c7416c35a6e4f44651c04baeac41b9cf054f1aefe64eb01_prof);

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
