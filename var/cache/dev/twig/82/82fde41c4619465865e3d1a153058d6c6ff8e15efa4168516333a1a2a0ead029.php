<?php

/* LGPUserBundle:Avis:update.html.twig */
class __TwigTemplate_05f97206c866e841e82ab59108611b22ba2733585480458282fb6f7f5800801e extends Twig_Template
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
        $__internal_cea43fbd5f8bb2b00c2177b9fe7f52facb6dd7feb23f92c871a6ae780609d08d = $this->env->getExtension("native_profiler");
        $__internal_cea43fbd5f8bb2b00c2177b9fe7f52facb6dd7feb23f92c871a6ae780609d08d->enter($__internal_cea43fbd5f8bb2b00c2177b9fe7f52facb6dd7feb23f92c871a6ae780609d08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cea43fbd5f8bb2b00c2177b9fe7f52facb6dd7feb23f92c871a6ae780609d08d->leave($__internal_cea43fbd5f8bb2b00c2177b9fe7f52facb6dd7feb23f92c871a6ae780609d08d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21007d65eea35fd14c44e51baa2bb6b349cc7d381cfa28af69e583dcb7a0e491 = $this->env->getExtension("native_profiler");
        $__internal_21007d65eea35fd14c44e51baa2bb6b349cc7d381cfa28af69e583dcb7a0e491->enter($__internal_21007d65eea35fd14c44e51baa2bb6b349cc7d381cfa28af69e583dcb7a0e491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_21007d65eea35fd14c44e51baa2bb6b349cc7d381cfa28af69e583dcb7a0e491->leave($__internal_21007d65eea35fd14c44e51baa2bb6b349cc7d381cfa28af69e583dcb7a0e491_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d176e04f12f100d7035faff9c0b844f4fd41b30a02df5bb6c0aceb2ee3eb322 = $this->env->getExtension("native_profiler");
        $__internal_9d176e04f12f100d7035faff9c0b844f4fd41b30a02df5bb6c0aceb2ee3eb322->enter($__internal_9d176e04f12f100d7035faff9c0b844f4fd41b30a02df5bb6c0aceb2ee3eb322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_9d176e04f12f100d7035faff9c0b844f4fd41b30a02df5bb6c0aceb2ee3eb322->leave($__internal_9d176e04f12f100d7035faff9c0b844f4fd41b30a02df5bb6c0aceb2ee3eb322_prof);

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
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modification d'un avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Modification d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
