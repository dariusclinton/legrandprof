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
        $__internal_e2d8dda90e9b70c5fd09203e08128db255f97b4776bc38665c600a897e0962eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d8dda90e9b70c5fd09203e08128db255f97b4776bc38665c600a897e0962eb->enter($__internal_e2d8dda90e9b70c5fd09203e08128db255f97b4776bc38665c600a897e0962eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2d8dda90e9b70c5fd09203e08128db255f97b4776bc38665c600a897e0962eb->leave($__internal_e2d8dda90e9b70c5fd09203e08128db255f97b4776bc38665c600a897e0962eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbbe9bd1f4434bae1e0c9d8ff1cb448119efcbe6d698ce504cad9765119bcae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbe9bd1f4434bae1e0c9d8ff1cb448119efcbe6d698ce504cad9765119bcae7->enter($__internal_fbbe9bd1f4434bae1e0c9d8ff1cb448119efcbe6d698ce504cad9765119bcae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_fbbe9bd1f4434bae1e0c9d8ff1cb448119efcbe6d698ce504cad9765119bcae7->leave($__internal_fbbe9bd1f4434bae1e0c9d8ff1cb448119efcbe6d698ce504cad9765119bcae7_prof);

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
