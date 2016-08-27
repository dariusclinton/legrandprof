<?php

/* LGPUserBundle:Avis:update.html.twig */
class __TwigTemplate_05f97206c866e841e82ab59108611b22ba2733585480458282fb6f7f5800801e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:update.html.twig", 1);
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
        $__internal_9eefc884f66bd6cc49a0a87bebc9646660930cd061091bca92e3f6a68ccd94c4 = $this->env->getExtension("native_profiler");
        $__internal_9eefc884f66bd6cc49a0a87bebc9646660930cd061091bca92e3f6a68ccd94c4->enter($__internal_9eefc884f66bd6cc49a0a87bebc9646660930cd061091bca92e3f6a68ccd94c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9eefc884f66bd6cc49a0a87bebc9646660930cd061091bca92e3f6a68ccd94c4->leave($__internal_9eefc884f66bd6cc49a0a87bebc9646660930cd061091bca92e3f6a68ccd94c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_996e9c57429b7ebfdedb8e6517a48bbf1b17f8ef31f1f9230e519f7b37ed076a = $this->env->getExtension("native_profiler");
        $__internal_996e9c57429b7ebfdedb8e6517a48bbf1b17f8ef31f1f9230e519f7b37ed076a->enter($__internal_996e9c57429b7ebfdedb8e6517a48bbf1b17f8ef31f1f9230e519f7b37ed076a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_996e9c57429b7ebfdedb8e6517a48bbf1b17f8ef31f1f9230e519f7b37ed076a->leave($__internal_996e9c57429b7ebfdedb8e6517a48bbf1b17f8ef31f1f9230e519f7b37ed076a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e2372898386dc96a846666c24c7979f214d9444d4f42ebc5a8c1b5c4d4995b8 = $this->env->getExtension("native_profiler");
        $__internal_6e2372898386dc96a846666c24c7979f214d9444d4f42ebc5a8c1b5c4d4995b8->enter($__internal_6e2372898386dc96a846666c24c7979f214d9444d4f42ebc5a8c1b5c4d4995b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_6e2372898386dc96a846666c24c7979f214d9444d4f42ebc5a8c1b5c4d4995b8->leave($__internal_6e2372898386dc96a846666c24c7979f214d9444d4f42ebc5a8c1b5c4d4995b8_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:update.html.twig";
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
