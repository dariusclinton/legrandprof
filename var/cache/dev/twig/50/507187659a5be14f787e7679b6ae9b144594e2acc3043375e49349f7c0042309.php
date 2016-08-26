<?php

/* @LGPUser/Avis/add.html.twig */
class __TwigTemplate_fd84e8fe955c49d0175413fe6f3a1a5e2d65d06ce8abcfb13436de4a03b25cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Avis/add.html.twig", 1);
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
        $__internal_cbf9d0c07177cf2549c8075ef954dfd736cf5e2633620c09afc70b54034ca41a = $this->env->getExtension("native_profiler");
        $__internal_cbf9d0c07177cf2549c8075ef954dfd736cf5e2633620c09afc70b54034ca41a->enter($__internal_cbf9d0c07177cf2549c8075ef954dfd736cf5e2633620c09afc70b54034ca41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf9d0c07177cf2549c8075ef954dfd736cf5e2633620c09afc70b54034ca41a->leave($__internal_cbf9d0c07177cf2549c8075ef954dfd736cf5e2633620c09afc70b54034ca41a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29ce44a7138880c5565daf3322ce1d28bf070da9e663153c62f10ce7318686cc = $this->env->getExtension("native_profiler");
        $__internal_29ce44a7138880c5565daf3322ce1d28bf070da9e663153c62f10ce7318686cc->enter($__internal_29ce44a7138880c5565daf3322ce1d28bf070da9e663153c62f10ce7318686cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_29ce44a7138880c5565daf3322ce1d28bf070da9e663153c62f10ce7318686cc->leave($__internal_29ce44a7138880c5565daf3322ce1d28bf070da9e663153c62f10ce7318686cc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7257b45ef5d54d88ec1d33b200f16f2366cf6057e00bc1ac24723f1eb6f93cb = $this->env->getExtension("native_profiler");
        $__internal_d7257b45ef5d54d88ec1d33b200f16f2366cf6057e00bc1ac24723f1eb6f93cb->enter($__internal_d7257b45ef5d54d88ec1d33b200f16f2366cf6057e00bc1ac24723f1eb6f93cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_d7257b45ef5d54d88ec1d33b200f16f2366cf6057e00bc1ac24723f1eb6f93cb->leave($__internal_d7257b45ef5d54d88ec1d33b200f16f2366cf6057e00bc1ac24723f1eb6f93cb_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Avis/add.html.twig";
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
/*   Ajout d'avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Ajout d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
