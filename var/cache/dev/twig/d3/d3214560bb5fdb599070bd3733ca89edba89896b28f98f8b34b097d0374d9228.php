<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b63a6655115bcba57209fe9e8af7867f9d5833126705499378146f333eaf06af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_1eb10cc68c6996e9a67e3ee3ce0b919a6d62907cc72c968fad390247d78de893 = $this->env->getExtension("native_profiler");
        $__internal_1eb10cc68c6996e9a67e3ee3ce0b919a6d62907cc72c968fad390247d78de893->enter($__internal_1eb10cc68c6996e9a67e3ee3ce0b919a6d62907cc72c968fad390247d78de893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eb10cc68c6996e9a67e3ee3ce0b919a6d62907cc72c968fad390247d78de893->leave($__internal_1eb10cc68c6996e9a67e3ee3ce0b919a6d62907cc72c968fad390247d78de893_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7f19cd285c6d462a4ff881d58b05ef027fd0f2c5a4d649b39e8162108c93967 = $this->env->getExtension("native_profiler");
        $__internal_d7f19cd285c6d462a4ff881d58b05ef027fd0f2c5a4d649b39e8162108c93967->enter($__internal_d7f19cd285c6d462a4ff881d58b05ef027fd0f2c5a4d649b39e8162108c93967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_d7f19cd285c6d462a4ff881d58b05ef027fd0f2c5a4d649b39e8162108c93967->leave($__internal_d7f19cd285c6d462a4ff881d58b05ef027fd0f2c5a4d649b39e8162108c93967_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
";
    }
}
