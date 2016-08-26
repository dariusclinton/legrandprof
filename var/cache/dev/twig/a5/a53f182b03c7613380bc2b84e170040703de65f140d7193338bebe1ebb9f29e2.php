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
        $__internal_b72d71fe9add9e2e3351ca12fe757783e3de1ec5302b540ca79d4d17c9ef2225 = $this->env->getExtension("native_profiler");
        $__internal_b72d71fe9add9e2e3351ca12fe757783e3de1ec5302b540ca79d4d17c9ef2225->enter($__internal_b72d71fe9add9e2e3351ca12fe757783e3de1ec5302b540ca79d4d17c9ef2225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b72d71fe9add9e2e3351ca12fe757783e3de1ec5302b540ca79d4d17c9ef2225->leave($__internal_b72d71fe9add9e2e3351ca12fe757783e3de1ec5302b540ca79d4d17c9ef2225_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_663029df18d108fca9411c8f7996c377dd2139dc3504085dbc398c0c969a5b25 = $this->env->getExtension("native_profiler");
        $__internal_663029df18d108fca9411c8f7996c377dd2139dc3504085dbc398c0c969a5b25->enter($__internal_663029df18d108fca9411c8f7996c377dd2139dc3504085dbc398c0c969a5b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_663029df18d108fca9411c8f7996c377dd2139dc3504085dbc398c0c969a5b25->leave($__internal_663029df18d108fca9411c8f7996c377dd2139dc3504085dbc398c0c969a5b25_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_db8d1c0fc05736821dfdb3c369db98096d4ee9e6f3a8951eb4e0d6041b6701ca = $this->env->getExtension("native_profiler");
        $__internal_db8d1c0fc05736821dfdb3c369db98096d4ee9e6f3a8951eb4e0d6041b6701ca->enter($__internal_db8d1c0fc05736821dfdb3c369db98096d4ee9e6f3a8951eb4e0d6041b6701ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_db8d1c0fc05736821dfdb3c369db98096d4ee9e6f3a8951eb4e0d6041b6701ca->leave($__internal_db8d1c0fc05736821dfdb3c369db98096d4ee9e6f3a8951eb4e0d6041b6701ca_prof);

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
