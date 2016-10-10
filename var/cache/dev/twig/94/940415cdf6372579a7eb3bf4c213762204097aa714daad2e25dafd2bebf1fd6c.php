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
        $__internal_c21b3f5c5fb1e14468eb118ab86a2794ae7558a93be577672736e03d6cb45af5 = $this->env->getExtension("native_profiler");
        $__internal_c21b3f5c5fb1e14468eb118ab86a2794ae7558a93be577672736e03d6cb45af5->enter($__internal_c21b3f5c5fb1e14468eb118ab86a2794ae7558a93be577672736e03d6cb45af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c21b3f5c5fb1e14468eb118ab86a2794ae7558a93be577672736e03d6cb45af5->leave($__internal_c21b3f5c5fb1e14468eb118ab86a2794ae7558a93be577672736e03d6cb45af5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b124f58084d63dd2e598b75cb0fdf67038b38c6c8c108cb98d3ec221a4bd40e = $this->env->getExtension("native_profiler");
        $__internal_6b124f58084d63dd2e598b75cb0fdf67038b38c6c8c108cb98d3ec221a4bd40e->enter($__internal_6b124f58084d63dd2e598b75cb0fdf67038b38c6c8c108cb98d3ec221a4bd40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_6b124f58084d63dd2e598b75cb0fdf67038b38c6c8c108cb98d3ec221a4bd40e->leave($__internal_6b124f58084d63dd2e598b75cb0fdf67038b38c6c8c108cb98d3ec221a4bd40e_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35035a18dce618e2600140a91736856bb16e5b16064a3ac0072279b7ac4c2fdb = $this->env->getExtension("native_profiler");
        $__internal_35035a18dce618e2600140a91736856bb16e5b16064a3ac0072279b7ac4c2fdb->enter($__internal_35035a18dce618e2600140a91736856bb16e5b16064a3ac0072279b7ac4c2fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_35035a18dce618e2600140a91736856bb16e5b16064a3ac0072279b7ac4c2fdb->leave($__internal_35035a18dce618e2600140a91736856bb16e5b16064a3ac0072279b7ac4c2fdb_prof);

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
