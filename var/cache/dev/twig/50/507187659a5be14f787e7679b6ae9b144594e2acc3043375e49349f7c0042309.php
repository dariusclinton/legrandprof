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
        $__internal_a0d4011baace6fa858907e7cf11df5ef4fd87ffedeb05c01c8475caad70e36be = $this->env->getExtension("native_profiler");
        $__internal_a0d4011baace6fa858907e7cf11df5ef4fd87ffedeb05c01c8475caad70e36be->enter($__internal_a0d4011baace6fa858907e7cf11df5ef4fd87ffedeb05c01c8475caad70e36be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d4011baace6fa858907e7cf11df5ef4fd87ffedeb05c01c8475caad70e36be->leave($__internal_a0d4011baace6fa858907e7cf11df5ef4fd87ffedeb05c01c8475caad70e36be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05b2a126a63fa5b6bff7c4240c876e571a2f351dd7bfe68ddd2a4c1b66a5f215 = $this->env->getExtension("native_profiler");
        $__internal_05b2a126a63fa5b6bff7c4240c876e571a2f351dd7bfe68ddd2a4c1b66a5f215->enter($__internal_05b2a126a63fa5b6bff7c4240c876e571a2f351dd7bfe68ddd2a4c1b66a5f215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_05b2a126a63fa5b6bff7c4240c876e571a2f351dd7bfe68ddd2a4c1b66a5f215->leave($__internal_05b2a126a63fa5b6bff7c4240c876e571a2f351dd7bfe68ddd2a4c1b66a5f215_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb7b614e211575c43afdd88a014fe6b400f2c2548cf19a7bda0da92bc6484919 = $this->env->getExtension("native_profiler");
        $__internal_eb7b614e211575c43afdd88a014fe6b400f2c2548cf19a7bda0da92bc6484919->enter($__internal_eb7b614e211575c43afdd88a014fe6b400f2c2548cf19a7bda0da92bc6484919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_eb7b614e211575c43afdd88a014fe6b400f2c2548cf19a7bda0da92bc6484919->leave($__internal_eb7b614e211575c43afdd88a014fe6b400f2c2548cf19a7bda0da92bc6484919_prof);

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
