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
        $__internal_e3f8e05bab1e80628d2446e8912e2606d003a223ae6fb43dad3dd393f1d03a79 = $this->env->getExtension("native_profiler");
        $__internal_e3f8e05bab1e80628d2446e8912e2606d003a223ae6fb43dad3dd393f1d03a79->enter($__internal_e3f8e05bab1e80628d2446e8912e2606d003a223ae6fb43dad3dd393f1d03a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3f8e05bab1e80628d2446e8912e2606d003a223ae6fb43dad3dd393f1d03a79->leave($__internal_e3f8e05bab1e80628d2446e8912e2606d003a223ae6fb43dad3dd393f1d03a79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_28f7115871675b418a156ce2e0fa8d3c50528fb41960d5bf4fecac904b348b3a = $this->env->getExtension("native_profiler");
        $__internal_28f7115871675b418a156ce2e0fa8d3c50528fb41960d5bf4fecac904b348b3a->enter($__internal_28f7115871675b418a156ce2e0fa8d3c50528fb41960d5bf4fecac904b348b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_28f7115871675b418a156ce2e0fa8d3c50528fb41960d5bf4fecac904b348b3a->leave($__internal_28f7115871675b418a156ce2e0fa8d3c50528fb41960d5bf4fecac904b348b3a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9176d4792f5a40d747a283e05b24b80f1e52da83bf9a08402c7116d8c080f39 = $this->env->getExtension("native_profiler");
        $__internal_b9176d4792f5a40d747a283e05b24b80f1e52da83bf9a08402c7116d8c080f39->enter($__internal_b9176d4792f5a40d747a283e05b24b80f1e52da83bf9a08402c7116d8c080f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_b9176d4792f5a40d747a283e05b24b80f1e52da83bf9a08402c7116d8c080f39->leave($__internal_b9176d4792f5a40d747a283e05b24b80f1e52da83bf9a08402c7116d8c080f39_prof);

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
