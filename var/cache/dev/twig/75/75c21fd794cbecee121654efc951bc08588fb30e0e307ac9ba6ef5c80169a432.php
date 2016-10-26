<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_78e5e0f8ce4c2b98d7c455dd26de2b8979879428282611c0452388d8149c2aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_520ee052287716d89cd347957b1342a3e855b33a3e9dd47776095a2a9664dab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520ee052287716d89cd347957b1342a3e855b33a3e9dd47776095a2a9664dab4->enter($__internal_520ee052287716d89cd347957b1342a3e855b33a3e9dd47776095a2a9664dab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_520ee052287716d89cd347957b1342a3e855b33a3e9dd47776095a2a9664dab4->leave($__internal_520ee052287716d89cd347957b1342a3e855b33a3e9dd47776095a2a9664dab4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72c6e45b42ad677129eb0990b8c9186a0632344a269271a5d7efb754375c8e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c6e45b42ad677129eb0990b8c9186a0632344a269271a5d7efb754375c8e9e->enter($__internal_72c6e45b42ad677129eb0990b8c9186a0632344a269271a5d7efb754375c8e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_72c6e45b42ad677129eb0990b8c9186a0632344a269271a5d7efb754375c8e9e->leave($__internal_72c6e45b42ad677129eb0990b8c9186a0632344a269271a5d7efb754375c8e9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
