<?php

/* LGPUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_9830908b9faec2c485543a57e193a84dd2779c0fe54af335716433ee06ce916c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_753c0af93fa5e5529e9f6ab286a19addd3b10e2fc0adb6cac183050f82c69564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753c0af93fa5e5529e9f6ab286a19addd3b10e2fc0adb6cac183050f82c69564->enter($__internal_753c0af93fa5e5529e9f6ab286a19addd3b10e2fc0adb6cac183050f82c69564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_753c0af93fa5e5529e9f6ab286a19addd3b10e2fc0adb6cac183050f82c69564->leave($__internal_753c0af93fa5e5529e9f6ab286a19addd3b10e2fc0adb6cac183050f82c69564_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c047d3d26ad8c4b074ceadbcebfb369304694abec3a8a9e0f8b11947ab7508c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c047d3d26ad8c4b074ceadbcebfb369304694abec3a8a9e0f8b11947ab7508c->enter($__internal_1c047d3d26ad8c4b074ceadbcebfb369304694abec3a8a9e0f8b11947ab7508c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "LGPUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_1c047d3d26ad8c4b074ceadbcebfb369304694abec3a8a9e0f8b11947ab7508c->leave($__internal_1c047d3d26ad8c4b074ceadbcebfb369304694abec3a8a9e0f8b11947ab7508c_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:ChangePassword:change_password.html.twig";
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
