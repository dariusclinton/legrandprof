<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_67b9da72cfc15aff77f0073544c352e7628ed93b0059c6964d8831acaaa691f2 extends Twig_Template
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
        $__internal_4cba6b6f5a5f398a441fa308eb8d8af05f7557d4ceebb67f03c3975a51f7f42e = $this->env->getExtension("native_profiler");
        $__internal_4cba6b6f5a5f398a441fa308eb8d8af05f7557d4ceebb67f03c3975a51f7f42e->enter($__internal_4cba6b6f5a5f398a441fa308eb8d8af05f7557d4ceebb67f03c3975a51f7f42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cba6b6f5a5f398a441fa308eb8d8af05f7557d4ceebb67f03c3975a51f7f42e->leave($__internal_4cba6b6f5a5f398a441fa308eb8d8af05f7557d4ceebb67f03c3975a51f7f42e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12ea7e879bd13531db7398135decbf59fe514ad699466f264a3a03c7b10821fd = $this->env->getExtension("native_profiler");
        $__internal_12ea7e879bd13531db7398135decbf59fe514ad699466f264a3a03c7b10821fd->enter($__internal_12ea7e879bd13531db7398135decbf59fe514ad699466f264a3a03c7b10821fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_12ea7e879bd13531db7398135decbf59fe514ad699466f264a3a03c7b10821fd->leave($__internal_12ea7e879bd13531db7398135decbf59fe514ad699466f264a3a03c7b10821fd_prof);

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
