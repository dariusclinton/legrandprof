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
        $__internal_5086598d7e06a80d0c77d14bce117ea210c20019394963c552bf5504a40ec721 = $this->env->getExtension("native_profiler");
        $__internal_5086598d7e06a80d0c77d14bce117ea210c20019394963c552bf5504a40ec721->enter($__internal_5086598d7e06a80d0c77d14bce117ea210c20019394963c552bf5504a40ec721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5086598d7e06a80d0c77d14bce117ea210c20019394963c552bf5504a40ec721->leave($__internal_5086598d7e06a80d0c77d14bce117ea210c20019394963c552bf5504a40ec721_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5881876a9fcc0e463dc94040fc6632cccab282b3f14033aa2a7b07be306d06eb = $this->env->getExtension("native_profiler");
        $__internal_5881876a9fcc0e463dc94040fc6632cccab282b3f14033aa2a7b07be306d06eb->enter($__internal_5881876a9fcc0e463dc94040fc6632cccab282b3f14033aa2a7b07be306d06eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5881876a9fcc0e463dc94040fc6632cccab282b3f14033aa2a7b07be306d06eb->leave($__internal_5881876a9fcc0e463dc94040fc6632cccab282b3f14033aa2a7b07be306d06eb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_33f584826435a569596721adda5e03c85043b6ed72b60e0311668392601f89f4 = $this->env->getExtension("native_profiler");
        $__internal_33f584826435a569596721adda5e03c85043b6ed72b60e0311668392601f89f4->enter($__internal_33f584826435a569596721adda5e03c85043b6ed72b60e0311668392601f89f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_33f584826435a569596721adda5e03c85043b6ed72b60e0311668392601f89f4->leave($__internal_33f584826435a569596721adda5e03c85043b6ed72b60e0311668392601f89f4_prof);

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
