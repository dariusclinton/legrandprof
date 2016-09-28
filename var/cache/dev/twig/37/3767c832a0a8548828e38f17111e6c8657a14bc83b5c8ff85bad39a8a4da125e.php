<?php

/* LGPUserBundle:SeanceDeCours:update.html.twig */
class __TwigTemplate_f5017a6e72a3b9ebaee211c13d5fb36d550c459ab3df4500ed2a6c72f2cdebc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:SeanceDeCours:update.html.twig", 1);
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
        $__internal_345d75a04f62ac3fee5a37410fa2e6dba51c03300a6c55daf7695f0ebbc34e72 = $this->env->getExtension("native_profiler");
        $__internal_345d75a04f62ac3fee5a37410fa2e6dba51c03300a6c55daf7695f0ebbc34e72->enter($__internal_345d75a04f62ac3fee5a37410fa2e6dba51c03300a6c55daf7695f0ebbc34e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_345d75a04f62ac3fee5a37410fa2e6dba51c03300a6c55daf7695f0ebbc34e72->leave($__internal_345d75a04f62ac3fee5a37410fa2e6dba51c03300a6c55daf7695f0ebbc34e72_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca028b226ef09ed1d4a30e6c5265e4e9ff49ebf4d850c154710c154e8d9bb2f7 = $this->env->getExtension("native_profiler");
        $__internal_ca028b226ef09ed1d4a30e6c5265e4e9ff49ebf4d850c154710c154e8d9bb2f7->enter($__internal_ca028b226ef09ed1d4a30e6c5265e4e9ff49ebf4d850c154710c154e8d9bb2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'une séance de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ca028b226ef09ed1d4a30e6c5265e4e9ff49ebf4d850c154710c154e8d9bb2f7->leave($__internal_ca028b226ef09ed1d4a30e6c5265e4e9ff49ebf4d850c154710c154e8d9bb2f7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff363dd4e552bd6b43b0df072b88e4559a1296a737b31dc0df71aa97da93e04c = $this->env->getExtension("native_profiler");
        $__internal_ff363dd4e552bd6b43b0df072b88e4559a1296a737b31dc0df71aa97da93e04c->enter($__internal_ff363dd4e552bd6b43b0df072b88e4559a1296a737b31dc0df71aa97da93e04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'une séances de cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:SeanceDeCours:formulaire.html.twig", "LGPUserBundle:SeanceDeCours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_ff363dd4e552bd6b43b0df072b88e4559a1296a737b31dc0df71aa97da93e04c->leave($__internal_ff363dd4e552bd6b43b0df072b88e4559a1296a737b31dc0df71aa97da93e04c_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:SeanceDeCours:update.html.twig";
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
  Modification d'une séance de cours - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Modification d'une séances de cours</h1>
  
  {% include 'LGPUserBundle:SeanceDeCours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
