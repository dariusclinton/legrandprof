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
        $__internal_46215595b54b09b3664371decfe974298cee5897ebca155aae126131eb4b40b6 = $this->env->getExtension("native_profiler");
        $__internal_46215595b54b09b3664371decfe974298cee5897ebca155aae126131eb4b40b6->enter($__internal_46215595b54b09b3664371decfe974298cee5897ebca155aae126131eb4b40b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46215595b54b09b3664371decfe974298cee5897ebca155aae126131eb4b40b6->leave($__internal_46215595b54b09b3664371decfe974298cee5897ebca155aae126131eb4b40b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6af11036ec1dc2033c634164e704b0dd3e04a731a3f9e575f48c7b127b77a6e = $this->env->getExtension("native_profiler");
        $__internal_f6af11036ec1dc2033c634164e704b0dd3e04a731a3f9e575f48c7b127b77a6e->enter($__internal_f6af11036ec1dc2033c634164e704b0dd3e04a731a3f9e575f48c7b127b77a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f6af11036ec1dc2033c634164e704b0dd3e04a731a3f9e575f48c7b127b77a6e->leave($__internal_f6af11036ec1dc2033c634164e704b0dd3e04a731a3f9e575f48c7b127b77a6e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b73f9ba542ea274b6b223125ba85d17a65a478920f1deac0fe846aa82d60f27 = $this->env->getExtension("native_profiler");
        $__internal_1b73f9ba542ea274b6b223125ba85d17a65a478920f1deac0fe846aa82d60f27->enter($__internal_1b73f9ba542ea274b6b223125ba85d17a65a478920f1deac0fe846aa82d60f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_1b73f9ba542ea274b6b223125ba85d17a65a478920f1deac0fe846aa82d60f27->leave($__internal_1b73f9ba542ea274b6b223125ba85d17a65a478920f1deac0fe846aa82d60f27_prof);

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
