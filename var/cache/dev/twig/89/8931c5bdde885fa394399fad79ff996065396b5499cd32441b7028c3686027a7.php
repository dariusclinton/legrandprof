<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_dc762d1731b924a028ed256003482ca99596d68e084279037a7eb35261ece0b9 extends Twig_Template
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
        $__internal_a23fda8b51b8c0724d7c7c535a45f435c8ef914920382cb0836e52ed37c5958c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23fda8b51b8c0724d7c7c535a45f435c8ef914920382cb0836e52ed37c5958c->enter($__internal_a23fda8b51b8c0724d7c7c535a45f435c8ef914920382cb0836e52ed37c5958c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a23fda8b51b8c0724d7c7c535a45f435c8ef914920382cb0836e52ed37c5958c->leave($__internal_a23fda8b51b8c0724d7c7c535a45f435c8ef914920382cb0836e52ed37c5958c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f81f8ce20e3333304897d49ddc13c713c97cb126cc2642ae940082a7ad3ae6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81f8ce20e3333304897d49ddc13c713c97cb126cc2642ae940082a7ad3ae6ac->enter($__internal_f81f8ce20e3333304897d49ddc13c713c97cb126cc2642ae940082a7ad3ae6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_f81f8ce20e3333304897d49ddc13c713c97cb126cc2642ae940082a7ad3ae6ac->leave($__internal_f81f8ce20e3333304897d49ddc13c713c97cb126cc2642ae940082a7ad3ae6ac_prof);

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
