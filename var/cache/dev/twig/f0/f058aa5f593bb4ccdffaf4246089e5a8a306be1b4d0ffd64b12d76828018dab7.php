<?php

/* LGPUserBundle:Anomalie:add.html.twig */
class __TwigTemplate_8226bb4a341e33704bba92cd1ebd60e2eb441189895a91ad1898c56030977bdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Anomalie:add.html.twig", 1);
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
        $__internal_e8852c0786f7719bc088a57f557dd1c9dcbe076620520c3c04591a38712bffc5 = $this->env->getExtension("native_profiler");
        $__internal_e8852c0786f7719bc088a57f557dd1c9dcbe076620520c3c04591a38712bffc5->enter($__internal_e8852c0786f7719bc088a57f557dd1c9dcbe076620520c3c04591a38712bffc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8852c0786f7719bc088a57f557dd1c9dcbe076620520c3c04591a38712bffc5->leave($__internal_e8852c0786f7719bc088a57f557dd1c9dcbe076620520c3c04591a38712bffc5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_170db498f73e7972691263928db28cf65e3590231d6a906c38ab31294e90d91f = $this->env->getExtension("native_profiler");
        $__internal_170db498f73e7972691263928db28cf65e3590231d6a906c38ab31294e90d91f->enter($__internal_170db498f73e7972691263928db28cf65e3590231d6a906c38ab31294e90d91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_170db498f73e7972691263928db28cf65e3590231d6a906c38ab31294e90d91f->leave($__internal_170db498f73e7972691263928db28cf65e3590231d6a906c38ab31294e90d91f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f54a72b0880e8c79e13a6837afdd9873555fc7684fb1c4872181afb5556fa4c1 = $this->env->getExtension("native_profiler");
        $__internal_f54a72b0880e8c79e13a6837afdd9873555fc7684fb1c4872181afb5556fa4c1->enter($__internal_f54a72b0880e8c79e13a6837afdd9873555fc7684fb1c4872181afb5556fa4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Ajout d'une anomalie</h1>
    
";
        // line 12
        echo "  ";
        $this->loadTemplate("LGPUserBundle:Anomalie:formulaire.html.twig", "LGPUserBundle:Anomalie:add.html.twig", 12)->display($context);
        // line 13
        echo "  
";
        
        $__internal_f54a72b0880e8c79e13a6837afdd9873555fc7684fb1c4872181afb5556fa4c1->leave($__internal_f54a72b0880e8c79e13a6837afdd9873555fc7684fb1c4872181afb5556fa4c1_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Anomalie:add.html.twig";
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
  Ajout d'une anomalie - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Ajout d'une anomalie</h1>
    
{#  Inclusion du formulaire #}
  {% include 'LGPUserBundle:Anomalie:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
