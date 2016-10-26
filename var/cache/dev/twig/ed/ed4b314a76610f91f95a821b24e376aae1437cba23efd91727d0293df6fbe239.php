<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_fe7b4c3c67c74d1677154956c4543bde175347ac688855226c979874bca3ccbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_ca56e9a5700752e885766c777dd6050d55ec0b249d85673dcd731abccfc66bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca56e9a5700752e885766c777dd6050d55ec0b249d85673dcd731abccfc66bff->enter($__internal_ca56e9a5700752e885766c777dd6050d55ec0b249d85673dcd731abccfc66bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca56e9a5700752e885766c777dd6050d55ec0b249d85673dcd731abccfc66bff->leave($__internal_ca56e9a5700752e885766c777dd6050d55ec0b249d85673dcd731abccfc66bff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_429a091ea54b2583c91328ff1f53de27dafed158e9e27e89a011074f780c4cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429a091ea54b2583c91328ff1f53de27dafed158e9e27e89a011074f780c4cd1->enter($__internal_429a091ea54b2583c91328ff1f53de27dafed158e9e27e89a011074f780c4cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_429a091ea54b2583c91328ff1f53de27dafed158e9e27e89a011074f780c4cd1->leave($__internal_429a091ea54b2583c91328ff1f53de27dafed158e9e27e89a011074f780c4cd1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
