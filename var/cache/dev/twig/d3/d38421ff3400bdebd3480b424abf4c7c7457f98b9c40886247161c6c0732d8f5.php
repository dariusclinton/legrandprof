<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_00e3784b1d0351a3c64d5ea4c57ebfd277a7a03e6bd1b9a37d34ec84d923836a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6930232e9dd57080c87885755f6fcebb3d3882cabc5419146ec0d1bf37e6e3d3 = $this->env->getExtension("native_profiler");
        $__internal_6930232e9dd57080c87885755f6fcebb3d3882cabc5419146ec0d1bf37e6e3d3->enter($__internal_6930232e9dd57080c87885755f6fcebb3d3882cabc5419146ec0d1bf37e6e3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6930232e9dd57080c87885755f6fcebb3d3882cabc5419146ec0d1bf37e6e3d3->leave($__internal_6930232e9dd57080c87885755f6fcebb3d3882cabc5419146ec0d1bf37e6e3d3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b2f8164df0273e49fef31c91a6d168838d27c9a786ecae5b8362d309e01a6c1 = $this->env->getExtension("native_profiler");
        $__internal_9b2f8164df0273e49fef31c91a6d168838d27c9a786ecae5b8362d309e01a6c1->enter($__internal_9b2f8164df0273e49fef31c91a6d168838d27c9a786ecae5b8362d309e01a6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_9b2f8164df0273e49fef31c91a6d168838d27c9a786ecae5b8362d309e01a6c1->leave($__internal_9b2f8164df0273e49fef31c91a6d168838d27c9a786ecae5b8362d309e01a6c1_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"::layout.html.twig\" %}

{% block body %}



{% endblock %}
";
    }
}
