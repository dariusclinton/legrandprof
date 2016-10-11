<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c569f9891ea703df050261c3cdba45df7a6efbb1520c9e6f384a471cf4a82140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_b56e9d15aa0f0a5c87205b112572159b46bde46106f8bae843b2b91822e036e4 = $this->env->getExtension("native_profiler");
        $__internal_b56e9d15aa0f0a5c87205b112572159b46bde46106f8bae843b2b91822e036e4->enter($__internal_b56e9d15aa0f0a5c87205b112572159b46bde46106f8bae843b2b91822e036e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b56e9d15aa0f0a5c87205b112572159b46bde46106f8bae843b2b91822e036e4->leave($__internal_b56e9d15aa0f0a5c87205b112572159b46bde46106f8bae843b2b91822e036e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_387107257600d4e371eb2cecbcd25b3b77f8b0c41877af2b1e587281c9f22220 = $this->env->getExtension("native_profiler");
        $__internal_387107257600d4e371eb2cecbcd25b3b77f8b0c41877af2b1e587281c9f22220->enter($__internal_387107257600d4e371eb2cecbcd25b3b77f8b0c41877af2b1e587281c9f22220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_387107257600d4e371eb2cecbcd25b3b77f8b0c41877af2b1e587281c9f22220->leave($__internal_387107257600d4e371eb2cecbcd25b3b77f8b0c41877af2b1e587281c9f22220_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
