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
        $__internal_42e895eb8f1cf8a26c9d0eaed1611ee4f358b5cf3ef61ff731fe016ea4274eef = $this->env->getExtension("native_profiler");
        $__internal_42e895eb8f1cf8a26c9d0eaed1611ee4f358b5cf3ef61ff731fe016ea4274eef->enter($__internal_42e895eb8f1cf8a26c9d0eaed1611ee4f358b5cf3ef61ff731fe016ea4274eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42e895eb8f1cf8a26c9d0eaed1611ee4f358b5cf3ef61ff731fe016ea4274eef->leave($__internal_42e895eb8f1cf8a26c9d0eaed1611ee4f358b5cf3ef61ff731fe016ea4274eef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dfeda661e761b65c6d26ada2a0b013b95bef7105e35399763ad95e24b84e721 = $this->env->getExtension("native_profiler");
        $__internal_5dfeda661e761b65c6d26ada2a0b013b95bef7105e35399763ad95e24b84e721->enter($__internal_5dfeda661e761b65c6d26ada2a0b013b95bef7105e35399763ad95e24b84e721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5dfeda661e761b65c6d26ada2a0b013b95bef7105e35399763ad95e24b84e721->leave($__internal_5dfeda661e761b65c6d26ada2a0b013b95bef7105e35399763ad95e24b84e721_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a978871a4815998bd7111d17825e21c80fb072bea9951c763b52d90525bee67 = $this->env->getExtension("native_profiler");
        $__internal_0a978871a4815998bd7111d17825e21c80fb072bea9951c763b52d90525bee67->enter($__internal_0a978871a4815998bd7111d17825e21c80fb072bea9951c763b52d90525bee67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a978871a4815998bd7111d17825e21c80fb072bea9951c763b52d90525bee67->leave($__internal_0a978871a4815998bd7111d17825e21c80fb072bea9951c763b52d90525bee67_prof);

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
