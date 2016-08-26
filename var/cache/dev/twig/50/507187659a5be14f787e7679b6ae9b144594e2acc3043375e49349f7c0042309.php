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
        $__internal_3893aa0bd652d5174e9df89ab277ec1d1925915a5476a8432d736e5e43cb43c5 = $this->env->getExtension("native_profiler");
        $__internal_3893aa0bd652d5174e9df89ab277ec1d1925915a5476a8432d736e5e43cb43c5->enter($__internal_3893aa0bd652d5174e9df89ab277ec1d1925915a5476a8432d736e5e43cb43c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3893aa0bd652d5174e9df89ab277ec1d1925915a5476a8432d736e5e43cb43c5->leave($__internal_3893aa0bd652d5174e9df89ab277ec1d1925915a5476a8432d736e5e43cb43c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e565d745351a5d35d2f7996e09e1eb1a3d8ae843f86159fed009e95193c6099 = $this->env->getExtension("native_profiler");
        $__internal_4e565d745351a5d35d2f7996e09e1eb1a3d8ae843f86159fed009e95193c6099->enter($__internal_4e565d745351a5d35d2f7996e09e1eb1a3d8ae843f86159fed009e95193c6099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4e565d745351a5d35d2f7996e09e1eb1a3d8ae843f86159fed009e95193c6099->leave($__internal_4e565d745351a5d35d2f7996e09e1eb1a3d8ae843f86159fed009e95193c6099_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_29e761c6e3b27f37130e0bec10a740b252afa134614dc2f6c01e8112385f260f = $this->env->getExtension("native_profiler");
        $__internal_29e761c6e3b27f37130e0bec10a740b252afa134614dc2f6c01e8112385f260f->enter($__internal_29e761c6e3b27f37130e0bec10a740b252afa134614dc2f6c01e8112385f260f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_29e761c6e3b27f37130e0bec10a740b252afa134614dc2f6c01e8112385f260f->leave($__internal_29e761c6e3b27f37130e0bec10a740b252afa134614dc2f6c01e8112385f260f_prof);

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
