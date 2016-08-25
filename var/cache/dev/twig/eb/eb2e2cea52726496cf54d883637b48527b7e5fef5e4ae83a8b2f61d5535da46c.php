<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_9cf1eec45bdcdd6af6bed53f212d881d459dd3825f8a8b904f0409e31c1c0e56 extends Twig_Template
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
        $__internal_e41b5b1edc4926212dc39315aa068ccb165162b5ded945a2b32b0dbe137fe409 = $this->env->getExtension("native_profiler");
        $__internal_e41b5b1edc4926212dc39315aa068ccb165162b5ded945a2b32b0dbe137fe409->enter($__internal_e41b5b1edc4926212dc39315aa068ccb165162b5ded945a2b32b0dbe137fe409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e41b5b1edc4926212dc39315aa068ccb165162b5ded945a2b32b0dbe137fe409->leave($__internal_e41b5b1edc4926212dc39315aa068ccb165162b5ded945a2b32b0dbe137fe409_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d85a1d92ec84a19808c99d5c7bf19d0ccefd35b8dd1cc67af39971dab48e282 = $this->env->getExtension("native_profiler");
        $__internal_3d85a1d92ec84a19808c99d5c7bf19d0ccefd35b8dd1cc67af39971dab48e282->enter($__internal_3d85a1d92ec84a19808c99d5c7bf19d0ccefd35b8dd1cc67af39971dab48e282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3d85a1d92ec84a19808c99d5c7bf19d0ccefd35b8dd1cc67af39971dab48e282->leave($__internal_3d85a1d92ec84a19808c99d5c7bf19d0ccefd35b8dd1cc67af39971dab48e282_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e94eecc94d79d7e26cf0b4480e0d93d78ebbc5b79f42e811dafa46e55011733e = $this->env->getExtension("native_profiler");
        $__internal_e94eecc94d79d7e26cf0b4480e0d93d78ebbc5b79f42e811dafa46e55011733e->enter($__internal_e94eecc94d79d7e26cf0b4480e0d93d78ebbc5b79f42e811dafa46e55011733e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_e94eecc94d79d7e26cf0b4480e0d93d78ebbc5b79f42e811dafa46e55011733e->leave($__internal_e94eecc94d79d7e26cf0b4480e0d93d78ebbc5b79f42e811dafa46e55011733e_prof);

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
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajout d'avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Ajout d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
