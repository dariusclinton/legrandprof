<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8536f341ff3076cf2ceaab09e7329f7e4ae6a5d54a03520aa948c5d0ace2f058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_dcd7d72db9a4a6fbf4e4449bb7a3b95ade6dbdbab1c81a889c65544afa9a5c1a = $this->env->getExtension("native_profiler");
        $__internal_dcd7d72db9a4a6fbf4e4449bb7a3b95ade6dbdbab1c81a889c65544afa9a5c1a->enter($__internal_dcd7d72db9a4a6fbf4e4449bb7a3b95ade6dbdbab1c81a889c65544afa9a5c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcd7d72db9a4a6fbf4e4449bb7a3b95ade6dbdbab1c81a889c65544afa9a5c1a->leave($__internal_dcd7d72db9a4a6fbf4e4449bb7a3b95ade6dbdbab1c81a889c65544afa9a5c1a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d86f82ea51ae3483be8ba4a1f534be03f0612320a7863676f5ead698aabde00e = $this->env->getExtension("native_profiler");
        $__internal_d86f82ea51ae3483be8ba4a1f534be03f0612320a7863676f5ead698aabde00e->enter($__internal_d86f82ea51ae3483be8ba4a1f534be03f0612320a7863676f5ead698aabde00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d86f82ea51ae3483be8ba4a1f534be03f0612320a7863676f5ead698aabde00e->leave($__internal_d86f82ea51ae3483be8ba4a1f534be03f0612320a7863676f5ead698aabde00e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
