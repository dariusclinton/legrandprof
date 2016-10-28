<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_cbda278794cabdd7761947d618d06fad8e546c83246d51a558af1f2bf75cf3d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_d5127203616af350eeff1d853908482094874b4580ca1c53257556ee39cd764d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5127203616af350eeff1d853908482094874b4580ca1c53257556ee39cd764d->enter($__internal_d5127203616af350eeff1d853908482094874b4580ca1c53257556ee39cd764d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5127203616af350eeff1d853908482094874b4580ca1c53257556ee39cd764d->leave($__internal_d5127203616af350eeff1d853908482094874b4580ca1c53257556ee39cd764d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf9a239304fe7cd9657246b2a7a454200708623259fa3ca2f9185c0c1c965cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9a239304fe7cd9657246b2a7a454200708623259fa3ca2f9185c0c1c965cf4->enter($__internal_cf9a239304fe7cd9657246b2a7a454200708623259fa3ca2f9185c0c1c965cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_cf9a239304fe7cd9657246b2a7a454200708623259fa3ca2f9185c0c1c965cf4->leave($__internal_cf9a239304fe7cd9657246b2a7a454200708623259fa3ca2f9185c0c1c965cf4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
