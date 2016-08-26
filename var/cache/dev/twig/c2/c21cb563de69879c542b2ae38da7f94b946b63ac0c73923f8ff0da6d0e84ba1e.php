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
        $__internal_864106642cc278383291a363bc42ca6d9df7e05eaacbc7ab6d61947c82155cc4 = $this->env->getExtension("native_profiler");
        $__internal_864106642cc278383291a363bc42ca6d9df7e05eaacbc7ab6d61947c82155cc4->enter($__internal_864106642cc278383291a363bc42ca6d9df7e05eaacbc7ab6d61947c82155cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_864106642cc278383291a363bc42ca6d9df7e05eaacbc7ab6d61947c82155cc4->leave($__internal_864106642cc278383291a363bc42ca6d9df7e05eaacbc7ab6d61947c82155cc4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f58e7956d35aefa7ef91d01c4ea9cfa3294b22a0552d2d2fc727397c8620ef74 = $this->env->getExtension("native_profiler");
        $__internal_f58e7956d35aefa7ef91d01c4ea9cfa3294b22a0552d2d2fc727397c8620ef74->enter($__internal_f58e7956d35aefa7ef91d01c4ea9cfa3294b22a0552d2d2fc727397c8620ef74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f58e7956d35aefa7ef91d01c4ea9cfa3294b22a0552d2d2fc727397c8620ef74->leave($__internal_f58e7956d35aefa7ef91d01c4ea9cfa3294b22a0552d2d2fc727397c8620ef74_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7900ec5d928cce41ae1dba4a569dbed8837d3b5e8802a90f75d54993da8f7e0c = $this->env->getExtension("native_profiler");
        $__internal_7900ec5d928cce41ae1dba4a569dbed8837d3b5e8802a90f75d54993da8f7e0c->enter($__internal_7900ec5d928cce41ae1dba4a569dbed8837d3b5e8802a90f75d54993da8f7e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_7900ec5d928cce41ae1dba4a569dbed8837d3b5e8802a90f75d54993da8f7e0c->leave($__internal_7900ec5d928cce41ae1dba4a569dbed8837d3b5e8802a90f75d54993da8f7e0c_prof);

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
