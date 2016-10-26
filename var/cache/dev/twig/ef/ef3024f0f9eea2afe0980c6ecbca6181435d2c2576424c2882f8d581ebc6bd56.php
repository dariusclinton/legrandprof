<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_760d568cbb53013b6301aaf33138d45296907573a3270a183f571ad953597aff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_ef47d86377cf6e4e73af773a94c89e61b3b11181e21e16b978e0fd882368e7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef47d86377cf6e4e73af773a94c89e61b3b11181e21e16b978e0fd882368e7dc->enter($__internal_ef47d86377cf6e4e73af773a94c89e61b3b11181e21e16b978e0fd882368e7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef47d86377cf6e4e73af773a94c89e61b3b11181e21e16b978e0fd882368e7dc->leave($__internal_ef47d86377cf6e4e73af773a94c89e61b3b11181e21e16b978e0fd882368e7dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab110926cc25fffa3fc8396b2a2a84f175fbd1b494871f99373462ef6cd7896b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab110926cc25fffa3fc8396b2a2a84f175fbd1b494871f99373462ef6cd7896b->enter($__internal_ab110926cc25fffa3fc8396b2a2a84f175fbd1b494871f99373462ef6cd7896b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_ab110926cc25fffa3fc8396b2a2a84f175fbd1b494871f99373462ef6cd7896b->leave($__internal_ab110926cc25fffa3fc8396b2a2a84f175fbd1b494871f99373462ef6cd7896b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
