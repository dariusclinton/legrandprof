<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_19e2c8a6338ec85d85b2e34eee90570fe51448a086b0083171e97c637d46cfad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_6441c9b160705d256e6b1e454f3178a7bd1082e66dd742448b84b71e0f1bea5c = $this->env->getExtension("native_profiler");
        $__internal_6441c9b160705d256e6b1e454f3178a7bd1082e66dd742448b84b71e0f1bea5c->enter($__internal_6441c9b160705d256e6b1e454f3178a7bd1082e66dd742448b84b71e0f1bea5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6441c9b160705d256e6b1e454f3178a7bd1082e66dd742448b84b71e0f1bea5c->leave($__internal_6441c9b160705d256e6b1e454f3178a7bd1082e66dd742448b84b71e0f1bea5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e47cc8cf40d05459be6236dba507d7b662d8a64055612457d85f4fa06f510ea = $this->env->getExtension("native_profiler");
        $__internal_4e47cc8cf40d05459be6236dba507d7b662d8a64055612457d85f4fa06f510ea->enter($__internal_4e47cc8cf40d05459be6236dba507d7b662d8a64055612457d85f4fa06f510ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_4e47cc8cf40d05459be6236dba507d7b662d8a64055612457d85f4fa06f510ea->leave($__internal_4e47cc8cf40d05459be6236dba507d7b662d8a64055612457d85f4fa06f510ea_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
