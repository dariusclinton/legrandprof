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
        $__internal_1442d123d4373091b0b7be4b143d0c8fe124eddf88cdcf56db39db8e26a8c416 = $this->env->getExtension("native_profiler");
        $__internal_1442d123d4373091b0b7be4b143d0c8fe124eddf88cdcf56db39db8e26a8c416->enter($__internal_1442d123d4373091b0b7be4b143d0c8fe124eddf88cdcf56db39db8e26a8c416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1442d123d4373091b0b7be4b143d0c8fe124eddf88cdcf56db39db8e26a8c416->leave($__internal_1442d123d4373091b0b7be4b143d0c8fe124eddf88cdcf56db39db8e26a8c416_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b127f99058a2aa4197b2acbb0aea2babd8c7fcd0ac74cd3ce2bba041b7bc738 = $this->env->getExtension("native_profiler");
        $__internal_9b127f99058a2aa4197b2acbb0aea2babd8c7fcd0ac74cd3ce2bba041b7bc738->enter($__internal_9b127f99058a2aa4197b2acbb0aea2babd8c7fcd0ac74cd3ce2bba041b7bc738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9b127f99058a2aa4197b2acbb0aea2babd8c7fcd0ac74cd3ce2bba041b7bc738->leave($__internal_9b127f99058a2aa4197b2acbb0aea2babd8c7fcd0ac74cd3ce2bba041b7bc738_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfdf27702238f79f6950af952493689be0c576020e7e2311bcb40cb755d5f5b6 = $this->env->getExtension("native_profiler");
        $__internal_bfdf27702238f79f6950af952493689be0c576020e7e2311bcb40cb755d5f5b6->enter($__internal_bfdf27702238f79f6950af952493689be0c576020e7e2311bcb40cb755d5f5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_bfdf27702238f79f6950af952493689be0c576020e7e2311bcb40cb755d5f5b6->leave($__internal_bfdf27702238f79f6950af952493689be0c576020e7e2311bcb40cb755d5f5b6_prof);

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
