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
        $__internal_7837075c2f97ebdc4faa5df090399f7dea1e461088a0dd66ce0915a8e4005ae4 = $this->env->getExtension("native_profiler");
        $__internal_7837075c2f97ebdc4faa5df090399f7dea1e461088a0dd66ce0915a8e4005ae4->enter($__internal_7837075c2f97ebdc4faa5df090399f7dea1e461088a0dd66ce0915a8e4005ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7837075c2f97ebdc4faa5df090399f7dea1e461088a0dd66ce0915a8e4005ae4->leave($__internal_7837075c2f97ebdc4faa5df090399f7dea1e461088a0dd66ce0915a8e4005ae4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_542dccd4250edd98e9a1caec5d19d836b0c791a6d984353477316d13e03d5172 = $this->env->getExtension("native_profiler");
        $__internal_542dccd4250edd98e9a1caec5d19d836b0c791a6d984353477316d13e03d5172->enter($__internal_542dccd4250edd98e9a1caec5d19d836b0c791a6d984353477316d13e03d5172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_542dccd4250edd98e9a1caec5d19d836b0c791a6d984353477316d13e03d5172->leave($__internal_542dccd4250edd98e9a1caec5d19d836b0c791a6d984353477316d13e03d5172_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_82ea536943a0e3795724b6ecda40200dd634928f71ddfa617ff60ab109d70bc8 = $this->env->getExtension("native_profiler");
        $__internal_82ea536943a0e3795724b6ecda40200dd634928f71ddfa617ff60ab109d70bc8->enter($__internal_82ea536943a0e3795724b6ecda40200dd634928f71ddfa617ff60ab109d70bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_82ea536943a0e3795724b6ecda40200dd634928f71ddfa617ff60ab109d70bc8->leave($__internal_82ea536943a0e3795724b6ecda40200dd634928f71ddfa617ff60ab109d70bc8_prof);

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
