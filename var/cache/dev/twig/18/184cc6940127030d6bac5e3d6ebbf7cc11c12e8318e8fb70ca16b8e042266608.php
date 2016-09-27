<?php

/* LGPUserBundle:Avis:update.html.twig */
class __TwigTemplate_441dc54e3edf3c254a14e708c88678c33b58742741d6c45f5f56afb80f44cdb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:update.html.twig", 1);
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
        $__internal_b4c2eb2d5d1a482395a49af4c45792ebbe282009b8f5a67174f32f588eaa489b = $this->env->getExtension("native_profiler");
        $__internal_b4c2eb2d5d1a482395a49af4c45792ebbe282009b8f5a67174f32f588eaa489b->enter($__internal_b4c2eb2d5d1a482395a49af4c45792ebbe282009b8f5a67174f32f588eaa489b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4c2eb2d5d1a482395a49af4c45792ebbe282009b8f5a67174f32f588eaa489b->leave($__internal_b4c2eb2d5d1a482395a49af4c45792ebbe282009b8f5a67174f32f588eaa489b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f53098b09255dc03b32e0f0dd8f5477c14dab5238199673645e9c1137fe0250e = $this->env->getExtension("native_profiler");
        $__internal_f53098b09255dc03b32e0f0dd8f5477c14dab5238199673645e9c1137fe0250e->enter($__internal_f53098b09255dc03b32e0f0dd8f5477c14dab5238199673645e9c1137fe0250e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f53098b09255dc03b32e0f0dd8f5477c14dab5238199673645e9c1137fe0250e->leave($__internal_f53098b09255dc03b32e0f0dd8f5477c14dab5238199673645e9c1137fe0250e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e701fa1356668d2d21362e4408d79a212027173f3115d20082418311378f2e44 = $this->env->getExtension("native_profiler");
        $__internal_e701fa1356668d2d21362e4408d79a212027173f3115d20082418311378f2e44->enter($__internal_e701fa1356668d2d21362e4408d79a212027173f3115d20082418311378f2e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_e701fa1356668d2d21362e4408d79a212027173f3115d20082418311378f2e44->leave($__internal_e701fa1356668d2d21362e4408d79a212027173f3115d20082418311378f2e44_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:update.html.twig";
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
  Modification d'un avis - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Modification d'un avis</h1>

  {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}
  
{% endblock %}";
    }
}
