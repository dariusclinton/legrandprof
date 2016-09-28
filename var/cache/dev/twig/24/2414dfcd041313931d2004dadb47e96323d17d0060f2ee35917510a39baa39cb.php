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
        $__internal_2211a2ac30b06dbfc5a8803a1e1e464c025e136adbba3d6f258e820044122291 = $this->env->getExtension("native_profiler");
        $__internal_2211a2ac30b06dbfc5a8803a1e1e464c025e136adbba3d6f258e820044122291->enter($__internal_2211a2ac30b06dbfc5a8803a1e1e464c025e136adbba3d6f258e820044122291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2211a2ac30b06dbfc5a8803a1e1e464c025e136adbba3d6f258e820044122291->leave($__internal_2211a2ac30b06dbfc5a8803a1e1e464c025e136adbba3d6f258e820044122291_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8814346d6b114d9c7e6edfaf4e88eb7b5c97a5b550d09fbfa3fe42b22d6afb49 = $this->env->getExtension("native_profiler");
        $__internal_8814346d6b114d9c7e6edfaf4e88eb7b5c97a5b550d09fbfa3fe42b22d6afb49->enter($__internal_8814346d6b114d9c7e6edfaf4e88eb7b5c97a5b550d09fbfa3fe42b22d6afb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8814346d6b114d9c7e6edfaf4e88eb7b5c97a5b550d09fbfa3fe42b22d6afb49->leave($__internal_8814346d6b114d9c7e6edfaf4e88eb7b5c97a5b550d09fbfa3fe42b22d6afb49_prof);

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
