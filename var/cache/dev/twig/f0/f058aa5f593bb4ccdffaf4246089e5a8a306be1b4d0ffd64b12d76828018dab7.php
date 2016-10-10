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
        $__internal_1ade3f273f4adf016ffa46601cd5dd594956b43b8e8eba69447848d9d83b3e24 = $this->env->getExtension("native_profiler");
        $__internal_1ade3f273f4adf016ffa46601cd5dd594956b43b8e8eba69447848d9d83b3e24->enter($__internal_1ade3f273f4adf016ffa46601cd5dd594956b43b8e8eba69447848d9d83b3e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ade3f273f4adf016ffa46601cd5dd594956b43b8e8eba69447848d9d83b3e24->leave($__internal_1ade3f273f4adf016ffa46601cd5dd594956b43b8e8eba69447848d9d83b3e24_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5a0ffcfd677d605e2799690ac404db4ff431b515e44e7a476fb14740c00331c = $this->env->getExtension("native_profiler");
        $__internal_f5a0ffcfd677d605e2799690ac404db4ff431b515e44e7a476fb14740c00331c->enter($__internal_f5a0ffcfd677d605e2799690ac404db4ff431b515e44e7a476fb14740c00331c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f5a0ffcfd677d605e2799690ac404db4ff431b515e44e7a476fb14740c00331c->leave($__internal_f5a0ffcfd677d605e2799690ac404db4ff431b515e44e7a476fb14740c00331c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9dcea75efca59fdbd5424643f6f1945fed8a04d9e41a380cb07d4872108df10 = $this->env->getExtension("native_profiler");
        $__internal_e9dcea75efca59fdbd5424643f6f1945fed8a04d9e41a380cb07d4872108df10->enter($__internal_e9dcea75efca59fdbd5424643f6f1945fed8a04d9e41a380cb07d4872108df10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e9dcea75efca59fdbd5424643f6f1945fed8a04d9e41a380cb07d4872108df10->leave($__internal_e9dcea75efca59fdbd5424643f6f1945fed8a04d9e41a380cb07d4872108df10_prof);

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
