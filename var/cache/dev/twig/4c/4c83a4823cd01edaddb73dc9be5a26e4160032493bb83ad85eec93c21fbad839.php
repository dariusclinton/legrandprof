<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3ef93532d91729998b6ad105b8b1910dccd9deb93c6d57f5c15943077c5dac20 extends Twig_Template
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
        $__internal_c5aafd909e9c9bffb73f24f58b9e179ebe60dd9844012a78bcd182669bd26b93 = $this->env->getExtension("native_profiler");
        $__internal_c5aafd909e9c9bffb73f24f58b9e179ebe60dd9844012a78bcd182669bd26b93->enter($__internal_c5aafd909e9c9bffb73f24f58b9e179ebe60dd9844012a78bcd182669bd26b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5aafd909e9c9bffb73f24f58b9e179ebe60dd9844012a78bcd182669bd26b93->leave($__internal_c5aafd909e9c9bffb73f24f58b9e179ebe60dd9844012a78bcd182669bd26b93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e4fd181f60c133a612d57753649d78bdc31d2c25fafc5f28afed13fe0ea9ccd = $this->env->getExtension("native_profiler");
        $__internal_6e4fd181f60c133a612d57753649d78bdc31d2c25fafc5f28afed13fe0ea9ccd->enter($__internal_6e4fd181f60c133a612d57753649d78bdc31d2c25fafc5f28afed13fe0ea9ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6e4fd181f60c133a612d57753649d78bdc31d2c25fafc5f28afed13fe0ea9ccd->leave($__internal_6e4fd181f60c133a612d57753649d78bdc31d2c25fafc5f28afed13fe0ea9ccd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7f5e008b9efb38a760b91dcd00a384e483ad0d87d32fa9dc76ff5522d8d7d03 = $this->env->getExtension("native_profiler");
        $__internal_a7f5e008b9efb38a760b91dcd00a384e483ad0d87d32fa9dc76ff5522d8d7d03->enter($__internal_a7f5e008b9efb38a760b91dcd00a384e483ad0d87d32fa9dc76ff5522d8d7d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a7f5e008b9efb38a760b91dcd00a384e483ad0d87d32fa9dc76ff5522d8d7d03->leave($__internal_a7f5e008b9efb38a760b91dcd00a384e483ad0d87d32fa9dc76ff5522d8d7d03_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b915a3794bd0e467c371807846a99e43b5f77f82f60044abfa6f25fb57870ffd = $this->env->getExtension("native_profiler");
        $__internal_b915a3794bd0e467c371807846a99e43b5f77f82f60044abfa6f25fb57870ffd->enter($__internal_b915a3794bd0e467c371807846a99e43b5f77f82f60044abfa6f25fb57870ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b915a3794bd0e467c371807846a99e43b5f77f82f60044abfa6f25fb57870ffd->leave($__internal_b915a3794bd0e467c371807846a99e43b5f77f82f60044abfa6f25fb57870ffd_prof);

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
