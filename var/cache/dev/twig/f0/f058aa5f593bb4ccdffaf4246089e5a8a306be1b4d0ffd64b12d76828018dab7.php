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
        $__internal_8a03fb67e466ded7ca146f32e043361cd99af769b7b338901c56449877f4c1b2 = $this->env->getExtension("native_profiler");
        $__internal_8a03fb67e466ded7ca146f32e043361cd99af769b7b338901c56449877f4c1b2->enter($__internal_8a03fb67e466ded7ca146f32e043361cd99af769b7b338901c56449877f4c1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a03fb67e466ded7ca146f32e043361cd99af769b7b338901c56449877f4c1b2->leave($__internal_8a03fb67e466ded7ca146f32e043361cd99af769b7b338901c56449877f4c1b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1654cdcaf53abb60028790b586325bcbc83ff1fa389820e5a1bbb92316e7dc1a = $this->env->getExtension("native_profiler");
        $__internal_1654cdcaf53abb60028790b586325bcbc83ff1fa389820e5a1bbb92316e7dc1a->enter($__internal_1654cdcaf53abb60028790b586325bcbc83ff1fa389820e5a1bbb92316e7dc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1654cdcaf53abb60028790b586325bcbc83ff1fa389820e5a1bbb92316e7dc1a->leave($__internal_1654cdcaf53abb60028790b586325bcbc83ff1fa389820e5a1bbb92316e7dc1a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2cfdc72118f770029b71be25d40cca8f46973c408da8a9ea22de96723b164e9 = $this->env->getExtension("native_profiler");
        $__internal_b2cfdc72118f770029b71be25d40cca8f46973c408da8a9ea22de96723b164e9->enter($__internal_b2cfdc72118f770029b71be25d40cca8f46973c408da8a9ea22de96723b164e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b2cfdc72118f770029b71be25d40cca8f46973c408da8a9ea22de96723b164e9->leave($__internal_b2cfdc72118f770029b71be25d40cca8f46973c408da8a9ea22de96723b164e9_prof);

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
