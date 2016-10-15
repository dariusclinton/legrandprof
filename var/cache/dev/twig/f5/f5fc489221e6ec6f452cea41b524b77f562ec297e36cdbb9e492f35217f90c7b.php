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
        $__internal_b3533d4ae5e7f8633e22aed496b07c38d9d1d8dfe2c94ffd436723a401bfca54 = $this->env->getExtension("native_profiler");
        $__internal_b3533d4ae5e7f8633e22aed496b07c38d9d1d8dfe2c94ffd436723a401bfca54->enter($__internal_b3533d4ae5e7f8633e22aed496b07c38d9d1d8dfe2c94ffd436723a401bfca54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3533d4ae5e7f8633e22aed496b07c38d9d1d8dfe2c94ffd436723a401bfca54->leave($__internal_b3533d4ae5e7f8633e22aed496b07c38d9d1d8dfe2c94ffd436723a401bfca54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01c3a0d33feae2de69720e644940b61f04661eea1a19ea1196b1e08719fa097e = $this->env->getExtension("native_profiler");
        $__internal_01c3a0d33feae2de69720e644940b61f04661eea1a19ea1196b1e08719fa097e->enter($__internal_01c3a0d33feae2de69720e644940b61f04661eea1a19ea1196b1e08719fa097e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_01c3a0d33feae2de69720e644940b61f04661eea1a19ea1196b1e08719fa097e->leave($__internal_01c3a0d33feae2de69720e644940b61f04661eea1a19ea1196b1e08719fa097e_prof);

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
