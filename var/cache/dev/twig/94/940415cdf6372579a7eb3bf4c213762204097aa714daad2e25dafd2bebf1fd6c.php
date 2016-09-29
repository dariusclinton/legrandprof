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
        $__internal_83d712515a2f7f0e71a8073f01bec15d2797b9600679c5f63b149fd8df74e300 = $this->env->getExtension("native_profiler");
        $__internal_83d712515a2f7f0e71a8073f01bec15d2797b9600679c5f63b149fd8df74e300->enter($__internal_83d712515a2f7f0e71a8073f01bec15d2797b9600679c5f63b149fd8df74e300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83d712515a2f7f0e71a8073f01bec15d2797b9600679c5f63b149fd8df74e300->leave($__internal_83d712515a2f7f0e71a8073f01bec15d2797b9600679c5f63b149fd8df74e300_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_04a9fd5416943f992923ed6f54c355c5a64f7ef9f64be55b9027e8d785127cd2 = $this->env->getExtension("native_profiler");
        $__internal_04a9fd5416943f992923ed6f54c355c5a64f7ef9f64be55b9027e8d785127cd2->enter($__internal_04a9fd5416943f992923ed6f54c355c5a64f7ef9f64be55b9027e8d785127cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_04a9fd5416943f992923ed6f54c355c5a64f7ef9f64be55b9027e8d785127cd2->leave($__internal_04a9fd5416943f992923ed6f54c355c5a64f7ef9f64be55b9027e8d785127cd2_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b8f7eb8ab6922a690af3f46ba15789d473017174fd973373b66b0070225b561 = $this->env->getExtension("native_profiler");
        $__internal_0b8f7eb8ab6922a690af3f46ba15789d473017174fd973373b66b0070225b561->enter($__internal_0b8f7eb8ab6922a690af3f46ba15789d473017174fd973373b66b0070225b561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_0b8f7eb8ab6922a690af3f46ba15789d473017174fd973373b66b0070225b561->leave($__internal_0b8f7eb8ab6922a690af3f46ba15789d473017174fd973373b66b0070225b561_prof);

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
