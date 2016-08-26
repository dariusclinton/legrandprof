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
        $__internal_cb6d5767d9d7c5527f543c5b51116829b860876f77fca601986b42e6be03795f = $this->env->getExtension("native_profiler");
        $__internal_cb6d5767d9d7c5527f543c5b51116829b860876f77fca601986b42e6be03795f->enter($__internal_cb6d5767d9d7c5527f543c5b51116829b860876f77fca601986b42e6be03795f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb6d5767d9d7c5527f543c5b51116829b860876f77fca601986b42e6be03795f->leave($__internal_cb6d5767d9d7c5527f543c5b51116829b860876f77fca601986b42e6be03795f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab52d7d9262e92120baa3c7eb736ae9b4659fb28d3c4f9f4098e239448e55daa = $this->env->getExtension("native_profiler");
        $__internal_ab52d7d9262e92120baa3c7eb736ae9b4659fb28d3c4f9f4098e239448e55daa->enter($__internal_ab52d7d9262e92120baa3c7eb736ae9b4659fb28d3c4f9f4098e239448e55daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ab52d7d9262e92120baa3c7eb736ae9b4659fb28d3c4f9f4098e239448e55daa->leave($__internal_ab52d7d9262e92120baa3c7eb736ae9b4659fb28d3c4f9f4098e239448e55daa_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cfcaa77733241a54726578cae848de10f38ae63bdd9d949cd3d2b2ed05fb434 = $this->env->getExtension("native_profiler");
        $__internal_4cfcaa77733241a54726578cae848de10f38ae63bdd9d949cd3d2b2ed05fb434->enter($__internal_4cfcaa77733241a54726578cae848de10f38ae63bdd9d949cd3d2b2ed05fb434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_4cfcaa77733241a54726578cae848de10f38ae63bdd9d949cd3d2b2ed05fb434->leave($__internal_4cfcaa77733241a54726578cae848de10f38ae63bdd9d949cd3d2b2ed05fb434_prof);

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
