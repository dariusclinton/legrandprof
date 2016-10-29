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
        $__internal_e57e2d537485acc331476950a797ec1c8be31562ef83976d87245e85529e5c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57e2d537485acc331476950a797ec1c8be31562ef83976d87245e85529e5c9c->enter($__internal_e57e2d537485acc331476950a797ec1c8be31562ef83976d87245e85529e5c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e57e2d537485acc331476950a797ec1c8be31562ef83976d87245e85529e5c9c->leave($__internal_e57e2d537485acc331476950a797ec1c8be31562ef83976d87245e85529e5c9c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01194ee0b5b6c6bea784045543ef70512b85debec8e8782ecf9d2577c31718ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01194ee0b5b6c6bea784045543ef70512b85debec8e8782ecf9d2577c31718ee->enter($__internal_01194ee0b5b6c6bea784045543ef70512b85debec8e8782ecf9d2577c31718ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_01194ee0b5b6c6bea784045543ef70512b85debec8e8782ecf9d2577c31718ee->leave($__internal_01194ee0b5b6c6bea784045543ef70512b85debec8e8782ecf9d2577c31718ee_prof);

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
