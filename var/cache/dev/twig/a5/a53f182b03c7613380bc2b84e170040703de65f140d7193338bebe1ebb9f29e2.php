<?php

/* @LGPUser/Indisponibilite/update.html.twig */
class __TwigTemplate_7ce6c3dc86e7088e4a1e265274824070f068606aa733c4391f554039345818aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 1);
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
        $__internal_be05b568a78525db56ee782aacef51899233cfa17fd9c10f30bbe6592bc7dc12 = $this->env->getExtension("native_profiler");
        $__internal_be05b568a78525db56ee782aacef51899233cfa17fd9c10f30bbe6592bc7dc12->enter($__internal_be05b568a78525db56ee782aacef51899233cfa17fd9c10f30bbe6592bc7dc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be05b568a78525db56ee782aacef51899233cfa17fd9c10f30bbe6592bc7dc12->leave($__internal_be05b568a78525db56ee782aacef51899233cfa17fd9c10f30bbe6592bc7dc12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9700d225f8eafc81e830db85871f63ae9a370bb631d822ada169ec4ddc5428ee = $this->env->getExtension("native_profiler");
        $__internal_9700d225f8eafc81e830db85871f63ae9a370bb631d822ada169ec4ddc5428ee->enter($__internal_9700d225f8eafc81e830db85871f63ae9a370bb631d822ada169ec4ddc5428ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9700d225f8eafc81e830db85871f63ae9a370bb631d822ada169ec4ddc5428ee->leave($__internal_9700d225f8eafc81e830db85871f63ae9a370bb631d822ada169ec4ddc5428ee_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf68502b90934633031820f2abb7b235422386f12b47306c180838597ec9f62f = $this->env->getExtension("native_profiler");
        $__internal_bf68502b90934633031820f2abb7b235422386f12b47306c180838597ec9f62f->enter($__internal_bf68502b90934633031820f2abb7b235422386f12b47306c180838597ec9f62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_bf68502b90934633031820f2abb7b235422386f12b47306c180838597ec9f62f->leave($__internal_bf68502b90934633031820f2abb7b235422386f12b47306c180838597ec9f62f_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Indisponibilite/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Mise à jour d'une indisponibilité - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Mise à d'une indiponibilité</h1>*/
/*   */
/*   {% include 'LGPUserBundle:Indisponibilite:formulaire.html.twig' %}*/
/*   */
/* {% endblock %}*/
