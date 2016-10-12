<?php

/* LGPUserBundle::layout.html.twig */
class __TwigTemplate_ee86c1b812daa1b8919bc96f64bd46b59ee60439d571371340153864df40814b extends Twig_Template
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
        $__internal_81c7a46f913e4281efe7c5e195c7d43dc798c4061e76ab46c0dfd72fe545d264 = $this->env->getExtension("native_profiler");
        $__internal_81c7a46f913e4281efe7c5e195c7d43dc798c4061e76ab46c0dfd72fe545d264->enter($__internal_81c7a46f913e4281efe7c5e195c7d43dc798c4061e76ab46c0dfd72fe545d264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81c7a46f913e4281efe7c5e195c7d43dc798c4061e76ab46c0dfd72fe545d264->leave($__internal_81c7a46f913e4281efe7c5e195c7d43dc798c4061e76ab46c0dfd72fe545d264_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d61326d91f6a8ef8cbce67fe34167e0a465dce804741167d5134689acc3e1ce2 = $this->env->getExtension("native_profiler");
        $__internal_d61326d91f6a8ef8cbce67fe34167e0a465dce804741167d5134689acc3e1ce2->enter($__internal_d61326d91f6a8ef8cbce67fe34167e0a465dce804741167d5134689acc3e1ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_d61326d91f6a8ef8cbce67fe34167e0a465dce804741167d5134689acc3e1ce2->leave($__internal_d61326d91f6a8ef8cbce67fe34167e0a465dce804741167d5134689acc3e1ce2_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06dc74096096e6b8362c15d712df209dfcd64155457b2708de1c7a85e1c0e91f = $this->env->getExtension("native_profiler");
        $__internal_06dc74096096e6b8362c15d712df209dfcd64155457b2708de1c7a85e1c0e91f->enter($__internal_06dc74096096e6b8362c15d712df209dfcd64155457b2708de1c7a85e1c0e91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_06dc74096096e6b8362c15d712df209dfcd64155457b2708de1c7a85e1c0e91f->leave($__internal_06dc74096096e6b8362c15d712df209dfcd64155457b2708de1c7a85e1c0e91f_prof);

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
