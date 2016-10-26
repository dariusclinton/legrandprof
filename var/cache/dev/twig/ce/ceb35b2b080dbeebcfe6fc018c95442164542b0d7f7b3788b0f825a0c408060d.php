<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e50f10a3e4f01324d6a2167bfbfd264c13fca1cb3719702cb6378facc9d7b927 extends Twig_Template
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
        $__internal_a59ea64fdf6222e3d14101410ee3d7756a06350e395df513636e50748a908767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59ea64fdf6222e3d14101410ee3d7756a06350e395df513636e50748a908767->enter($__internal_a59ea64fdf6222e3d14101410ee3d7756a06350e395df513636e50748a908767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a59ea64fdf6222e3d14101410ee3d7756a06350e395df513636e50748a908767->leave($__internal_a59ea64fdf6222e3d14101410ee3d7756a06350e395df513636e50748a908767_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1d2dc2e8dc567563138276bcee434124f4191274bed19f0b798a7c4ab04714d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d2dc2e8dc567563138276bcee434124f4191274bed19f0b798a7c4ab04714d->enter($__internal_b1d2dc2e8dc567563138276bcee434124f4191274bed19f0b798a7c4ab04714d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b1d2dc2e8dc567563138276bcee434124f4191274bed19f0b798a7c4ab04714d->leave($__internal_b1d2dc2e8dc567563138276bcee434124f4191274bed19f0b798a7c4ab04714d_prof);

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
