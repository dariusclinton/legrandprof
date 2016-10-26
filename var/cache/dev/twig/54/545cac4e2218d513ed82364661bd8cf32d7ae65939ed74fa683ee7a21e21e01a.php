<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_9830908b9faec2c485543a57e193a84dd2779c0fe54af335716433ee06ce916c extends Twig_Template
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
        $__internal_46103e4443b1165189fcce050cce3b0f32bb681fa5a4fe4bfba3342edc8c344b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46103e4443b1165189fcce050cce3b0f32bb681fa5a4fe4bfba3342edc8c344b->enter($__internal_46103e4443b1165189fcce050cce3b0f32bb681fa5a4fe4bfba3342edc8c344b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46103e4443b1165189fcce050cce3b0f32bb681fa5a4fe4bfba3342edc8c344b->leave($__internal_46103e4443b1165189fcce050cce3b0f32bb681fa5a4fe4bfba3342edc8c344b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c827db6af0ad9df74d3bf9d203f12a5b84f8666fa9bd71b62671a47e0d6f1af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c827db6af0ad9df74d3bf9d203f12a5b84f8666fa9bd71b62671a47e0d6f1af9->enter($__internal_c827db6af0ad9df74d3bf9d203f12a5b84f8666fa9bd71b62671a47e0d6f1af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c827db6af0ad9df74d3bf9d203f12a5b84f8666fa9bd71b62671a47e0d6f1af9->leave($__internal_c827db6af0ad9df74d3bf9d203f12a5b84f8666fa9bd71b62671a47e0d6f1af9_prof);

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
