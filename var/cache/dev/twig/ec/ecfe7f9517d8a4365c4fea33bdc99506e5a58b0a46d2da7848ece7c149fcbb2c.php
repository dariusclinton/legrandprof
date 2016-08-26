<?php

/* LGPUserBundle:Indisponibilite:add.html.twig */
class __TwigTemplate_a21ded62da709a6ea32e66b2d1c86df0ce3147bb95136aa897256c1945f7af4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 1);
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
        $__internal_3688561ab2f5e32786a865fa8da0029ec40430e50b4837b1dc0ac5316454f6e5 = $this->env->getExtension("native_profiler");
        $__internal_3688561ab2f5e32786a865fa8da0029ec40430e50b4837b1dc0ac5316454f6e5->enter($__internal_3688561ab2f5e32786a865fa8da0029ec40430e50b4837b1dc0ac5316454f6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3688561ab2f5e32786a865fa8da0029ec40430e50b4837b1dc0ac5316454f6e5->leave($__internal_3688561ab2f5e32786a865fa8da0029ec40430e50b4837b1dc0ac5316454f6e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab5cd0170fb24bfa11d375ef895d0296d4d2cf83f0803e81dfb9d866b732115b = $this->env->getExtension("native_profiler");
        $__internal_ab5cd0170fb24bfa11d375ef895d0296d4d2cf83f0803e81dfb9d866b732115b->enter($__internal_ab5cd0170fb24bfa11d375ef895d0296d4d2cf83f0803e81dfb9d866b732115b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ab5cd0170fb24bfa11d375ef895d0296d4d2cf83f0803e81dfb9d866b732115b->leave($__internal_ab5cd0170fb24bfa11d375ef895d0296d4d2cf83f0803e81dfb9d866b732115b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f88e5a995ac89973d8f6427f5b27128b99faf93201e096fdfdf9790345199e6 = $this->env->getExtension("native_profiler");
        $__internal_6f88e5a995ac89973d8f6427f5b27128b99faf93201e096fdfdf9790345199e6->enter($__internal_6f88e5a995ac89973d8f6427f5b27128b99faf93201e096fdfdf9790345199e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_6f88e5a995ac89973d8f6427f5b27128b99faf93201e096fdfdf9790345199e6->leave($__internal_6f88e5a995ac89973d8f6427f5b27128b99faf93201e096fdfdf9790345199e6_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:add.html.twig";
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
