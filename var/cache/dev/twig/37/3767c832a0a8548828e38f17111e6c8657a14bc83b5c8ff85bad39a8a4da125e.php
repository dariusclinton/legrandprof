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
        $__internal_59e03e138f11174a0232af1e5775dd1bdfb58156a041a8c10256ef1ccc7df8e5 = $this->env->getExtension("native_profiler");
        $__internal_59e03e138f11174a0232af1e5775dd1bdfb58156a041a8c10256ef1ccc7df8e5->enter($__internal_59e03e138f11174a0232af1e5775dd1bdfb58156a041a8c10256ef1ccc7df8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59e03e138f11174a0232af1e5775dd1bdfb58156a041a8c10256ef1ccc7df8e5->leave($__internal_59e03e138f11174a0232af1e5775dd1bdfb58156a041a8c10256ef1ccc7df8e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d852f42798d777d0b16268f7d4648e83c64c8fff2febcdd791a853015cf1b7fa = $this->env->getExtension("native_profiler");
        $__internal_d852f42798d777d0b16268f7d4648e83c64c8fff2febcdd791a853015cf1b7fa->enter($__internal_d852f42798d777d0b16268f7d4648e83c64c8fff2febcdd791a853015cf1b7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'une séance de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d852f42798d777d0b16268f7d4648e83c64c8fff2febcdd791a853015cf1b7fa->leave($__internal_d852f42798d777d0b16268f7d4648e83c64c8fff2febcdd791a853015cf1b7fa_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_25f476fa0b0c52628fbe79325da38f0ea5295eb4e4ccdb4368c2e8394dd74302 = $this->env->getExtension("native_profiler");
        $__internal_25f476fa0b0c52628fbe79325da38f0ea5295eb4e4ccdb4368c2e8394dd74302->enter($__internal_25f476fa0b0c52628fbe79325da38f0ea5295eb4e4ccdb4368c2e8394dd74302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'une séances de cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:SeanceDeCours:formulaire.html.twig", "LGPUserBundle:SeanceDeCours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_25f476fa0b0c52628fbe79325da38f0ea5295eb4e4ccdb4368c2e8394dd74302->leave($__internal_25f476fa0b0c52628fbe79325da38f0ea5295eb4e4ccdb4368c2e8394dd74302_prof);

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
