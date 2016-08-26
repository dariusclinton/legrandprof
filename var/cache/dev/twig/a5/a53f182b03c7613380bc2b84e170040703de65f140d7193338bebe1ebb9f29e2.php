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
        $__internal_e4e8a47a5fb847fb350ba728a5407e269c1ca4d7fc28e8ac2ecb2997c287c37f = $this->env->getExtension("native_profiler");
        $__internal_e4e8a47a5fb847fb350ba728a5407e269c1ca4d7fc28e8ac2ecb2997c287c37f->enter($__internal_e4e8a47a5fb847fb350ba728a5407e269c1ca4d7fc28e8ac2ecb2997c287c37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e8a47a5fb847fb350ba728a5407e269c1ca4d7fc28e8ac2ecb2997c287c37f->leave($__internal_e4e8a47a5fb847fb350ba728a5407e269c1ca4d7fc28e8ac2ecb2997c287c37f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_30548c77910a50d9552ca0e0434ee375917b75b6ddb7863d0b52678e3eb5cb20 = $this->env->getExtension("native_profiler");
        $__internal_30548c77910a50d9552ca0e0434ee375917b75b6ddb7863d0b52678e3eb5cb20->enter($__internal_30548c77910a50d9552ca0e0434ee375917b75b6ddb7863d0b52678e3eb5cb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_30548c77910a50d9552ca0e0434ee375917b75b6ddb7863d0b52678e3eb5cb20->leave($__internal_30548c77910a50d9552ca0e0434ee375917b75b6ddb7863d0b52678e3eb5cb20_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_44881a256c782a9b46c4945cfe21f7be11e047cb06c8cf5f222873aa564782b5 = $this->env->getExtension("native_profiler");
        $__internal_44881a256c782a9b46c4945cfe21f7be11e047cb06c8cf5f222873aa564782b5->enter($__internal_44881a256c782a9b46c4945cfe21f7be11e047cb06c8cf5f222873aa564782b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_44881a256c782a9b46c4945cfe21f7be11e047cb06c8cf5f222873aa564782b5->leave($__internal_44881a256c782a9b46c4945cfe21f7be11e047cb06c8cf5f222873aa564782b5_prof);

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
