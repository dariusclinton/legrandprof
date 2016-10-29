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
        $__internal_6416e067aaa23a3ac02a181a5a5ac2c51b4464b795712d454678aa157721c793 = $this->env->getExtension("native_profiler");
        $__internal_6416e067aaa23a3ac02a181a5a5ac2c51b4464b795712d454678aa157721c793->enter($__internal_6416e067aaa23a3ac02a181a5a5ac2c51b4464b795712d454678aa157721c793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6416e067aaa23a3ac02a181a5a5ac2c51b4464b795712d454678aa157721c793->leave($__internal_6416e067aaa23a3ac02a181a5a5ac2c51b4464b795712d454678aa157721c793_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ead6f43827bd187a79093607e10ea1fc8c8353c215b26681a0d01e67df22a9a = $this->env->getExtension("native_profiler");
        $__internal_5ead6f43827bd187a79093607e10ea1fc8c8353c215b26681a0d01e67df22a9a->enter($__internal_5ead6f43827bd187a79093607e10ea1fc8c8353c215b26681a0d01e67df22a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5ead6f43827bd187a79093607e10ea1fc8c8353c215b26681a0d01e67df22a9a->leave($__internal_5ead6f43827bd187a79093607e10ea1fc8c8353c215b26681a0d01e67df22a9a_prof);

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
