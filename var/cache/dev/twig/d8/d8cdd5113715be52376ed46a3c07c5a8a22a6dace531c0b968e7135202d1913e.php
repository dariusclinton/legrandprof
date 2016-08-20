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
        $__internal_294196f1e002b0beb0cc4cd5f59e349279eb42aa3043c761ef8370b3367ff9f5 = $this->env->getExtension("native_profiler");
        $__internal_294196f1e002b0beb0cc4cd5f59e349279eb42aa3043c761ef8370b3367ff9f5->enter($__internal_294196f1e002b0beb0cc4cd5f59e349279eb42aa3043c761ef8370b3367ff9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_294196f1e002b0beb0cc4cd5f59e349279eb42aa3043c761ef8370b3367ff9f5->leave($__internal_294196f1e002b0beb0cc4cd5f59e349279eb42aa3043c761ef8370b3367ff9f5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cff72cce0bce1c9c7bba20a9ca09b5c106565986bf6fa2894c902a6a23018323 = $this->env->getExtension("native_profiler");
        $__internal_cff72cce0bce1c9c7bba20a9ca09b5c106565986bf6fa2894c902a6a23018323->enter($__internal_cff72cce0bce1c9c7bba20a9ca09b5c106565986bf6fa2894c902a6a23018323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_cff72cce0bce1c9c7bba20a9ca09b5c106565986bf6fa2894c902a6a23018323->leave($__internal_cff72cce0bce1c9c7bba20a9ca09b5c106565986bf6fa2894c902a6a23018323_prof);

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
