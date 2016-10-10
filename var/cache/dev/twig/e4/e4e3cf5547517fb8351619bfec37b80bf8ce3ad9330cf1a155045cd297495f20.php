<?php

/* LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e9fee84088b688574dd8d2e907e013f4d0839ed48f6eda39b0d6d05c42107a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_d2dd0180f357646746b4b0fc9898df342f0756087a8c457059b1cc47fe674d7c = $this->env->getExtension("native_profiler");
        $__internal_d2dd0180f357646746b4b0fc9898df342f0756087a8c457059b1cc47fe674d7c->enter($__internal_d2dd0180f357646746b4b0fc9898df342f0756087a8c457059b1cc47fe674d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2dd0180f357646746b4b0fc9898df342f0756087a8c457059b1cc47fe674d7c->leave($__internal_d2dd0180f357646746b4b0fc9898df342f0756087a8c457059b1cc47fe674d7c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_895a2065a8ef1a5135c9ed34669c616aea47d42ab2a8b11bb5b34dfa1c4d1cbe = $this->env->getExtension("native_profiler");
        $__internal_895a2065a8ef1a5135c9ed34669c616aea47d42ab2a8b11bb5b34dfa1c4d1cbe->enter($__internal_895a2065a8ef1a5135c9ed34669c616aea47d42ab2a8b11bb5b34dfa1c4d1cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_895a2065a8ef1a5135c9ed34669c616aea47d42ab2a8b11bb5b34dfa1c4d1cbe->leave($__internal_895a2065a8ef1a5135c9ed34669c616aea47d42ab2a8b11bb5b34dfa1c4d1cbe_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
";
    }
}
