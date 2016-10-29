<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a6cc91bc72f1e64f4f2765496fd0fe81f35c025bfe1505d929c18ab53afa3244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_541cd4e8f73070d044ca3c5622bde7219168246966a15f9bf35d1b353cd12cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541cd4e8f73070d044ca3c5622bde7219168246966a15f9bf35d1b353cd12cfe->enter($__internal_541cd4e8f73070d044ca3c5622bde7219168246966a15f9bf35d1b353cd12cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_541cd4e8f73070d044ca3c5622bde7219168246966a15f9bf35d1b353cd12cfe->leave($__internal_541cd4e8f73070d044ca3c5622bde7219168246966a15f9bf35d1b353cd12cfe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79859786f2f5db12affba86cc8cf3f0383cd89fe3fce98004ffd29ae1524bf28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79859786f2f5db12affba86cc8cf3f0383cd89fe3fce98004ffd29ae1524bf28->enter($__internal_79859786f2f5db12affba86cc8cf3f0383cd89fe3fce98004ffd29ae1524bf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_79859786f2f5db12affba86cc8cf3f0383cd89fe3fce98004ffd29ae1524bf28->leave($__internal_79859786f2f5db12affba86cc8cf3f0383cd89fe3fce98004ffd29ae1524bf28_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
