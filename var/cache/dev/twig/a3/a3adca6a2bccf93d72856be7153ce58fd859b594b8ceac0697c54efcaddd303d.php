<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a6cc91bc72f1e64f4f2765496fd0fe81f35c025bfe1505d929c18ab53afa3244 extends Twig_Template
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
        $__internal_d08d17a8192951a24a8ff0a1c8b0d98afe995981a47a4197d5fec75376225637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08d17a8192951a24a8ff0a1c8b0d98afe995981a47a4197d5fec75376225637->enter($__internal_d08d17a8192951a24a8ff0a1c8b0d98afe995981a47a4197d5fec75376225637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d08d17a8192951a24a8ff0a1c8b0d98afe995981a47a4197d5fec75376225637->leave($__internal_d08d17a8192951a24a8ff0a1c8b0d98afe995981a47a4197d5fec75376225637_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b762c70079b5176cbda5055a115461242cdfa35839b3b2be751846fa2a680171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b762c70079b5176cbda5055a115461242cdfa35839b3b2be751846fa2a680171->enter($__internal_b762c70079b5176cbda5055a115461242cdfa35839b3b2be751846fa2a680171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b762c70079b5176cbda5055a115461242cdfa35839b3b2be751846fa2a680171->leave($__internal_b762c70079b5176cbda5055a115461242cdfa35839b3b2be751846fa2a680171_prof);

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
