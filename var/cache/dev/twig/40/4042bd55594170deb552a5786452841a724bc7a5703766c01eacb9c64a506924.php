<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_42cfbfb6741769ca2075c566da8f902c19e3935fe0db0961b599b2c0c81605e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_c99c691d3d7e9812267f5716849b2eb30bf44323c67ec37f68ea82bbb2458ed2 = $this->env->getExtension("native_profiler");
        $__internal_c99c691d3d7e9812267f5716849b2eb30bf44323c67ec37f68ea82bbb2458ed2->enter($__internal_c99c691d3d7e9812267f5716849b2eb30bf44323c67ec37f68ea82bbb2458ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c99c691d3d7e9812267f5716849b2eb30bf44323c67ec37f68ea82bbb2458ed2->leave($__internal_c99c691d3d7e9812267f5716849b2eb30bf44323c67ec37f68ea82bbb2458ed2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_740ae2ba7043733ac421b06e3b87237acef86532ea97ef7ad920679bffc2ab1a = $this->env->getExtension("native_profiler");
        $__internal_740ae2ba7043733ac421b06e3b87237acef86532ea97ef7ad920679bffc2ab1a->enter($__internal_740ae2ba7043733ac421b06e3b87237acef86532ea97ef7ad920679bffc2ab1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_740ae2ba7043733ac421b06e3b87237acef86532ea97ef7ad920679bffc2ab1a->leave($__internal_740ae2ba7043733ac421b06e3b87237acef86532ea97ef7ad920679bffc2ab1a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
