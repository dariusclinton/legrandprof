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
        $__internal_3ecf4a33f260e7f1fbc0923340f864dc4352596e6a5e201adb7786f1204d5526 = $this->env->getExtension("native_profiler");
        $__internal_3ecf4a33f260e7f1fbc0923340f864dc4352596e6a5e201adb7786f1204d5526->enter($__internal_3ecf4a33f260e7f1fbc0923340f864dc4352596e6a5e201adb7786f1204d5526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ecf4a33f260e7f1fbc0923340f864dc4352596e6a5e201adb7786f1204d5526->leave($__internal_3ecf4a33f260e7f1fbc0923340f864dc4352596e6a5e201adb7786f1204d5526_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0978f7ca210ce5c3619cfe7a76e07ad4e3c8929d868440af45d0e82b04c8ac3 = $this->env->getExtension("native_profiler");
        $__internal_e0978f7ca210ce5c3619cfe7a76e07ad4e3c8929d868440af45d0e82b04c8ac3->enter($__internal_e0978f7ca210ce5c3619cfe7a76e07ad4e3c8929d868440af45d0e82b04c8ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e0978f7ca210ce5c3619cfe7a76e07ad4e3c8929d868440af45d0e82b04c8ac3->leave($__internal_e0978f7ca210ce5c3619cfe7a76e07ad4e3c8929d868440af45d0e82b04c8ac3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba72722a81dfa24aefa1bae11d555ca02c5492b9536390aa66babd02852cf7bc = $this->env->getExtension("native_profiler");
        $__internal_ba72722a81dfa24aefa1bae11d555ca02c5492b9536390aa66babd02852cf7bc->enter($__internal_ba72722a81dfa24aefa1bae11d555ca02c5492b9536390aa66babd02852cf7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_ba72722a81dfa24aefa1bae11d555ca02c5492b9536390aa66babd02852cf7bc->leave($__internal_ba72722a81dfa24aefa1bae11d555ca02c5492b9536390aa66babd02852cf7bc_prof);

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
