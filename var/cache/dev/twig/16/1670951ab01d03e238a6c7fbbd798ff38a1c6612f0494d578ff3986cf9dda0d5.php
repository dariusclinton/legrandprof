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
        $__internal_ab2d80bc7d2926f7a327ff773ea7c2a8ee4bc867559ba276ee526b65e5402b3a = $this->env->getExtension("native_profiler");
        $__internal_ab2d80bc7d2926f7a327ff773ea7c2a8ee4bc867559ba276ee526b65e5402b3a->enter($__internal_ab2d80bc7d2926f7a327ff773ea7c2a8ee4bc867559ba276ee526b65e5402b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab2d80bc7d2926f7a327ff773ea7c2a8ee4bc867559ba276ee526b65e5402b3a->leave($__internal_ab2d80bc7d2926f7a327ff773ea7c2a8ee4bc867559ba276ee526b65e5402b3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d347bfee1c4399197229036227bec7baf9367253513d23371c17a3acb79b240 = $this->env->getExtension("native_profiler");
        $__internal_2d347bfee1c4399197229036227bec7baf9367253513d23371c17a3acb79b240->enter($__internal_2d347bfee1c4399197229036227bec7baf9367253513d23371c17a3acb79b240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_2d347bfee1c4399197229036227bec7baf9367253513d23371c17a3acb79b240->leave($__internal_2d347bfee1c4399197229036227bec7baf9367253513d23371c17a3acb79b240_prof);

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
