<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d40e8bc81c08156ecc19e66592d0ede98496d5b16643fe5501312cc46392c9db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_67e9c1a7eb6742caa9d56537086c51621135a3db11dbf6af7a5f4d510223aa45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e9c1a7eb6742caa9d56537086c51621135a3db11dbf6af7a5f4d510223aa45->enter($__internal_67e9c1a7eb6742caa9d56537086c51621135a3db11dbf6af7a5f4d510223aa45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67e9c1a7eb6742caa9d56537086c51621135a3db11dbf6af7a5f4d510223aa45->leave($__internal_67e9c1a7eb6742caa9d56537086c51621135a3db11dbf6af7a5f4d510223aa45_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d002cd008f059c804830b4f2b13df0b314be6b9f5cc3dd16bf7a0a4bea4a9782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d002cd008f059c804830b4f2b13df0b314be6b9f5cc3dd16bf7a0a4bea4a9782->enter($__internal_d002cd008f059c804830b4f2b13df0b314be6b9f5cc3dd16bf7a0a4bea4a9782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d002cd008f059c804830b4f2b13df0b314be6b9f5cc3dd16bf7a0a4bea4a9782->leave($__internal_d002cd008f059c804830b4f2b13df0b314be6b9f5cc3dd16bf7a0a4bea4a9782_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09430ddf7bd1abdecc1fa2980da191f783c23a352888ccc2c798333312e86895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09430ddf7bd1abdecc1fa2980da191f783c23a352888ccc2c798333312e86895->enter($__internal_09430ddf7bd1abdecc1fa2980da191f783c23a352888ccc2c798333312e86895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_09430ddf7bd1abdecc1fa2980da191f783c23a352888ccc2c798333312e86895->leave($__internal_09430ddf7bd1abdecc1fa2980da191f783c23a352888ccc2c798333312e86895_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
