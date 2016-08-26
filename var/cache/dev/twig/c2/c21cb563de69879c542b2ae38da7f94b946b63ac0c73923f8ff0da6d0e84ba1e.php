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
        $__internal_6b29e878a1f39ced8bc56804bd07fd9f07881ad6e67b9760814b6fead111f06e = $this->env->getExtension("native_profiler");
        $__internal_6b29e878a1f39ced8bc56804bd07fd9f07881ad6e67b9760814b6fead111f06e->enter($__internal_6b29e878a1f39ced8bc56804bd07fd9f07881ad6e67b9760814b6fead111f06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b29e878a1f39ced8bc56804bd07fd9f07881ad6e67b9760814b6fead111f06e->leave($__internal_6b29e878a1f39ced8bc56804bd07fd9f07881ad6e67b9760814b6fead111f06e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ee6872b272f4b8e6d1cc6b9504caba03d021f331858111ee86c124000eb38ec = $this->env->getExtension("native_profiler");
        $__internal_4ee6872b272f4b8e6d1cc6b9504caba03d021f331858111ee86c124000eb38ec->enter($__internal_4ee6872b272f4b8e6d1cc6b9504caba03d021f331858111ee86c124000eb38ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4ee6872b272f4b8e6d1cc6b9504caba03d021f331858111ee86c124000eb38ec->leave($__internal_4ee6872b272f4b8e6d1cc6b9504caba03d021f331858111ee86c124000eb38ec_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a5f9e9bfef32166e9336185b51324b39854d64da91c0a46f8d55028df7db858 = $this->env->getExtension("native_profiler");
        $__internal_4a5f9e9bfef32166e9336185b51324b39854d64da91c0a46f8d55028df7db858->enter($__internal_4a5f9e9bfef32166e9336185b51324b39854d64da91c0a46f8d55028df7db858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_4a5f9e9bfef32166e9336185b51324b39854d64da91c0a46f8d55028df7db858->leave($__internal_4a5f9e9bfef32166e9336185b51324b39854d64da91c0a46f8d55028df7db858_prof);

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
