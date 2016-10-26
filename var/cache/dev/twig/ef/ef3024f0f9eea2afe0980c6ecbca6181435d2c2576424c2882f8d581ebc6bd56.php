<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_760d568cbb53013b6301aaf33138d45296907573a3270a183f571ad953597aff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_009aab23365748c8998c64f2f4b9ec2769af5d2a46062240e6237d61c293292e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009aab23365748c8998c64f2f4b9ec2769af5d2a46062240e6237d61c293292e->enter($__internal_009aab23365748c8998c64f2f4b9ec2769af5d2a46062240e6237d61c293292e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_009aab23365748c8998c64f2f4b9ec2769af5d2a46062240e6237d61c293292e->leave($__internal_009aab23365748c8998c64f2f4b9ec2769af5d2a46062240e6237d61c293292e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e20ad59e52133b09222f661cbf980dcc22a57d9e90f478c1ad39d09c8cd9db95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20ad59e52133b09222f661cbf980dcc22a57d9e90f478c1ad39d09c8cd9db95->enter($__internal_e20ad59e52133b09222f661cbf980dcc22a57d9e90f478c1ad39d09c8cd9db95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_e20ad59e52133b09222f661cbf980dcc22a57d9e90f478c1ad39d09c8cd9db95->leave($__internal_e20ad59e52133b09222f661cbf980dcc22a57d9e90f478c1ad39d09c8cd9db95_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
