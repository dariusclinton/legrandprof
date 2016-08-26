<?php

/* @LGPUser/Avis/update.html.twig */
class __TwigTemplate_955b54a18d8a4ef0ae1b19e13e7af0dde5d84259786d02f20247146380ab4be3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Avis/update.html.twig", 1);
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
        $__internal_02e5bf5251bef8ee3c320e1b3426cca6b4e3615f6185694bd8b248aa19d1948d = $this->env->getExtension("native_profiler");
        $__internal_02e5bf5251bef8ee3c320e1b3426cca6b4e3615f6185694bd8b248aa19d1948d->enter($__internal_02e5bf5251bef8ee3c320e1b3426cca6b4e3615f6185694bd8b248aa19d1948d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02e5bf5251bef8ee3c320e1b3426cca6b4e3615f6185694bd8b248aa19d1948d->leave($__internal_02e5bf5251bef8ee3c320e1b3426cca6b4e3615f6185694bd8b248aa19d1948d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1399c9978d61feb8278a2fcf292e2a03adc47f0db72596c85239ac631896f782 = $this->env->getExtension("native_profiler");
        $__internal_1399c9978d61feb8278a2fcf292e2a03adc47f0db72596c85239ac631896f782->enter($__internal_1399c9978d61feb8278a2fcf292e2a03adc47f0db72596c85239ac631896f782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1399c9978d61feb8278a2fcf292e2a03adc47f0db72596c85239ac631896f782->leave($__internal_1399c9978d61feb8278a2fcf292e2a03adc47f0db72596c85239ac631896f782_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a478e8977f82e00ce71d6ed5427071f95f7a234930c2bcf8efc4b196370b44e = $this->env->getExtension("native_profiler");
        $__internal_0a478e8977f82e00ce71d6ed5427071f95f7a234930c2bcf8efc4b196370b44e->enter($__internal_0a478e8977f82e00ce71d6ed5427071f95f7a234930c2bcf8efc4b196370b44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_0a478e8977f82e00ce71d6ed5427071f95f7a234930c2bcf8efc4b196370b44e->leave($__internal_0a478e8977f82e00ce71d6ed5427071f95f7a234930c2bcf8efc4b196370b44e_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Avis/update.html.twig";
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
/*   Modification d'un avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Modification d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
