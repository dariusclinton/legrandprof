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
        $__internal_9b562133a54e8b1cfc86e293d7a6e2b66f27caab44faaa4c94e65466c4d4779d = $this->env->getExtension("native_profiler");
        $__internal_9b562133a54e8b1cfc86e293d7a6e2b66f27caab44faaa4c94e65466c4d4779d->enter($__internal_9b562133a54e8b1cfc86e293d7a6e2b66f27caab44faaa4c94e65466c4d4779d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b562133a54e8b1cfc86e293d7a6e2b66f27caab44faaa4c94e65466c4d4779d->leave($__internal_9b562133a54e8b1cfc86e293d7a6e2b66f27caab44faaa4c94e65466c4d4779d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24552d0936ff808e932cf9a7e30550e70f4986822720aca9163ce69516b74537 = $this->env->getExtension("native_profiler");
        $__internal_24552d0936ff808e932cf9a7e30550e70f4986822720aca9163ce69516b74537->enter($__internal_24552d0936ff808e932cf9a7e30550e70f4986822720aca9163ce69516b74537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_24552d0936ff808e932cf9a7e30550e70f4986822720aca9163ce69516b74537->leave($__internal_24552d0936ff808e932cf9a7e30550e70f4986822720aca9163ce69516b74537_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5220f7aa8f6afa4ea2eb7cf4a52526f94f68d8bb7939b66c703055f3b949e682 = $this->env->getExtension("native_profiler");
        $__internal_5220f7aa8f6afa4ea2eb7cf4a52526f94f68d8bb7939b66c703055f3b949e682->enter($__internal_5220f7aa8f6afa4ea2eb7cf4a52526f94f68d8bb7939b66c703055f3b949e682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_5220f7aa8f6afa4ea2eb7cf4a52526f94f68d8bb7939b66c703055f3b949e682->leave($__internal_5220f7aa8f6afa4ea2eb7cf4a52526f94f68d8bb7939b66c703055f3b949e682_prof);

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
