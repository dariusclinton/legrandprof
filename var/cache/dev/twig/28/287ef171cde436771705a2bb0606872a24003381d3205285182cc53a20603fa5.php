<?php

/* LGPUserBundle:Anomalie:update.html.twig */
class __TwigTemplate_14d3ec17c7aa6eb887a362c3cd122d2351197646d482082c262d343bf9112afa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Anomalie:update.html.twig", 1);
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
        $__internal_ccec972ceb247639704681316ea57b2681886d6afe2fa7fb5a65dc2a78829977 = $this->env->getExtension("native_profiler");
        $__internal_ccec972ceb247639704681316ea57b2681886d6afe2fa7fb5a65dc2a78829977->enter($__internal_ccec972ceb247639704681316ea57b2681886d6afe2fa7fb5a65dc2a78829977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccec972ceb247639704681316ea57b2681886d6afe2fa7fb5a65dc2a78829977->leave($__internal_ccec972ceb247639704681316ea57b2681886d6afe2fa7fb5a65dc2a78829977_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eebe880614dd678784d3a44e1fc16b7b399336138bfdb88ca4ea016a3870e0cc = $this->env->getExtension("native_profiler");
        $__internal_eebe880614dd678784d3a44e1fc16b7b399336138bfdb88ca4ea016a3870e0cc->enter($__internal_eebe880614dd678784d3a44e1fc16b7b399336138bfdb88ca4ea016a3870e0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_eebe880614dd678784d3a44e1fc16b7b399336138bfdb88ca4ea016a3870e0cc->leave($__internal_eebe880614dd678784d3a44e1fc16b7b399336138bfdb88ca4ea016a3870e0cc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_15b8b9b7e90458c6edfde9f17c461398bf6d4015fb110d4432fe4167382bedcf = $this->env->getExtension("native_profiler");
        $__internal_15b8b9b7e90458c6edfde9f17c461398bf6d4015fb110d4432fe4167382bedcf->enter($__internal_15b8b9b7e90458c6edfde9f17c461398bf6d4015fb110d4432fe4167382bedcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une anomalie</h1>
    
";
        // line 12
        echo "  ";
        $this->loadTemplate("LGPUserBundle:Anomalie:formulaire.html.twig", "LGPUserBundle:Anomalie:update.html.twig", 12)->display($context);
        // line 13
        echo "  
";
        
        $__internal_15b8b9b7e90458c6edfde9f17c461398bf6d4015fb110d4432fe4167382bedcf->leave($__internal_15b8b9b7e90458c6edfde9f17c461398bf6d4015fb110d4432fe4167382bedcf_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Anomalie:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  62 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mise à jour d'une anomalie - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Mise à jour d'une anomalie</h1>
    
{#  Inclusion du formulaire #}
  {% include 'LGPUserBundle:Anomalie:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
