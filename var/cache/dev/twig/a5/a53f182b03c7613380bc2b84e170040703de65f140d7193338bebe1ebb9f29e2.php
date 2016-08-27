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
        $__internal_5d96e96be387842d2d5b23586490b5df18ff0dd5cc3a73950b8066944c72753f = $this->env->getExtension("native_profiler");
        $__internal_5d96e96be387842d2d5b23586490b5df18ff0dd5cc3a73950b8066944c72753f->enter($__internal_5d96e96be387842d2d5b23586490b5df18ff0dd5cc3a73950b8066944c72753f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d96e96be387842d2d5b23586490b5df18ff0dd5cc3a73950b8066944c72753f->leave($__internal_5d96e96be387842d2d5b23586490b5df18ff0dd5cc3a73950b8066944c72753f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_30f3c84b51de434aaa9939a077252ad1257cea3d9646079c50673e21f5a80cfb = $this->env->getExtension("native_profiler");
        $__internal_30f3c84b51de434aaa9939a077252ad1257cea3d9646079c50673e21f5a80cfb->enter($__internal_30f3c84b51de434aaa9939a077252ad1257cea3d9646079c50673e21f5a80cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_30f3c84b51de434aaa9939a077252ad1257cea3d9646079c50673e21f5a80cfb->leave($__internal_30f3c84b51de434aaa9939a077252ad1257cea3d9646079c50673e21f5a80cfb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc16adb7401bc1bd1a37228023ed0027afceac803f9fa07631cb33fa524839f5 = $this->env->getExtension("native_profiler");
        $__internal_bc16adb7401bc1bd1a37228023ed0027afceac803f9fa07631cb33fa524839f5->enter($__internal_bc16adb7401bc1bd1a37228023ed0027afceac803f9fa07631cb33fa524839f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_bc16adb7401bc1bd1a37228023ed0027afceac803f9fa07631cb33fa524839f5->leave($__internal_bc16adb7401bc1bd1a37228023ed0027afceac803f9fa07631cb33fa524839f5_prof);

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
