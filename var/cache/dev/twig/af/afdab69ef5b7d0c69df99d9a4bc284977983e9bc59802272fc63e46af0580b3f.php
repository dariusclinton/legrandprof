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
        $__internal_37bc29e1164400c4b278719230ef36344678d1c87bb0cbf989ca3fc4b1bc0421 = $this->env->getExtension("native_profiler");
        $__internal_37bc29e1164400c4b278719230ef36344678d1c87bb0cbf989ca3fc4b1bc0421->enter($__internal_37bc29e1164400c4b278719230ef36344678d1c87bb0cbf989ca3fc4b1bc0421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37bc29e1164400c4b278719230ef36344678d1c87bb0cbf989ca3fc4b1bc0421->leave($__internal_37bc29e1164400c4b278719230ef36344678d1c87bb0cbf989ca3fc4b1bc0421_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_312c1a0a1f70ea1a5fb61413ceb73da7086cb3d025cf38603d02e89ab0350fa5 = $this->env->getExtension("native_profiler");
        $__internal_312c1a0a1f70ea1a5fb61413ceb73da7086cb3d025cf38603d02e89ab0350fa5->enter($__internal_312c1a0a1f70ea1a5fb61413ceb73da7086cb3d025cf38603d02e89ab0350fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_312c1a0a1f70ea1a5fb61413ceb73da7086cb3d025cf38603d02e89ab0350fa5->leave($__internal_312c1a0a1f70ea1a5fb61413ceb73da7086cb3d025cf38603d02e89ab0350fa5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_649f5c676347f25c041309e323597711604cdeb4cb3976cd6d498f919719e2eb = $this->env->getExtension("native_profiler");
        $__internal_649f5c676347f25c041309e323597711604cdeb4cb3976cd6d498f919719e2eb->enter($__internal_649f5c676347f25c041309e323597711604cdeb4cb3976cd6d498f919719e2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_649f5c676347f25c041309e323597711604cdeb4cb3976cd6d498f919719e2eb->leave($__internal_649f5c676347f25c041309e323597711604cdeb4cb3976cd6d498f919719e2eb_prof);

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
