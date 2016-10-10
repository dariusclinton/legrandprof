<?php

/* LGPUserBundle:Cours:update.html.twig */
class __TwigTemplate_29c8667ecb8ddde55e0251a04ff2f7399af7da435ad0bb53fcb16b58c87308c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Cours:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18a3ebfd1d3d284c14568610e8a4810aba254d201774dac07c5afafd2191da31 = $this->env->getExtension("native_profiler");
        $__internal_18a3ebfd1d3d284c14568610e8a4810aba254d201774dac07c5afafd2191da31->enter($__internal_18a3ebfd1d3d284c14568610e8a4810aba254d201774dac07c5afafd2191da31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18a3ebfd1d3d284c14568610e8a4810aba254d201774dac07c5afafd2191da31->leave($__internal_18a3ebfd1d3d284c14568610e8a4810aba254d201774dac07c5afafd2191da31_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d392e515af4c0e1f284393425445887a2022ec7d17f764685e450270f1f5853 = $this->env->getExtension("native_profiler");
        $__internal_4d392e515af4c0e1f284393425445887a2022ec7d17f764685e450270f1f5853->enter($__internal_4d392e515af4c0e1f284393425445887a2022ec7d17f764685e450270f1f5853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4d392e515af4c0e1f284393425445887a2022ec7d17f764685e450270f1f5853->leave($__internal_4d392e515af4c0e1f284393425445887a2022ec7d17f764685e450270f1f5853_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ca5ae4f459a281d207384e4a8181c81c00c58cc544b827ed3fc4bb86bc1bf5d = $this->env->getExtension("native_profiler");
        $__internal_7ca5ae4f459a281d207384e4a8181c81c00c58cc544b827ed3fc4bb86bc1bf5d->enter($__internal_7ca5ae4f459a281d207384e4a8181c81c00c58cc544b827ed3fc4bb86bc1bf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Cours:formulaire.html.twig", "LGPUserBundle:Cours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_7ca5ae4f459a281d207384e4a8181c81c00c58cc544b827ed3fc4bb86bc1bf5d->leave($__internal_7ca5ae4f459a281d207384e4a8181c81c00c58cc544b827ed3fc4bb86bc1bf5d_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Cours:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Modification d'un cours - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Modification d'un cours</h1>
  
  {% include 'LGPUserBundle:Cours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
