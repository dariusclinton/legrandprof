<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a9726e6d020e42e487c531aea7c293bf9878ac3d55d1fba467f08e4b556d14a3 extends Twig_Template
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
        $__internal_1a69115a7dacd3ca451b5f03b65a0730d7ac38f0d19eca1a1c8da53b315bfbff = $this->env->getExtension("native_profiler");
        $__internal_1a69115a7dacd3ca451b5f03b65a0730d7ac38f0d19eca1a1c8da53b315bfbff->enter($__internal_1a69115a7dacd3ca451b5f03b65a0730d7ac38f0d19eca1a1c8da53b315bfbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a69115a7dacd3ca451b5f03b65a0730d7ac38f0d19eca1a1c8da53b315bfbff->leave($__internal_1a69115a7dacd3ca451b5f03b65a0730d7ac38f0d19eca1a1c8da53b315bfbff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d50f77ce830599d36dfdf1042076d3a09a254b9db1534e4e3b3a71bd6232da8c = $this->env->getExtension("native_profiler");
        $__internal_d50f77ce830599d36dfdf1042076d3a09a254b9db1534e4e3b3a71bd6232da8c->enter($__internal_d50f77ce830599d36dfdf1042076d3a09a254b9db1534e4e3b3a71bd6232da8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d50f77ce830599d36dfdf1042076d3a09a254b9db1534e4e3b3a71bd6232da8c->leave($__internal_d50f77ce830599d36dfdf1042076d3a09a254b9db1534e4e3b3a71bd6232da8c_prof);

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
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
