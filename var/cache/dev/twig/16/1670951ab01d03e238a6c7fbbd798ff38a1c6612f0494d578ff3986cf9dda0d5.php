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
        $__internal_6558429862adfe1270c7aa5276181af45bc8821a576a7f154e109be92a339f74 = $this->env->getExtension("native_profiler");
        $__internal_6558429862adfe1270c7aa5276181af45bc8821a576a7f154e109be92a339f74->enter($__internal_6558429862adfe1270c7aa5276181af45bc8821a576a7f154e109be92a339f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6558429862adfe1270c7aa5276181af45bc8821a576a7f154e109be92a339f74->leave($__internal_6558429862adfe1270c7aa5276181af45bc8821a576a7f154e109be92a339f74_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b718e52cfe5dda2235ce88d4a05af3b44e4e89ce44b3aa08da33fa54ceebbae = $this->env->getExtension("native_profiler");
        $__internal_6b718e52cfe5dda2235ce88d4a05af3b44e4e89ce44b3aa08da33fa54ceebbae->enter($__internal_6b718e52cfe5dda2235ce88d4a05af3b44e4e89ce44b3aa08da33fa54ceebbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_6b718e52cfe5dda2235ce88d4a05af3b44e4e89ce44b3aa08da33fa54ceebbae->leave($__internal_6b718e52cfe5dda2235ce88d4a05af3b44e4e89ce44b3aa08da33fa54ceebbae_prof);

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
