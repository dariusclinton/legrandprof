<?php

/* LGPUserBundle:NouvelleCategorieCours:update.html.twig */
class __TwigTemplate_fed20faa3451eb915253552d69d5c867ab27407b6a219e01b2ae6fdf96cd2082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 1);
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
        $__internal_e582c70bc422c8c47083ef4ad61e7cb69ce6d1ea6a01095d079d29d9a3da0c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e582c70bc422c8c47083ef4ad61e7cb69ce6d1ea6a01095d079d29d9a3da0c88->enter($__internal_e582c70bc422c8c47083ef4ad61e7cb69ce6d1ea6a01095d079d29d9a3da0c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e582c70bc422c8c47083ef4ad61e7cb69ce6d1ea6a01095d079d29d9a3da0c88->leave($__internal_e582c70bc422c8c47083ef4ad61e7cb69ce6d1ea6a01095d079d29d9a3da0c88_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c962535aef9523af2c9dc66757d7e44c0d4bafd495a74f16929fb7c706ff05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c962535aef9523af2c9dc66757d7e44c0d4bafd495a74f16929fb7c706ff05b->enter($__internal_1c962535aef9523af2c9dc66757d7e44c0d4bafd495a74f16929fb7c706ff05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1c962535aef9523af2c9dc66757d7e44c0d4bafd495a74f16929fb7c706ff05b->leave($__internal_1c962535aef9523af2c9dc66757d7e44c0d4bafd495a74f16929fb7c706ff05b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad57087d9c3742c5f0d570ef0ecf130c111a16db4582338e49cfe1912792b7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad57087d9c3742c5f0d570ef0ecf130c111a16db4582338e49cfe1912792b7cf->enter($__internal_ad57087d9c3742c5f0d570ef0ecf130c111a16db4582338e49cfe1912792b7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_ad57087d9c3742c5f0d570ef0ecf130c111a16db4582338e49cfe1912792b7cf->leave($__internal_ad57087d9c3742c5f0d570ef0ecf130c111a16db4582338e49cfe1912792b7cf_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:NouvelleCategorieCours:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mise à jour d'une nouvelle catégorie de cours - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  {% include 'LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
