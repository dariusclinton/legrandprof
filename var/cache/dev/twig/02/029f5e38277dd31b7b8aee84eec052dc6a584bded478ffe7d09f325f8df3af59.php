<?php

/* LGPUserBundle::layout.html.twig */
class __TwigTemplate_3d46b23c7ab668b0a8926e5f5c9b67a3c77f8f0d4a104c12b39157618d9a029c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_769e4b9f6d892a7a8ffcdb5e455da009a4b5be9a828cb76de92ac396137b54d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769e4b9f6d892a7a8ffcdb5e455da009a4b5be9a828cb76de92ac396137b54d0->enter($__internal_769e4b9f6d892a7a8ffcdb5e455da009a4b5be9a828cb76de92ac396137b54d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_769e4b9f6d892a7a8ffcdb5e455da009a4b5be9a828cb76de92ac396137b54d0->leave($__internal_769e4b9f6d892a7a8ffcdb5e455da009a4b5be9a828cb76de92ac396137b54d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f37dd288975d25323691fe2ddc975c3f3cf82983fde85bf2c73853eb2ccc6b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37dd288975d25323691fe2ddc975c3f3cf82983fde85bf2c73853eb2ccc6b0b->enter($__internal_f37dd288975d25323691fe2ddc975c3f3cf82983fde85bf2c73853eb2ccc6b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_f37dd288975d25323691fe2ddc975c3f3cf82983fde85bf2c73853eb2ccc6b0b->leave($__internal_f37dd288975d25323691fe2ddc975c3f3cf82983fde85bf2c73853eb2ccc6b0b_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7534a74f4885b30b3c33c057ff6e51b3351daa804e4ee32fa4daf10c00637d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7534a74f4885b30b3c33c057ff6e51b3351daa804e4ee32fa4daf10c00637d84->enter($__internal_7534a74f4885b30b3c33c057ff6e51b3351daa804e4ee32fa4daf10c00637d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_7534a74f4885b30b3c33c057ff6e51b3351daa804e4ee32fa4daf10c00637d84->leave($__internal_7534a74f4885b30b3c33c057ff6e51b3351daa804e4ee32fa4daf10c00637d84_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'LGPCoreBundle::layout.html.twig' %}

{% block body %}

  {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}
  {% block fos_user_content %}

  {% endblock fos_user_content %}

{% endblock %}
";
    }
}
