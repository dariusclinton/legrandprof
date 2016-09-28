<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_4d7c8a9861e340f0ff8fba9c9a7ab62f96f8a7b9ffbba21677bf1578b21ff741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:add.html.twig", 1);
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
        $__internal_b8ee89861c756fcff5ed28ca04f641e9576304c5df57f965ab915e82f58a4472 = $this->env->getExtension("native_profiler");
        $__internal_b8ee89861c756fcff5ed28ca04f641e9576304c5df57f965ab915e82f58a4472->enter($__internal_b8ee89861c756fcff5ed28ca04f641e9576304c5df57f965ab915e82f58a4472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8ee89861c756fcff5ed28ca04f641e9576304c5df57f965ab915e82f58a4472->leave($__internal_b8ee89861c756fcff5ed28ca04f641e9576304c5df57f965ab915e82f58a4472_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1ce6d0103fcfae745da04b9715eb340dc47288da992d6f5e8e6c17727cc76e0 = $this->env->getExtension("native_profiler");
        $__internal_a1ce6d0103fcfae745da04b9715eb340dc47288da992d6f5e8e6c17727cc76e0->enter($__internal_a1ce6d0103fcfae745da04b9715eb340dc47288da992d6f5e8e6c17727cc76e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a1ce6d0103fcfae745da04b9715eb340dc47288da992d6f5e8e6c17727cc76e0->leave($__internal_a1ce6d0103fcfae745da04b9715eb340dc47288da992d6f5e8e6c17727cc76e0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac7bb14b34c4f694ed8a8b5be0a68cdd59ca6149d6908fd52d10f98b9236f8c3 = $this->env->getExtension("native_profiler");
        $__internal_ac7bb14b34c4f694ed8a8b5be0a68cdd59ca6149d6908fd52d10f98b9236f8c3->enter($__internal_ac7bb14b34c4f694ed8a8b5be0a68cdd59ca6149d6908fd52d10f98b9236f8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_ac7bb14b34c4f694ed8a8b5be0a68cdd59ca6149d6908fd52d10f98b9236f8c3->leave($__internal_ac7bb14b34c4f694ed8a8b5be0a68cdd59ca6149d6908fd52d10f98b9236f8c3_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:add.html.twig";
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
  Ajout d'avis - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Ajout d'un avis</h1>

  {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}
  
{% endblock %}";
    }
}
