<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0cd8e319d39a0b321c36fe24ad3c80f503ff524a951f1e5cbb6d7e2bcaf40e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d1a5c3be1db4c96ee5ffedab6311e49751c03c174d282c407c311481ec3160bc = $this->env->getExtension("native_profiler");
        $__internal_d1a5c3be1db4c96ee5ffedab6311e49751c03c174d282c407c311481ec3160bc->enter($__internal_d1a5c3be1db4c96ee5ffedab6311e49751c03c174d282c407c311481ec3160bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1a5c3be1db4c96ee5ffedab6311e49751c03c174d282c407c311481ec3160bc->leave($__internal_d1a5c3be1db4c96ee5ffedab6311e49751c03c174d282c407c311481ec3160bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d1dd4d7207928d800b0aa981b9070df7e09a6a38cecbeda9f35045d5b1561d9 = $this->env->getExtension("native_profiler");
        $__internal_4d1dd4d7207928d800b0aa981b9070df7e09a6a38cecbeda9f35045d5b1561d9->enter($__internal_4d1dd4d7207928d800b0aa981b9070df7e09a6a38cecbeda9f35045d5b1561d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4d1dd4d7207928d800b0aa981b9070df7e09a6a38cecbeda9f35045d5b1561d9->leave($__internal_4d1dd4d7207928d800b0aa981b9070df7e09a6a38cecbeda9f35045d5b1561d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
