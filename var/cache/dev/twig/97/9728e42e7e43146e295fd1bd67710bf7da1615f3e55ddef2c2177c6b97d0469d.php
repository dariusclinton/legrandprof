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
        $__internal_ac6d120ec5b5f79ce07e71b53a3d48db0b977124baeca823bbfcd1a5befc7dce = $this->env->getExtension("native_profiler");
        $__internal_ac6d120ec5b5f79ce07e71b53a3d48db0b977124baeca823bbfcd1a5befc7dce->enter($__internal_ac6d120ec5b5f79ce07e71b53a3d48db0b977124baeca823bbfcd1a5befc7dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac6d120ec5b5f79ce07e71b53a3d48db0b977124baeca823bbfcd1a5befc7dce->leave($__internal_ac6d120ec5b5f79ce07e71b53a3d48db0b977124baeca823bbfcd1a5befc7dce_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d117ab48278c7e313a2ae5a570d01df93f55dc76ad14d175baa90caf552735ee = $this->env->getExtension("native_profiler");
        $__internal_d117ab48278c7e313a2ae5a570d01df93f55dc76ad14d175baa90caf552735ee->enter($__internal_d117ab48278c7e313a2ae5a570d01df93f55dc76ad14d175baa90caf552735ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d117ab48278c7e313a2ae5a570d01df93f55dc76ad14d175baa90caf552735ee->leave($__internal_d117ab48278c7e313a2ae5a570d01df93f55dc76ad14d175baa90caf552735ee_prof);

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
