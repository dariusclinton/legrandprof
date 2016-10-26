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
        $__internal_3ee22de07d895287911ca3e47812bfc8abba87c224060c427681fa4536eaab13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee22de07d895287911ca3e47812bfc8abba87c224060c427681fa4536eaab13->enter($__internal_3ee22de07d895287911ca3e47812bfc8abba87c224060c427681fa4536eaab13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee22de07d895287911ca3e47812bfc8abba87c224060c427681fa4536eaab13->leave($__internal_3ee22de07d895287911ca3e47812bfc8abba87c224060c427681fa4536eaab13_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4abcac986b5cf59c7ec514e5858986c5d83a59eb7f53cb7008e1239d4477aa4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abcac986b5cf59c7ec514e5858986c5d83a59eb7f53cb7008e1239d4477aa4a->enter($__internal_4abcac986b5cf59c7ec514e5858986c5d83a59eb7f53cb7008e1239d4477aa4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4abcac986b5cf59c7ec514e5858986c5d83a59eb7f53cb7008e1239d4477aa4a->leave($__internal_4abcac986b5cf59c7ec514e5858986c5d83a59eb7f53cb7008e1239d4477aa4a_prof);

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
