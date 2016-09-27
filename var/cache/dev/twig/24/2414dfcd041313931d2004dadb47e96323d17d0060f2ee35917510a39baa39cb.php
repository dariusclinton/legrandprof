<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0cd8e319d39a0b321c36fe24ad3c80f503ff524a951f1e5cbb6d7e2bcaf40e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_89b61a6700b22b2f48516757755f1386a901d142af0cffb334e55e4de0526d7e = $this->env->getExtension("native_profiler");
        $__internal_89b61a6700b22b2f48516757755f1386a901d142af0cffb334e55e4de0526d7e->enter($__internal_89b61a6700b22b2f48516757755f1386a901d142af0cffb334e55e4de0526d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89b61a6700b22b2f48516757755f1386a901d142af0cffb334e55e4de0526d7e->leave($__internal_89b61a6700b22b2f48516757755f1386a901d142af0cffb334e55e4de0526d7e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73f04b0b379924ec0820445eb8179cd2085077323e5426541909fe4a26a341f4 = $this->env->getExtension("native_profiler");
        $__internal_73f04b0b379924ec0820445eb8179cd2085077323e5426541909fe4a26a341f4->enter($__internal_73f04b0b379924ec0820445eb8179cd2085077323e5426541909fe4a26a341f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_73f04b0b379924ec0820445eb8179cd2085077323e5426541909fe4a26a341f4->leave($__internal_73f04b0b379924ec0820445eb8179cd2085077323e5426541909fe4a26a341f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
