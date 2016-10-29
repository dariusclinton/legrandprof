<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_f8715bca3b4eb7038c658ee59a4ceb8ff65a595e5df16420cfa00de461c8698a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_08c99b904c1840143c57c9f70cb866b69a74617c06014e309602d56cafbb2d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c99b904c1840143c57c9f70cb866b69a74617c06014e309602d56cafbb2d77->enter($__internal_08c99b904c1840143c57c9f70cb866b69a74617c06014e309602d56cafbb2d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08c99b904c1840143c57c9f70cb866b69a74617c06014e309602d56cafbb2d77->leave($__internal_08c99b904c1840143c57c9f70cb866b69a74617c06014e309602d56cafbb2d77_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e92ddde17ef7cad231ee5b93bb42ac4f466af5d0ff2441c68eba57336c8b4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e92ddde17ef7cad231ee5b93bb42ac4f466af5d0ff2441c68eba57336c8b4d1->enter($__internal_7e92ddde17ef7cad231ee5b93bb42ac4f466af5d0ff2441c68eba57336c8b4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7e92ddde17ef7cad231ee5b93bb42ac4f466af5d0ff2441c68eba57336c8b4d1->leave($__internal_7e92ddde17ef7cad231ee5b93bb42ac4f466af5d0ff2441c68eba57336c8b4d1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
