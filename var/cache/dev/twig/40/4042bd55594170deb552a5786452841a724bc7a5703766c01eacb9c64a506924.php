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
        $__internal_0e0d2f83e4e0596e8eb0378e03a770f2e2724ba911778e0acf74ce6678bacba1 = $this->env->getExtension("native_profiler");
        $__internal_0e0d2f83e4e0596e8eb0378e03a770f2e2724ba911778e0acf74ce6678bacba1->enter($__internal_0e0d2f83e4e0596e8eb0378e03a770f2e2724ba911778e0acf74ce6678bacba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e0d2f83e4e0596e8eb0378e03a770f2e2724ba911778e0acf74ce6678bacba1->leave($__internal_0e0d2f83e4e0596e8eb0378e03a770f2e2724ba911778e0acf74ce6678bacba1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17ac6ba25c0e329bf35f6e5e8977ca53b35c53f997dc2200fdc67cd016f74ee3 = $this->env->getExtension("native_profiler");
        $__internal_17ac6ba25c0e329bf35f6e5e8977ca53b35c53f997dc2200fdc67cd016f74ee3->enter($__internal_17ac6ba25c0e329bf35f6e5e8977ca53b35c53f997dc2200fdc67cd016f74ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_17ac6ba25c0e329bf35f6e5e8977ca53b35c53f997dc2200fdc67cd016f74ee3->leave($__internal_17ac6ba25c0e329bf35f6e5e8977ca53b35c53f997dc2200fdc67cd016f74ee3_prof);

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
