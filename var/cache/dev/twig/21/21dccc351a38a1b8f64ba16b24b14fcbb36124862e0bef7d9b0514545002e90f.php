<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b455e71bbe9516ff9e8d3d8f0c9bb51f63a5e61d437fd4e8825e94889672ae8d extends Twig_Template
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
        $__internal_5471bad80e825388957d8ba16f30784e0321366411bb5da13aff7603aed06fa6 = $this->env->getExtension("native_profiler");
        $__internal_5471bad80e825388957d8ba16f30784e0321366411bb5da13aff7603aed06fa6->enter($__internal_5471bad80e825388957d8ba16f30784e0321366411bb5da13aff7603aed06fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5471bad80e825388957d8ba16f30784e0321366411bb5da13aff7603aed06fa6->leave($__internal_5471bad80e825388957d8ba16f30784e0321366411bb5da13aff7603aed06fa6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3373bc3e3c8281c4099c1a222c55315662c017ee7079d1d04af72150465ea6f = $this->env->getExtension("native_profiler");
        $__internal_d3373bc3e3c8281c4099c1a222c55315662c017ee7079d1d04af72150465ea6f->enter($__internal_d3373bc3e3c8281c4099c1a222c55315662c017ee7079d1d04af72150465ea6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d3373bc3e3c8281c4099c1a222c55315662c017ee7079d1d04af72150465ea6f->leave($__internal_d3373bc3e3c8281c4099c1a222c55315662c017ee7079d1d04af72150465ea6f_prof);

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
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
