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
        $__internal_6aba25d1d9fc02f756c0306a8e4bb95b5753725769e87528b7520de163346cd9 = $this->env->getExtension("native_profiler");
        $__internal_6aba25d1d9fc02f756c0306a8e4bb95b5753725769e87528b7520de163346cd9->enter($__internal_6aba25d1d9fc02f756c0306a8e4bb95b5753725769e87528b7520de163346cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aba25d1d9fc02f756c0306a8e4bb95b5753725769e87528b7520de163346cd9->leave($__internal_6aba25d1d9fc02f756c0306a8e4bb95b5753725769e87528b7520de163346cd9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc40371d4ccfcddb156bca3cd13b764430a1cb784f91c6bb0e39a3096aefbfa7 = $this->env->getExtension("native_profiler");
        $__internal_cc40371d4ccfcddb156bca3cd13b764430a1cb784f91c6bb0e39a3096aefbfa7->enter($__internal_cc40371d4ccfcddb156bca3cd13b764430a1cb784f91c6bb0e39a3096aefbfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cc40371d4ccfcddb156bca3cd13b764430a1cb784f91c6bb0e39a3096aefbfa7->leave($__internal_cc40371d4ccfcddb156bca3cd13b764430a1cb784f91c6bb0e39a3096aefbfa7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b78b89225540e92479bbbccb91e29a7668031922bfd1e04bf414a8288b236a54 = $this->env->getExtension("native_profiler");
        $__internal_b78b89225540e92479bbbccb91e29a7668031922bfd1e04bf414a8288b236a54->enter($__internal_b78b89225540e92479bbbccb91e29a7668031922bfd1e04bf414a8288b236a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_b78b89225540e92479bbbccb91e29a7668031922bfd1e04bf414a8288b236a54->leave($__internal_b78b89225540e92479bbbccb91e29a7668031922bfd1e04bf414a8288b236a54_prof);

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
