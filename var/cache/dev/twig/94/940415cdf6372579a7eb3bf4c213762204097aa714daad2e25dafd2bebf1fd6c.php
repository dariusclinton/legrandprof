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
        $__internal_4ed18a03502a314e88c58d5d312a9b1a8023f2ef5e17d9213e119eeb80e300e0 = $this->env->getExtension("native_profiler");
        $__internal_4ed18a03502a314e88c58d5d312a9b1a8023f2ef5e17d9213e119eeb80e300e0->enter($__internal_4ed18a03502a314e88c58d5d312a9b1a8023f2ef5e17d9213e119eeb80e300e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ed18a03502a314e88c58d5d312a9b1a8023f2ef5e17d9213e119eeb80e300e0->leave($__internal_4ed18a03502a314e88c58d5d312a9b1a8023f2ef5e17d9213e119eeb80e300e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64559dc72a67a48cd90495e71edb3ca0d9761e83b0b95eeeb82d0c7297d91988 = $this->env->getExtension("native_profiler");
        $__internal_64559dc72a67a48cd90495e71edb3ca0d9761e83b0b95eeeb82d0c7297d91988->enter($__internal_64559dc72a67a48cd90495e71edb3ca0d9761e83b0b95eeeb82d0c7297d91988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_64559dc72a67a48cd90495e71edb3ca0d9761e83b0b95eeeb82d0c7297d91988->leave($__internal_64559dc72a67a48cd90495e71edb3ca0d9761e83b0b95eeeb82d0c7297d91988_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc8512752ed7e45b27af20a1831459585e1e2ac1a7321855e8104644bd404d74 = $this->env->getExtension("native_profiler");
        $__internal_dc8512752ed7e45b27af20a1831459585e1e2ac1a7321855e8104644bd404d74->enter($__internal_dc8512752ed7e45b27af20a1831459585e1e2ac1a7321855e8104644bd404d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_dc8512752ed7e45b27af20a1831459585e1e2ac1a7321855e8104644bd404d74->leave($__internal_dc8512752ed7e45b27af20a1831459585e1e2ac1a7321855e8104644bd404d74_prof);

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
