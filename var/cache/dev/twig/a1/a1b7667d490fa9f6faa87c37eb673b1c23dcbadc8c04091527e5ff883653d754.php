<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_7c06de2a11d83b7ee2c184a6f56bdc5b34b8f11f6f8487cd1d4a5bf2c6726815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_de4fd5f8bdf5166f5a57083be521fc3138afaad2731292d8e14bd69728749ac9 = $this->env->getExtension("native_profiler");
        $__internal_de4fd5f8bdf5166f5a57083be521fc3138afaad2731292d8e14bd69728749ac9->enter($__internal_de4fd5f8bdf5166f5a57083be521fc3138afaad2731292d8e14bd69728749ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de4fd5f8bdf5166f5a57083be521fc3138afaad2731292d8e14bd69728749ac9->leave($__internal_de4fd5f8bdf5166f5a57083be521fc3138afaad2731292d8e14bd69728749ac9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_173950b5369ba5f7c6003d41198ef8639ed4ad1a637d1e33910f42a0a62cfebc = $this->env->getExtension("native_profiler");
        $__internal_173950b5369ba5f7c6003d41198ef8639ed4ad1a637d1e33910f42a0a62cfebc->enter($__internal_173950b5369ba5f7c6003d41198ef8639ed4ad1a637d1e33910f42a0a62cfebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_173950b5369ba5f7c6003d41198ef8639ed4ad1a637d1e33910f42a0a62cfebc->leave($__internal_173950b5369ba5f7c6003d41198ef8639ed4ad1a637d1e33910f42a0a62cfebc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
