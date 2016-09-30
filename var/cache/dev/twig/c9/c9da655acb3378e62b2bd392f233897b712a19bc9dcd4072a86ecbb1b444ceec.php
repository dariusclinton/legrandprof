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
        $__internal_509ff451457dbcb3d6c8b7b056a847dbb8f334287ef67ad323dfc1aa7694aa10 = $this->env->getExtension("native_profiler");
        $__internal_509ff451457dbcb3d6c8b7b056a847dbb8f334287ef67ad323dfc1aa7694aa10->enter($__internal_509ff451457dbcb3d6c8b7b056a847dbb8f334287ef67ad323dfc1aa7694aa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_509ff451457dbcb3d6c8b7b056a847dbb8f334287ef67ad323dfc1aa7694aa10->leave($__internal_509ff451457dbcb3d6c8b7b056a847dbb8f334287ef67ad323dfc1aa7694aa10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1de15796d9bdc9bc4053b2c2adb171918d50c30eed4fce4ba9ffba60b301e86 = $this->env->getExtension("native_profiler");
        $__internal_b1de15796d9bdc9bc4053b2c2adb171918d50c30eed4fce4ba9ffba60b301e86->enter($__internal_b1de15796d9bdc9bc4053b2c2adb171918d50c30eed4fce4ba9ffba60b301e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b1de15796d9bdc9bc4053b2c2adb171918d50c30eed4fce4ba9ffba60b301e86->leave($__internal_b1de15796d9bdc9bc4053b2c2adb171918d50c30eed4fce4ba9ffba60b301e86_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca185b6d74cb35dd643af3528335bd9a7c6458148e4e8359a3660c747641d927 = $this->env->getExtension("native_profiler");
        $__internal_ca185b6d74cb35dd643af3528335bd9a7c6458148e4e8359a3660c747641d927->enter($__internal_ca185b6d74cb35dd643af3528335bd9a7c6458148e4e8359a3660c747641d927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_ca185b6d74cb35dd643af3528335bd9a7c6458148e4e8359a3660c747641d927->leave($__internal_ca185b6d74cb35dd643af3528335bd9a7c6458148e4e8359a3660c747641d927_prof);

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
