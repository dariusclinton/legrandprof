<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c569f9891ea703df050261c3cdba45df7a6efbb1520c9e6f384a471cf4a82140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_c88f39f000cb3ea54bca26c06890cdad1e0e9738f4e7988b328a2e9832a52b4c = $this->env->getExtension("native_profiler");
        $__internal_c88f39f000cb3ea54bca26c06890cdad1e0e9738f4e7988b328a2e9832a52b4c->enter($__internal_c88f39f000cb3ea54bca26c06890cdad1e0e9738f4e7988b328a2e9832a52b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c88f39f000cb3ea54bca26c06890cdad1e0e9738f4e7988b328a2e9832a52b4c->leave($__internal_c88f39f000cb3ea54bca26c06890cdad1e0e9738f4e7988b328a2e9832a52b4c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_644a8151b3c9a7e1ecb4e488d258cca2a09a1cdb545a1ff35bcef30255213b77 = $this->env->getExtension("native_profiler");
        $__internal_644a8151b3c9a7e1ecb4e488d258cca2a09a1cdb545a1ff35bcef30255213b77->enter($__internal_644a8151b3c9a7e1ecb4e488d258cca2a09a1cdb545a1ff35bcef30255213b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_644a8151b3c9a7e1ecb4e488d258cca2a09a1cdb545a1ff35bcef30255213b77->leave($__internal_644a8151b3c9a7e1ecb4e488d258cca2a09a1cdb545a1ff35bcef30255213b77_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
