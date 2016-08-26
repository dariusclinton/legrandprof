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
        $__internal_1f13895272ec7d186addd6312bad61dc19eed716b4ee2b351c212e206eb92923 = $this->env->getExtension("native_profiler");
        $__internal_1f13895272ec7d186addd6312bad61dc19eed716b4ee2b351c212e206eb92923->enter($__internal_1f13895272ec7d186addd6312bad61dc19eed716b4ee2b351c212e206eb92923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f13895272ec7d186addd6312bad61dc19eed716b4ee2b351c212e206eb92923->leave($__internal_1f13895272ec7d186addd6312bad61dc19eed716b4ee2b351c212e206eb92923_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3badce4b5e9de5ab40c7bb3a3f82d1c9e0e3f82d7e8c0426fb73ec0c198314a = $this->env->getExtension("native_profiler");
        $__internal_e3badce4b5e9de5ab40c7bb3a3f82d1c9e0e3f82d7e8c0426fb73ec0c198314a->enter($__internal_e3badce4b5e9de5ab40c7bb3a3f82d1c9e0e3f82d7e8c0426fb73ec0c198314a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e3badce4b5e9de5ab40c7bb3a3f82d1c9e0e3f82d7e8c0426fb73ec0c198314a->leave($__internal_e3badce4b5e9de5ab40c7bb3a3f82d1c9e0e3f82d7e8c0426fb73ec0c198314a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b8cce04813ae688bcf17724b82ea1d8c18c7d434274ddb240d170ca3fd42372 = $this->env->getExtension("native_profiler");
        $__internal_4b8cce04813ae688bcf17724b82ea1d8c18c7d434274ddb240d170ca3fd42372->enter($__internal_4b8cce04813ae688bcf17724b82ea1d8c18c7d434274ddb240d170ca3fd42372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_4b8cce04813ae688bcf17724b82ea1d8c18c7d434274ddb240d170ca3fd42372->leave($__internal_4b8cce04813ae688bcf17724b82ea1d8c18c7d434274ddb240d170ca3fd42372_prof);

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
