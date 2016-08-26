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
        $__internal_9735844da25b0dba81cf0a208496ddfe3a44aef04ebf2d57eb7221b7c5c68ba3 = $this->env->getExtension("native_profiler");
        $__internal_9735844da25b0dba81cf0a208496ddfe3a44aef04ebf2d57eb7221b7c5c68ba3->enter($__internal_9735844da25b0dba81cf0a208496ddfe3a44aef04ebf2d57eb7221b7c5c68ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9735844da25b0dba81cf0a208496ddfe3a44aef04ebf2d57eb7221b7c5c68ba3->leave($__internal_9735844da25b0dba81cf0a208496ddfe3a44aef04ebf2d57eb7221b7c5c68ba3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d870e7c4300f1eba65f3f27a38eb02c09fe8a6c317caf603905f49e11267bddf = $this->env->getExtension("native_profiler");
        $__internal_d870e7c4300f1eba65f3f27a38eb02c09fe8a6c317caf603905f49e11267bddf->enter($__internal_d870e7c4300f1eba65f3f27a38eb02c09fe8a6c317caf603905f49e11267bddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d870e7c4300f1eba65f3f27a38eb02c09fe8a6c317caf603905f49e11267bddf->leave($__internal_d870e7c4300f1eba65f3f27a38eb02c09fe8a6c317caf603905f49e11267bddf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_497d91e8ba1e176769077413a74a03fe7d232aab6a3c8dd4b49a5bec5db87b5b = $this->env->getExtension("native_profiler");
        $__internal_497d91e8ba1e176769077413a74a03fe7d232aab6a3c8dd4b49a5bec5db87b5b->enter($__internal_497d91e8ba1e176769077413a74a03fe7d232aab6a3c8dd4b49a5bec5db87b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_497d91e8ba1e176769077413a74a03fe7d232aab6a3c8dd4b49a5bec5db87b5b->leave($__internal_497d91e8ba1e176769077413a74a03fe7d232aab6a3c8dd4b49a5bec5db87b5b_prof);

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
