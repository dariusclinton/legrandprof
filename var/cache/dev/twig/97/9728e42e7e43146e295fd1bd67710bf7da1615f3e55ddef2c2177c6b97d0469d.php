<?php

/* @LGPUser/Registration/confirmed.html.twig */
class __TwigTemplate_b530f523619a86390893afee1a18085fdcd4cab03c0a9ced89a3eb097cdedceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Registration/confirmed.html.twig", 1);
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
        $__internal_e33ebdc5ceed58329d81a6f00e2dd6e71d4a82eb8724eb330a5f41c2a596b7da = $this->env->getExtension("native_profiler");
        $__internal_e33ebdc5ceed58329d81a6f00e2dd6e71d4a82eb8724eb330a5f41c2a596b7da->enter($__internal_e33ebdc5ceed58329d81a6f00e2dd6e71d4a82eb8724eb330a5f41c2a596b7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e33ebdc5ceed58329d81a6f00e2dd6e71d4a82eb8724eb330a5f41c2a596b7da->leave($__internal_e33ebdc5ceed58329d81a6f00e2dd6e71d4a82eb8724eb330a5f41c2a596b7da_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5dcbe2b3b35c980d0ef1b52285e5814a1a45124d75203bcda00e91b30867f16 = $this->env->getExtension("native_profiler");
        $__internal_e5dcbe2b3b35c980d0ef1b52285e5814a1a45124d75203bcda00e91b30867f16->enter($__internal_e5dcbe2b3b35c980d0ef1b52285e5814a1a45124d75203bcda00e91b30867f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e5dcbe2b3b35c980d0ef1b52285e5814a1a45124d75203bcda00e91b30867f16->leave($__internal_e5dcbe2b3b35c980d0ef1b52285e5814a1a45124d75203bcda00e91b30867f16_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/confirmed.html.twig";
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
