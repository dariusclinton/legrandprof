<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_1708e650438bb1a635fa9ba66f380ac39aa5aa60107211c6576f3f9d880f4fac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_57aab2ac14c5fa40aed79cca78cef3066b18c93cb2aaa1f2631e88984c784382 = $this->env->getExtension("native_profiler");
        $__internal_57aab2ac14c5fa40aed79cca78cef3066b18c93cb2aaa1f2631e88984c784382->enter($__internal_57aab2ac14c5fa40aed79cca78cef3066b18c93cb2aaa1f2631e88984c784382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57aab2ac14c5fa40aed79cca78cef3066b18c93cb2aaa1f2631e88984c784382->leave($__internal_57aab2ac14c5fa40aed79cca78cef3066b18c93cb2aaa1f2631e88984c784382_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b971982491e35a5308008104ddf36ab65ce28b9e1918331ec1152458c71f8772 = $this->env->getExtension("native_profiler");
        $__internal_b971982491e35a5308008104ddf36ab65ce28b9e1918331ec1152458c71f8772->enter($__internal_b971982491e35a5308008104ddf36ab65ce28b9e1918331ec1152458c71f8772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b971982491e35a5308008104ddf36ab65ce28b9e1918331ec1152458c71f8772->leave($__internal_b971982491e35a5308008104ddf36ab65ce28b9e1918331ec1152458c71f8772_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
";
    }
}
