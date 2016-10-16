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
        $__internal_30a2318942e04201e8d0ce45ab9424be887a6d1f59a90fdf1a4bd61066914eed = $this->env->getExtension("native_profiler");
        $__internal_30a2318942e04201e8d0ce45ab9424be887a6d1f59a90fdf1a4bd61066914eed->enter($__internal_30a2318942e04201e8d0ce45ab9424be887a6d1f59a90fdf1a4bd61066914eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a2318942e04201e8d0ce45ab9424be887a6d1f59a90fdf1a4bd61066914eed->leave($__internal_30a2318942e04201e8d0ce45ab9424be887a6d1f59a90fdf1a4bd61066914eed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_942af46292c8acb1c7dff1e1400804b844a34ebd6a640f099b0fa2673aabd07a = $this->env->getExtension("native_profiler");
        $__internal_942af46292c8acb1c7dff1e1400804b844a34ebd6a640f099b0fa2673aabd07a->enter($__internal_942af46292c8acb1c7dff1e1400804b844a34ebd6a640f099b0fa2673aabd07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_942af46292c8acb1c7dff1e1400804b844a34ebd6a640f099b0fa2673aabd07a->leave($__internal_942af46292c8acb1c7dff1e1400804b844a34ebd6a640f099b0fa2673aabd07a_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64c5b8b3b24dc117e592071f76518c1e689906acda4726c7f061215f1050989d = $this->env->getExtension("native_profiler");
        $__internal_64c5b8b3b24dc117e592071f76518c1e689906acda4726c7f061215f1050989d->enter($__internal_64c5b8b3b24dc117e592071f76518c1e689906acda4726c7f061215f1050989d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_64c5b8b3b24dc117e592071f76518c1e689906acda4726c7f061215f1050989d->leave($__internal_64c5b8b3b24dc117e592071f76518c1e689906acda4726c7f061215f1050989d_prof);

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
