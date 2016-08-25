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
        $__internal_0bc9e9e9a80062371b7192c0e7c63a7b1117adcc8804245d6fb398b472bfe57a = $this->env->getExtension("native_profiler");
        $__internal_0bc9e9e9a80062371b7192c0e7c63a7b1117adcc8804245d6fb398b472bfe57a->enter($__internal_0bc9e9e9a80062371b7192c0e7c63a7b1117adcc8804245d6fb398b472bfe57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bc9e9e9a80062371b7192c0e7c63a7b1117adcc8804245d6fb398b472bfe57a->leave($__internal_0bc9e9e9a80062371b7192c0e7c63a7b1117adcc8804245d6fb398b472bfe57a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32901fed27ce8ab84afa0bdd66f891887413de3ef3a272a49c95cf85a5af85d0 = $this->env->getExtension("native_profiler");
        $__internal_32901fed27ce8ab84afa0bdd66f891887413de3ef3a272a49c95cf85a5af85d0->enter($__internal_32901fed27ce8ab84afa0bdd66f891887413de3ef3a272a49c95cf85a5af85d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_32901fed27ce8ab84afa0bdd66f891887413de3ef3a272a49c95cf85a5af85d0->leave($__internal_32901fed27ce8ab84afa0bdd66f891887413de3ef3a272a49c95cf85a5af85d0_prof);

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
