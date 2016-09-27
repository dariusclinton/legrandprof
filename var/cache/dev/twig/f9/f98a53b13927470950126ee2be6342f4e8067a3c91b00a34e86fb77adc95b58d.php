<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_7ddf562c5ac4894d6dbcbd260b0f86fb0c436bc0ac2aabce65dd3809160f38ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_5961edbca6757f858cc9dadb459084b70d5d215fc58a33408763b595c034fa91 = $this->env->getExtension("native_profiler");
        $__internal_5961edbca6757f858cc9dadb459084b70d5d215fc58a33408763b595c034fa91->enter($__internal_5961edbca6757f858cc9dadb459084b70d5d215fc58a33408763b595c034fa91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5961edbca6757f858cc9dadb459084b70d5d215fc58a33408763b595c034fa91->leave($__internal_5961edbca6757f858cc9dadb459084b70d5d215fc58a33408763b595c034fa91_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29f353d67599b005c8a78acd2fe6ef147d86f305f4579ca9e188ff50f4da1466 = $this->env->getExtension("native_profiler");
        $__internal_29f353d67599b005c8a78acd2fe6ef147d86f305f4579ca9e188ff50f4da1466->enter($__internal_29f353d67599b005c8a78acd2fe6ef147d86f305f4579ca9e188ff50f4da1466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_29f353d67599b005c8a78acd2fe6ef147d86f305f4579ca9e188ff50f4da1466->leave($__internal_29f353d67599b005c8a78acd2fe6ef147d86f305f4579ca9e188ff50f4da1466_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
