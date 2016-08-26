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
        $__internal_103b33d13821cf225fc34513adb6465e2c6ce7dbf03037f440a6d70779ebd4b1 = $this->env->getExtension("native_profiler");
        $__internal_103b33d13821cf225fc34513adb6465e2c6ce7dbf03037f440a6d70779ebd4b1->enter($__internal_103b33d13821cf225fc34513adb6465e2c6ce7dbf03037f440a6d70779ebd4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_103b33d13821cf225fc34513adb6465e2c6ce7dbf03037f440a6d70779ebd4b1->leave($__internal_103b33d13821cf225fc34513adb6465e2c6ce7dbf03037f440a6d70779ebd4b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfc9a06f46fc98b208e6c62561a3c3bb27e082b916899f70077c1fe211e883fc = $this->env->getExtension("native_profiler");
        $__internal_bfc9a06f46fc98b208e6c62561a3c3bb27e082b916899f70077c1fe211e883fc->enter($__internal_bfc9a06f46fc98b208e6c62561a3c3bb27e082b916899f70077c1fe211e883fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bfc9a06f46fc98b208e6c62561a3c3bb27e082b916899f70077c1fe211e883fc->leave($__internal_bfc9a06f46fc98b208e6c62561a3c3bb27e082b916899f70077c1fe211e883fc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6301822d2b7bf7c45e98ad0d70728f1b0ac2c35177e88b6682fb6af481206b1 = $this->env->getExtension("native_profiler");
        $__internal_b6301822d2b7bf7c45e98ad0d70728f1b0ac2c35177e88b6682fb6af481206b1->enter($__internal_b6301822d2b7bf7c45e98ad0d70728f1b0ac2c35177e88b6682fb6af481206b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_b6301822d2b7bf7c45e98ad0d70728f1b0ac2c35177e88b6682fb6af481206b1->leave($__internal_b6301822d2b7bf7c45e98ad0d70728f1b0ac2c35177e88b6682fb6af481206b1_prof);

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
