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
        $__internal_3f00969cdc4c7e30ce46ff56190d800f7e39208c4be3af62ffeb9d666827f361 = $this->env->getExtension("native_profiler");
        $__internal_3f00969cdc4c7e30ce46ff56190d800f7e39208c4be3af62ffeb9d666827f361->enter($__internal_3f00969cdc4c7e30ce46ff56190d800f7e39208c4be3af62ffeb9d666827f361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f00969cdc4c7e30ce46ff56190d800f7e39208c4be3af62ffeb9d666827f361->leave($__internal_3f00969cdc4c7e30ce46ff56190d800f7e39208c4be3af62ffeb9d666827f361_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f1a0696d3bfe055dcebc134d94920d7b1cc2aea1e3aa48ae48966ddad38cdd6 = $this->env->getExtension("native_profiler");
        $__internal_7f1a0696d3bfe055dcebc134d94920d7b1cc2aea1e3aa48ae48966ddad38cdd6->enter($__internal_7f1a0696d3bfe055dcebc134d94920d7b1cc2aea1e3aa48ae48966ddad38cdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7f1a0696d3bfe055dcebc134d94920d7b1cc2aea1e3aa48ae48966ddad38cdd6->leave($__internal_7f1a0696d3bfe055dcebc134d94920d7b1cc2aea1e3aa48ae48966ddad38cdd6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_40e1dc793aef6b1b6ff534efb9c2d9d68cfd02b81f3207bc61887944eb4af56c = $this->env->getExtension("native_profiler");
        $__internal_40e1dc793aef6b1b6ff534efb9c2d9d68cfd02b81f3207bc61887944eb4af56c->enter($__internal_40e1dc793aef6b1b6ff534efb9c2d9d68cfd02b81f3207bc61887944eb4af56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_40e1dc793aef6b1b6ff534efb9c2d9d68cfd02b81f3207bc61887944eb4af56c->leave($__internal_40e1dc793aef6b1b6ff534efb9c2d9d68cfd02b81f3207bc61887944eb4af56c_prof);

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
