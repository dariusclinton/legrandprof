<?php

/* LGPUserBundle:Indisponibilite:update.html.twig */
class __TwigTemplate_a93338cbd748ce6f4688999482470fc650fc1880887c7e4e364f085839f12335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 1);
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
        $__internal_17f95511d726da51143fa839461057ff956519477ceab64ef6e530e941eddc8e = $this->env->getExtension("native_profiler");
        $__internal_17f95511d726da51143fa839461057ff956519477ceab64ef6e530e941eddc8e->enter($__internal_17f95511d726da51143fa839461057ff956519477ceab64ef6e530e941eddc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17f95511d726da51143fa839461057ff956519477ceab64ef6e530e941eddc8e->leave($__internal_17f95511d726da51143fa839461057ff956519477ceab64ef6e530e941eddc8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8011e388f4d30fbdf0cf90d374ef9c8ea8dd6e8181a2faa5c2e7792772825dc9 = $this->env->getExtension("native_profiler");
        $__internal_8011e388f4d30fbdf0cf90d374ef9c8ea8dd6e8181a2faa5c2e7792772825dc9->enter($__internal_8011e388f4d30fbdf0cf90d374ef9c8ea8dd6e8181a2faa5c2e7792772825dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8011e388f4d30fbdf0cf90d374ef9c8ea8dd6e8181a2faa5c2e7792772825dc9->leave($__internal_8011e388f4d30fbdf0cf90d374ef9c8ea8dd6e8181a2faa5c2e7792772825dc9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b41bad3734c8ba281cbeec4b37d1adfe609b020ae4149b7182df1648f74776c1 = $this->env->getExtension("native_profiler");
        $__internal_b41bad3734c8ba281cbeec4b37d1adfe609b020ae4149b7182df1648f74776c1->enter($__internal_b41bad3734c8ba281cbeec4b37d1adfe609b020ae4149b7182df1648f74776c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_b41bad3734c8ba281cbeec4b37d1adfe609b020ae4149b7182df1648f74776c1->leave($__internal_b41bad3734c8ba281cbeec4b37d1adfe609b020ae4149b7182df1648f74776c1_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:update.html.twig";
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
  Mise à jour d'une indisponibilité - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Mise à d'une indiponibilité</h1>
  
  {% include 'LGPUserBundle:Indisponibilite:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
