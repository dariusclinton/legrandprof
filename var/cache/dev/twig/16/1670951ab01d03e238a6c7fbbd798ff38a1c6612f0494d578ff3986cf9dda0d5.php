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
        $__internal_595d47c1e3ffcf79af41ab5171f62f68e7fc2a04a331c8a70386ff39f6bb3e44 = $this->env->getExtension("native_profiler");
        $__internal_595d47c1e3ffcf79af41ab5171f62f68e7fc2a04a331c8a70386ff39f6bb3e44->enter($__internal_595d47c1e3ffcf79af41ab5171f62f68e7fc2a04a331c8a70386ff39f6bb3e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_595d47c1e3ffcf79af41ab5171f62f68e7fc2a04a331c8a70386ff39f6bb3e44->leave($__internal_595d47c1e3ffcf79af41ab5171f62f68e7fc2a04a331c8a70386ff39f6bb3e44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1224d9f7117ecc0170531a3370d845c75f02c5daf123dbdae3f95bebc71a2ad3 = $this->env->getExtension("native_profiler");
        $__internal_1224d9f7117ecc0170531a3370d845c75f02c5daf123dbdae3f95bebc71a2ad3->enter($__internal_1224d9f7117ecc0170531a3370d845c75f02c5daf123dbdae3f95bebc71a2ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_1224d9f7117ecc0170531a3370d845c75f02c5daf123dbdae3f95bebc71a2ad3->leave($__internal_1224d9f7117ecc0170531a3370d845c75f02c5daf123dbdae3f95bebc71a2ad3_prof);

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
