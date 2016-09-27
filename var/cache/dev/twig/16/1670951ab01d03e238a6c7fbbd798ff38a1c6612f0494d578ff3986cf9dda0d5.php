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
        $__internal_277fce985ef750e1db7cbde3946f833d6407511ae0e4b1ac36c0d5e32c1220aa = $this->env->getExtension("native_profiler");
        $__internal_277fce985ef750e1db7cbde3946f833d6407511ae0e4b1ac36c0d5e32c1220aa->enter($__internal_277fce985ef750e1db7cbde3946f833d6407511ae0e4b1ac36c0d5e32c1220aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_277fce985ef750e1db7cbde3946f833d6407511ae0e4b1ac36c0d5e32c1220aa->leave($__internal_277fce985ef750e1db7cbde3946f833d6407511ae0e4b1ac36c0d5e32c1220aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a12b22cb56a33ae91bdc1d2d3533dfcdaee9b3456499905b24565a8786826813 = $this->env->getExtension("native_profiler");
        $__internal_a12b22cb56a33ae91bdc1d2d3533dfcdaee9b3456499905b24565a8786826813->enter($__internal_a12b22cb56a33ae91bdc1d2d3533dfcdaee9b3456499905b24565a8786826813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_a12b22cb56a33ae91bdc1d2d3533dfcdaee9b3456499905b24565a8786826813->leave($__internal_a12b22cb56a33ae91bdc1d2d3533dfcdaee9b3456499905b24565a8786826813_prof);

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
