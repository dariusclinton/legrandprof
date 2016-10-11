<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_a7f36f685fef2fbbecd4614bec9eb3aa9e7ad4cd3e20ae675e5fd5c53f9d38aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_848cbff54d43808aba2efc2aea6d52d266dea7440d73eb7c1784233ff45bc7a6 = $this->env->getExtension("native_profiler");
        $__internal_848cbff54d43808aba2efc2aea6d52d266dea7440d73eb7c1784233ff45bc7a6->enter($__internal_848cbff54d43808aba2efc2aea6d52d266dea7440d73eb7c1784233ff45bc7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848cbff54d43808aba2efc2aea6d52d266dea7440d73eb7c1784233ff45bc7a6->leave($__internal_848cbff54d43808aba2efc2aea6d52d266dea7440d73eb7c1784233ff45bc7a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00af04b31d8f50ff9216c0ec860a5343ab30983826e4d0debff6a2fc6fc94418 = $this->env->getExtension("native_profiler");
        $__internal_00af04b31d8f50ff9216c0ec860a5343ab30983826e4d0debff6a2fc6fc94418->enter($__internal_00af04b31d8f50ff9216c0ec860a5343ab30983826e4d0debff6a2fc6fc94418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_00af04b31d8f50ff9216c0ec860a5343ab30983826e4d0debff6a2fc6fc94418->leave($__internal_00af04b31d8f50ff9216c0ec860a5343ab30983826e4d0debff6a2fc6fc94418_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
