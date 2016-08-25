<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_47081e6e7f3fedde333bbfc1f0c478bd4b6bc9f2f613634adf2c913d4746f94a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_b456fc0e96e76acf16d6dc6a7e634388b167b97be7dbaa60e611962e572063c3 = $this->env->getExtension("native_profiler");
        $__internal_b456fc0e96e76acf16d6dc6a7e634388b167b97be7dbaa60e611962e572063c3->enter($__internal_b456fc0e96e76acf16d6dc6a7e634388b167b97be7dbaa60e611962e572063c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b456fc0e96e76acf16d6dc6a7e634388b167b97be7dbaa60e611962e572063c3->leave($__internal_b456fc0e96e76acf16d6dc6a7e634388b167b97be7dbaa60e611962e572063c3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62214f267bd2b71c48379ad5f81fdabecbd352d0b499739b7e4e8bf58743e705 = $this->env->getExtension("native_profiler");
        $__internal_62214f267bd2b71c48379ad5f81fdabecbd352d0b499739b7e4e8bf58743e705->enter($__internal_62214f267bd2b71c48379ad5f81fdabecbd352d0b499739b7e4e8bf58743e705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_62214f267bd2b71c48379ad5f81fdabecbd352d0b499739b7e4e8bf58743e705->leave($__internal_62214f267bd2b71c48379ad5f81fdabecbd352d0b499739b7e4e8bf58743e705_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
