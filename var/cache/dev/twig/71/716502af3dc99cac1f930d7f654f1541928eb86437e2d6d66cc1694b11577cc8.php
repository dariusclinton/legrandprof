<?php

/* LGPAdminBundle:ProfAdmin:list_cv.html.twig */
class __TwigTemplate_df0188e78e9650b67bd581a273147e327d4837f607701bb8e73712747adf7062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "LGPAdminBundle:ProfAdmin:list_cv.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb279ea441e2e2dd75cb76e1a089fe980ba023e1426cff6952bc2117fb0e242e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb279ea441e2e2dd75cb76e1a089fe980ba023e1426cff6952bc2117fb0e242e->enter($__internal_fb279ea441e2e2dd75cb76e1a089fe980ba023e1426cff6952bc2117fb0e242e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle:ProfAdmin:list_cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb279ea441e2e2dd75cb76e1a089fe980ba023e1426cff6952bc2117fb0e242e->leave($__internal_fb279ea441e2e2dd75cb76e1a089fe980ba023e1426cff6952bc2117fb0e242e_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_25cd7613b59cb9d1a72236cca78b669ee19c7d45b2ad13c9ba9e3b1c2a95aa00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cd7613b59cb9d1a72236cca78b669ee19c7d45b2ad13c9ba9e3b1c2a95aa00->enter($__internal_25cd7613b59cb9d1a72236cca78b669ee19c7d45b2ad13c9ba9e3b1c2a95aa00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "CVFile", array()))) {
            // line 5
            echo "        (<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "CVFile", array()), "webPath", array())), "html", null, true);
            echo "\" target=\"blank\">Voir le CV</a>)
    ";
        }
        
        $__internal_25cd7613b59cb9d1a72236cca78b669ee19c7d45b2ad13c9ba9e3b1c2a95aa00->leave($__internal_25cd7613b59cb9d1a72236cca78b669ee19c7d45b2ad13c9ba9e3b1c2a95aa00_prof);

    }

    public function getTemplateName()
    {
        return "LGPAdminBundle:ProfAdmin:list_cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}

{% block field %}
    {% if object.CVFile is not null %}
        (<a href=\"{{ asset(object.CVFile.webPath) }}\" target=\"blank\">Voir le CV</a>)
    {% endif %}
{% endblock %}
";
    }
}
