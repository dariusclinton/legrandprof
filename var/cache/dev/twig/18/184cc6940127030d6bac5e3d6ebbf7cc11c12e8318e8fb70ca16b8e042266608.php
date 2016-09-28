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
        $__internal_8d40141c91f91bb78e7e1a55c17a2188873397432a666f56aa9d49babb3ec9a0 = $this->env->getExtension("native_profiler");
        $__internal_8d40141c91f91bb78e7e1a55c17a2188873397432a666f56aa9d49babb3ec9a0->enter($__internal_8d40141c91f91bb78e7e1a55c17a2188873397432a666f56aa9d49babb3ec9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d40141c91f91bb78e7e1a55c17a2188873397432a666f56aa9d49babb3ec9a0->leave($__internal_8d40141c91f91bb78e7e1a55c17a2188873397432a666f56aa9d49babb3ec9a0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57e62adfaf6e3a82f6c2efa839a4ff14826ac5594437b75b04d7734ba61b80c6 = $this->env->getExtension("native_profiler");
        $__internal_57e62adfaf6e3a82f6c2efa839a4ff14826ac5594437b75b04d7734ba61b80c6->enter($__internal_57e62adfaf6e3a82f6c2efa839a4ff14826ac5594437b75b04d7734ba61b80c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_57e62adfaf6e3a82f6c2efa839a4ff14826ac5594437b75b04d7734ba61b80c6->leave($__internal_57e62adfaf6e3a82f6c2efa839a4ff14826ac5594437b75b04d7734ba61b80c6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_150bbd58f060f400db9346a9566c4556ae466c3f78bd4eda2bb7876a6f3f51ea = $this->env->getExtension("native_profiler");
        $__internal_150bbd58f060f400db9346a9566c4556ae466c3f78bd4eda2bb7876a6f3f51ea->enter($__internal_150bbd58f060f400db9346a9566c4556ae466c3f78bd4eda2bb7876a6f3f51ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_150bbd58f060f400db9346a9566c4556ae466c3f78bd4eda2bb7876a6f3f51ea->leave($__internal_150bbd58f060f400db9346a9566c4556ae466c3f78bd4eda2bb7876a6f3f51ea_prof);

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
