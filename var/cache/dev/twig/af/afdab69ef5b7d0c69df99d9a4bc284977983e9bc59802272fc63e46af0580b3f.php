<?php

/* @LGPUser/Indisponibilite/add.html.twig */
class __TwigTemplate_2ee49e30452d35eebd11255cafd08c488f29838bb6b1fde8462571fefe1928ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 1);
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
        $__internal_3538c662061907b39f767eb5d0b8e84e4df7fc2b0a2e1d878516a280ebccfb0f = $this->env->getExtension("native_profiler");
        $__internal_3538c662061907b39f767eb5d0b8e84e4df7fc2b0a2e1d878516a280ebccfb0f->enter($__internal_3538c662061907b39f767eb5d0b8e84e4df7fc2b0a2e1d878516a280ebccfb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3538c662061907b39f767eb5d0b8e84e4df7fc2b0a2e1d878516a280ebccfb0f->leave($__internal_3538c662061907b39f767eb5d0b8e84e4df7fc2b0a2e1d878516a280ebccfb0f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93819bd35451a148d65b04d176e8c830d8dc33fe5239844e33e1c4bf4a95ea9b = $this->env->getExtension("native_profiler");
        $__internal_93819bd35451a148d65b04d176e8c830d8dc33fe5239844e33e1c4bf4a95ea9b->enter($__internal_93819bd35451a148d65b04d176e8c830d8dc33fe5239844e33e1c4bf4a95ea9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_93819bd35451a148d65b04d176e8c830d8dc33fe5239844e33e1c4bf4a95ea9b->leave($__internal_93819bd35451a148d65b04d176e8c830d8dc33fe5239844e33e1c4bf4a95ea9b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b520da3df10ad0c2d0f4eefd60d2f94f46dd417cdac6ca5210f23c05e1c2f258 = $this->env->getExtension("native_profiler");
        $__internal_b520da3df10ad0c2d0f4eefd60d2f94f46dd417cdac6ca5210f23c05e1c2f258->enter($__internal_b520da3df10ad0c2d0f4eefd60d2f94f46dd417cdac6ca5210f23c05e1c2f258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_b520da3df10ad0c2d0f4eefd60d2f94f46dd417cdac6ca5210f23c05e1c2f258->leave($__internal_b520da3df10ad0c2d0f4eefd60d2f94f46dd417cdac6ca5210f23c05e1c2f258_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Indisponibilite/add.html.twig";
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
/*   Ajout d'une indisponibilité - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Ajout d'une indiponibilité</h1>*/
/*   */
/*   {% include 'LGPUserBundle:Indisponibilite:formulaire.html.twig' %}*/
/*   */
/* {% endblock %}*/
