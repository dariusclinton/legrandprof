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
        $__internal_6864a3569e9fd9b16a6fd171e090ee1b452f2fcf96918e85c70592be4b8b200d = $this->env->getExtension("native_profiler");
        $__internal_6864a3569e9fd9b16a6fd171e090ee1b452f2fcf96918e85c70592be4b8b200d->enter($__internal_6864a3569e9fd9b16a6fd171e090ee1b452f2fcf96918e85c70592be4b8b200d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6864a3569e9fd9b16a6fd171e090ee1b452f2fcf96918e85c70592be4b8b200d->leave($__internal_6864a3569e9fd9b16a6fd171e090ee1b452f2fcf96918e85c70592be4b8b200d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2196061d236b9525cf78f581759c3d5915ea96d72d588aafb2e3f5eb2584c9cb = $this->env->getExtension("native_profiler");
        $__internal_2196061d236b9525cf78f581759c3d5915ea96d72d588aafb2e3f5eb2584c9cb->enter($__internal_2196061d236b9525cf78f581759c3d5915ea96d72d588aafb2e3f5eb2584c9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2196061d236b9525cf78f581759c3d5915ea96d72d588aafb2e3f5eb2584c9cb->leave($__internal_2196061d236b9525cf78f581759c3d5915ea96d72d588aafb2e3f5eb2584c9cb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_00734b0c240e9ae3f26f1e548a532b95ad475872b24627189da04ab7cbc80654 = $this->env->getExtension("native_profiler");
        $__internal_00734b0c240e9ae3f26f1e548a532b95ad475872b24627189da04ab7cbc80654->enter($__internal_00734b0c240e9ae3f26f1e548a532b95ad475872b24627189da04ab7cbc80654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Cours:formulaire.html.twig", "LGPUserBundle:Cours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_00734b0c240e9ae3f26f1e548a532b95ad475872b24627189da04ab7cbc80654->leave($__internal_00734b0c240e9ae3f26f1e548a532b95ad475872b24627189da04ab7cbc80654_prof);

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
