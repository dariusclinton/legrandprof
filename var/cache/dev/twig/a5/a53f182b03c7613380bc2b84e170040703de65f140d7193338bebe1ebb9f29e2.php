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
        $__internal_5fa4e7cdc19f68b01f538640f0ed1bdfc4e9d5fedfdadccd2c91bd1a3c4d293d = $this->env->getExtension("native_profiler");
        $__internal_5fa4e7cdc19f68b01f538640f0ed1bdfc4e9d5fedfdadccd2c91bd1a3c4d293d->enter($__internal_5fa4e7cdc19f68b01f538640f0ed1bdfc4e9d5fedfdadccd2c91bd1a3c4d293d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fa4e7cdc19f68b01f538640f0ed1bdfc4e9d5fedfdadccd2c91bd1a3c4d293d->leave($__internal_5fa4e7cdc19f68b01f538640f0ed1bdfc4e9d5fedfdadccd2c91bd1a3c4d293d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be0fb724d4e8eb3eadb1ed645184b065fc7c90cfb58fd9b167ccf2bb13cf6328 = $this->env->getExtension("native_profiler");
        $__internal_be0fb724d4e8eb3eadb1ed645184b065fc7c90cfb58fd9b167ccf2bb13cf6328->enter($__internal_be0fb724d4e8eb3eadb1ed645184b065fc7c90cfb58fd9b167ccf2bb13cf6328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_be0fb724d4e8eb3eadb1ed645184b065fc7c90cfb58fd9b167ccf2bb13cf6328->leave($__internal_be0fb724d4e8eb3eadb1ed645184b065fc7c90cfb58fd9b167ccf2bb13cf6328_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5e3f2a7418c07823b1958d89cbb11ba6b0d5f10fbdbfb16184893063f59695f = $this->env->getExtension("native_profiler");
        $__internal_f5e3f2a7418c07823b1958d89cbb11ba6b0d5f10fbdbfb16184893063f59695f->enter($__internal_f5e3f2a7418c07823b1958d89cbb11ba6b0d5f10fbdbfb16184893063f59695f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_f5e3f2a7418c07823b1958d89cbb11ba6b0d5f10fbdbfb16184893063f59695f->leave($__internal_f5e3f2a7418c07823b1958d89cbb11ba6b0d5f10fbdbfb16184893063f59695f_prof);

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
