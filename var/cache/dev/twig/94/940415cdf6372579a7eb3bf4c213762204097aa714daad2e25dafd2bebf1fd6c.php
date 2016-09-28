<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ee86c1b812daa1b8919bc96f64bd46b59ee60439d571371340153864df40814b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_4d85f590396dcd88c2c59e75557d1d18e17502ec170ddeb162306d596572bbb9 = $this->env->getExtension("native_profiler");
        $__internal_4d85f590396dcd88c2c59e75557d1d18e17502ec170ddeb162306d596572bbb9->enter($__internal_4d85f590396dcd88c2c59e75557d1d18e17502ec170ddeb162306d596572bbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d85f590396dcd88c2c59e75557d1d18e17502ec170ddeb162306d596572bbb9->leave($__internal_4d85f590396dcd88c2c59e75557d1d18e17502ec170ddeb162306d596572bbb9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3db264bbd6266f6c9de36d5054bfc14ebdbf3daf5fb3a5c0e45fe27101dad321 = $this->env->getExtension("native_profiler");
        $__internal_3db264bbd6266f6c9de36d5054bfc14ebdbf3daf5fb3a5c0e45fe27101dad321->enter($__internal_3db264bbd6266f6c9de36d5054bfc14ebdbf3daf5fb3a5c0e45fe27101dad321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_3db264bbd6266f6c9de36d5054bfc14ebdbf3daf5fb3a5c0e45fe27101dad321->leave($__internal_3db264bbd6266f6c9de36d5054bfc14ebdbf3daf5fb3a5c0e45fe27101dad321_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a139543b52408e0069bf663811330eba05961ff370fbc07e7132ae252b94ecca = $this->env->getExtension("native_profiler");
        $__internal_a139543b52408e0069bf663811330eba05961ff370fbc07e7132ae252b94ecca->enter($__internal_a139543b52408e0069bf663811330eba05961ff370fbc07e7132ae252b94ecca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_a139543b52408e0069bf663811330eba05961ff370fbc07e7132ae252b94ecca->leave($__internal_a139543b52408e0069bf663811330eba05961ff370fbc07e7132ae252b94ecca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
