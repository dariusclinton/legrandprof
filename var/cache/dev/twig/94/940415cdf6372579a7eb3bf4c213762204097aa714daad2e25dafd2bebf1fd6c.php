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
        $__internal_b9945adecfa401a0feebe8857af3868e175e3c4b26840ffd4a711014ebe5ad2b = $this->env->getExtension("native_profiler");
        $__internal_b9945adecfa401a0feebe8857af3868e175e3c4b26840ffd4a711014ebe5ad2b->enter($__internal_b9945adecfa401a0feebe8857af3868e175e3c4b26840ffd4a711014ebe5ad2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9945adecfa401a0feebe8857af3868e175e3c4b26840ffd4a711014ebe5ad2b->leave($__internal_b9945adecfa401a0feebe8857af3868e175e3c4b26840ffd4a711014ebe5ad2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0855f2f84a9790c376d6ea6c18e9412d9ebcd57229f039107555b859d30a2e03 = $this->env->getExtension("native_profiler");
        $__internal_0855f2f84a9790c376d6ea6c18e9412d9ebcd57229f039107555b859d30a2e03->enter($__internal_0855f2f84a9790c376d6ea6c18e9412d9ebcd57229f039107555b859d30a2e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_0855f2f84a9790c376d6ea6c18e9412d9ebcd57229f039107555b859d30a2e03->leave($__internal_0855f2f84a9790c376d6ea6c18e9412d9ebcd57229f039107555b859d30a2e03_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b97d836f81cd58da69cf3bec0df96d771a7c157017ab6062fa1d5018dc42be15 = $this->env->getExtension("native_profiler");
        $__internal_b97d836f81cd58da69cf3bec0df96d771a7c157017ab6062fa1d5018dc42be15->enter($__internal_b97d836f81cd58da69cf3bec0df96d771a7c157017ab6062fa1d5018dc42be15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_b97d836f81cd58da69cf3bec0df96d771a7c157017ab6062fa1d5018dc42be15->leave($__internal_b97d836f81cd58da69cf3bec0df96d771a7c157017ab6062fa1d5018dc42be15_prof);

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
