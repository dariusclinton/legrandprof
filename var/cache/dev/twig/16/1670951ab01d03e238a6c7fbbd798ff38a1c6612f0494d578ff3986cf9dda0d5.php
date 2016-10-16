<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_19e2c8a6338ec85d85b2e34eee90570fe51448a086b0083171e97c637d46cfad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_016ddf9992379e877c9d69814766436ab05af9b570fc3b6182ceef8354a5f774 = $this->env->getExtension("native_profiler");
        $__internal_016ddf9992379e877c9d69814766436ab05af9b570fc3b6182ceef8354a5f774->enter($__internal_016ddf9992379e877c9d69814766436ab05af9b570fc3b6182ceef8354a5f774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_016ddf9992379e877c9d69814766436ab05af9b570fc3b6182ceef8354a5f774->leave($__internal_016ddf9992379e877c9d69814766436ab05af9b570fc3b6182ceef8354a5f774_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa16a3075f546cf8520e32b0679aa3917e0afa8daead0ccd9890a9b6dafd59e7 = $this->env->getExtension("native_profiler");
        $__internal_fa16a3075f546cf8520e32b0679aa3917e0afa8daead0ccd9890a9b6dafd59e7->enter($__internal_fa16a3075f546cf8520e32b0679aa3917e0afa8daead0ccd9890a9b6dafd59e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_fa16a3075f546cf8520e32b0679aa3917e0afa8daead0ccd9890a9b6dafd59e7->leave($__internal_fa16a3075f546cf8520e32b0679aa3917e0afa8daead0ccd9890a9b6dafd59e7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
