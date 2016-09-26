<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_c78423cf0a8ad6f08f9fdcd648cfa48ed434ac129e7e4520eba21b49de2bc7c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_6fbc2a09f82268b43be67072bfdba2fe372b6ba591cfd47b5a687ddcc8f4797a = $this->env->getExtension("native_profiler");
        $__internal_6fbc2a09f82268b43be67072bfdba2fe372b6ba591cfd47b5a687ddcc8f4797a->enter($__internal_6fbc2a09f82268b43be67072bfdba2fe372b6ba591cfd47b5a687ddcc8f4797a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fbc2a09f82268b43be67072bfdba2fe372b6ba591cfd47b5a687ddcc8f4797a->leave($__internal_6fbc2a09f82268b43be67072bfdba2fe372b6ba591cfd47b5a687ddcc8f4797a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa2ff508545666b0c146254d4bcee0b1e43ac1e9b39adc0efc9ccc4bcdcacc7c = $this->env->getExtension("native_profiler");
        $__internal_fa2ff508545666b0c146254d4bcee0b1e43ac1e9b39adc0efc9ccc4bcdcacc7c->enter($__internal_fa2ff508545666b0c146254d4bcee0b1e43ac1e9b39adc0efc9ccc4bcdcacc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_fa2ff508545666b0c146254d4bcee0b1e43ac1e9b39adc0efc9ccc4bcdcacc7c->leave($__internal_fa2ff508545666b0c146254d4bcee0b1e43ac1e9b39adc0efc9ccc4bcdcacc7c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
