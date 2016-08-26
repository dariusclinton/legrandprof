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
        $__internal_6f56752473139f8091a5f27c46a0976288fbdd32a0edb3580e91363c53def543 = $this->env->getExtension("native_profiler");
        $__internal_6f56752473139f8091a5f27c46a0976288fbdd32a0edb3580e91363c53def543->enter($__internal_6f56752473139f8091a5f27c46a0976288fbdd32a0edb3580e91363c53def543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f56752473139f8091a5f27c46a0976288fbdd32a0edb3580e91363c53def543->leave($__internal_6f56752473139f8091a5f27c46a0976288fbdd32a0edb3580e91363c53def543_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_946aab04f47fcd3ef5232c95a03eafd039883c73f364a50e8623a5cca20105b3 = $this->env->getExtension("native_profiler");
        $__internal_946aab04f47fcd3ef5232c95a03eafd039883c73f364a50e8623a5cca20105b3->enter($__internal_946aab04f47fcd3ef5232c95a03eafd039883c73f364a50e8623a5cca20105b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_946aab04f47fcd3ef5232c95a03eafd039883c73f364a50e8623a5cca20105b3->leave($__internal_946aab04f47fcd3ef5232c95a03eafd039883c73f364a50e8623a5cca20105b3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a64eb86208ddbc7c11477b4616a931972086ce7d33fd5dfcdef792235e43d495 = $this->env->getExtension("native_profiler");
        $__internal_a64eb86208ddbc7c11477b4616a931972086ce7d33fd5dfcdef792235e43d495->enter($__internal_a64eb86208ddbc7c11477b4616a931972086ce7d33fd5dfcdef792235e43d495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_a64eb86208ddbc7c11477b4616a931972086ce7d33fd5dfcdef792235e43d495->leave($__internal_a64eb86208ddbc7c11477b4616a931972086ce7d33fd5dfcdef792235e43d495_prof);

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
