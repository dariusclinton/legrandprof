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
        $__internal_d884b82313d65391cb8a079042a010bc2ffa6a65b463d3c908b5cce5af8de015 = $this->env->getExtension("native_profiler");
        $__internal_d884b82313d65391cb8a079042a010bc2ffa6a65b463d3c908b5cce5af8de015->enter($__internal_d884b82313d65391cb8a079042a010bc2ffa6a65b463d3c908b5cce5af8de015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d884b82313d65391cb8a079042a010bc2ffa6a65b463d3c908b5cce5af8de015->leave($__internal_d884b82313d65391cb8a079042a010bc2ffa6a65b463d3c908b5cce5af8de015_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3e649a4bd4256818054d1896460d44efd278383ff37bf09c2307f688f210573 = $this->env->getExtension("native_profiler");
        $__internal_a3e649a4bd4256818054d1896460d44efd278383ff37bf09c2307f688f210573->enter($__internal_a3e649a4bd4256818054d1896460d44efd278383ff37bf09c2307f688f210573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_a3e649a4bd4256818054d1896460d44efd278383ff37bf09c2307f688f210573->leave($__internal_a3e649a4bd4256818054d1896460d44efd278383ff37bf09c2307f688f210573_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cab187efac3618fccdea099ba365ea219568efcdf0763309646c54365d032dda = $this->env->getExtension("native_profiler");
        $__internal_cab187efac3618fccdea099ba365ea219568efcdf0763309646c54365d032dda->enter($__internal_cab187efac3618fccdea099ba365ea219568efcdf0763309646c54365d032dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_cab187efac3618fccdea099ba365ea219568efcdf0763309646c54365d032dda->leave($__internal_cab187efac3618fccdea099ba365ea219568efcdf0763309646c54365d032dda_prof);

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
