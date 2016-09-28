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
        $__internal_aebf79d8278c585d71c3b3f1eb293cd44f93c150b594643ea8904d1969956005 = $this->env->getExtension("native_profiler");
        $__internal_aebf79d8278c585d71c3b3f1eb293cd44f93c150b594643ea8904d1969956005->enter($__internal_aebf79d8278c585d71c3b3f1eb293cd44f93c150b594643ea8904d1969956005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aebf79d8278c585d71c3b3f1eb293cd44f93c150b594643ea8904d1969956005->leave($__internal_aebf79d8278c585d71c3b3f1eb293cd44f93c150b594643ea8904d1969956005_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_927de30a0c9385f10f18a645b02c7cf103ccb58a75797e44ecac26bafd88da62 = $this->env->getExtension("native_profiler");
        $__internal_927de30a0c9385f10f18a645b02c7cf103ccb58a75797e44ecac26bafd88da62->enter($__internal_927de30a0c9385f10f18a645b02c7cf103ccb58a75797e44ecac26bafd88da62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_927de30a0c9385f10f18a645b02c7cf103ccb58a75797e44ecac26bafd88da62->leave($__internal_927de30a0c9385f10f18a645b02c7cf103ccb58a75797e44ecac26bafd88da62_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe9c63addd317b3632e49b984a519bb89d7320b09a0ee2ca0779219010642071 = $this->env->getExtension("native_profiler");
        $__internal_fe9c63addd317b3632e49b984a519bb89d7320b09a0ee2ca0779219010642071->enter($__internal_fe9c63addd317b3632e49b984a519bb89d7320b09a0ee2ca0779219010642071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fe9c63addd317b3632e49b984a519bb89d7320b09a0ee2ca0779219010642071->leave($__internal_fe9c63addd317b3632e49b984a519bb89d7320b09a0ee2ca0779219010642071_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_758cded4c68ac7471a258a83f6eefeb2808b26a4f579f2ee1d300afecb9b1d95 = $this->env->getExtension("native_profiler");
        $__internal_758cded4c68ac7471a258a83f6eefeb2808b26a4f579f2ee1d300afecb9b1d95->enter($__internal_758cded4c68ac7471a258a83f6eefeb2808b26a4f579f2ee1d300afecb9b1d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_758cded4c68ac7471a258a83f6eefeb2808b26a4f579f2ee1d300afecb9b1d95->leave($__internal_758cded4c68ac7471a258a83f6eefeb2808b26a4f579f2ee1d300afecb9b1d95_prof);

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
