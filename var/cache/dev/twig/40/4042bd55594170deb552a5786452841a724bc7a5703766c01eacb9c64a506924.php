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
        $__internal_6dc330d1a07457bdbca257d721f92ef3747b26073dba713d3880926e4c27a834 = $this->env->getExtension("native_profiler");
        $__internal_6dc330d1a07457bdbca257d721f92ef3747b26073dba713d3880926e4c27a834->enter($__internal_6dc330d1a07457bdbca257d721f92ef3747b26073dba713d3880926e4c27a834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dc330d1a07457bdbca257d721f92ef3747b26073dba713d3880926e4c27a834->leave($__internal_6dc330d1a07457bdbca257d721f92ef3747b26073dba713d3880926e4c27a834_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0472305c5ce3d96ac6cde29615d8bce8ff95c8a15aca715e348e68a9e9076cd = $this->env->getExtension("native_profiler");
        $__internal_c0472305c5ce3d96ac6cde29615d8bce8ff95c8a15aca715e348e68a9e9076cd->enter($__internal_c0472305c5ce3d96ac6cde29615d8bce8ff95c8a15aca715e348e68a9e9076cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c0472305c5ce3d96ac6cde29615d8bce8ff95c8a15aca715e348e68a9e9076cd->leave($__internal_c0472305c5ce3d96ac6cde29615d8bce8ff95c8a15aca715e348e68a9e9076cd_prof);

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
