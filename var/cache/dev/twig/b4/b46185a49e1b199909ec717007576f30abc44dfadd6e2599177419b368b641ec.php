<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3a9c85517c4adca167ac5e38b3d78394cd9e85e31eb9ed117268f08e210565de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_35d5ceae101c4b5b1162b9008a18dc045e1d7b37b0643c9b7bff6415f9475b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d5ceae101c4b5b1162b9008a18dc045e1d7b37b0643c9b7bff6415f9475b82->enter($__internal_35d5ceae101c4b5b1162b9008a18dc045e1d7b37b0643c9b7bff6415f9475b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35d5ceae101c4b5b1162b9008a18dc045e1d7b37b0643c9b7bff6415f9475b82->leave($__internal_35d5ceae101c4b5b1162b9008a18dc045e1d7b37b0643c9b7bff6415f9475b82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f23dad55f5e85d44d295c8d106094c8a2366031bbf411899cd787ab5f6dc043a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23dad55f5e85d44d295c8d106094c8a2366031bbf411899cd787ab5f6dc043a->enter($__internal_f23dad55f5e85d44d295c8d106094c8a2366031bbf411899cd787ab5f6dc043a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f23dad55f5e85d44d295c8d106094c8a2366031bbf411899cd787ab5f6dc043a->leave($__internal_f23dad55f5e85d44d295c8d106094c8a2366031bbf411899cd787ab5f6dc043a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
  {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
