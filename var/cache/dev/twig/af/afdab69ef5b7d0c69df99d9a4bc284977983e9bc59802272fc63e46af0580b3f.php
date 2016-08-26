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
        $__internal_4a495e0f10c4225f6069fed16dc7208d0dcb61f9ef2299259e433f80ea8ab31d = $this->env->getExtension("native_profiler");
        $__internal_4a495e0f10c4225f6069fed16dc7208d0dcb61f9ef2299259e433f80ea8ab31d->enter($__internal_4a495e0f10c4225f6069fed16dc7208d0dcb61f9ef2299259e433f80ea8ab31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a495e0f10c4225f6069fed16dc7208d0dcb61f9ef2299259e433f80ea8ab31d->leave($__internal_4a495e0f10c4225f6069fed16dc7208d0dcb61f9ef2299259e433f80ea8ab31d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c540a74255a91338e04110a3c4a1ca63ece5d97352aae4383fc0dc7b9d4d61e = $this->env->getExtension("native_profiler");
        $__internal_1c540a74255a91338e04110a3c4a1ca63ece5d97352aae4383fc0dc7b9d4d61e->enter($__internal_1c540a74255a91338e04110a3c4a1ca63ece5d97352aae4383fc0dc7b9d4d61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1c540a74255a91338e04110a3c4a1ca63ece5d97352aae4383fc0dc7b9d4d61e->leave($__internal_1c540a74255a91338e04110a3c4a1ca63ece5d97352aae4383fc0dc7b9d4d61e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e197d5a3d3dd60ab0f30138100e8d9b7bede1d80a9d42975681c5d8c710ed26 = $this->env->getExtension("native_profiler");
        $__internal_2e197d5a3d3dd60ab0f30138100e8d9b7bede1d80a9d42975681c5d8c710ed26->enter($__internal_2e197d5a3d3dd60ab0f30138100e8d9b7bede1d80a9d42975681c5d8c710ed26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_2e197d5a3d3dd60ab0f30138100e8d9b7bede1d80a9d42975681c5d8c710ed26->leave($__internal_2e197d5a3d3dd60ab0f30138100e8d9b7bede1d80a9d42975681c5d8c710ed26_prof);

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
