<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_6a88d2a2f0a77016e5516f783f6a3d0e21113b81a4b628bea429a33880d89069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:add.html.twig", 1);
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
        $__internal_94b4236d06a7803005eb8b4a52f7a1b80ff5046ae88611e806973b35ee4072a2 = $this->env->getExtension("native_profiler");
        $__internal_94b4236d06a7803005eb8b4a52f7a1b80ff5046ae88611e806973b35ee4072a2->enter($__internal_94b4236d06a7803005eb8b4a52f7a1b80ff5046ae88611e806973b35ee4072a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94b4236d06a7803005eb8b4a52f7a1b80ff5046ae88611e806973b35ee4072a2->leave($__internal_94b4236d06a7803005eb8b4a52f7a1b80ff5046ae88611e806973b35ee4072a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fa5e5bc4fc26155585a962fe5820abdb30d45aa346320327df24c153dacc65b = $this->env->getExtension("native_profiler");
        $__internal_1fa5e5bc4fc26155585a962fe5820abdb30d45aa346320327df24c153dacc65b->enter($__internal_1fa5e5bc4fc26155585a962fe5820abdb30d45aa346320327df24c153dacc65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1fa5e5bc4fc26155585a962fe5820abdb30d45aa346320327df24c153dacc65b->leave($__internal_1fa5e5bc4fc26155585a962fe5820abdb30d45aa346320327df24c153dacc65b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_af16e4b766e26416a95fb5227f2fe84dc6ed804905d1ca0e3298005379de0f7f = $this->env->getExtension("native_profiler");
        $__internal_af16e4b766e26416a95fb5227f2fe84dc6ed804905d1ca0e3298005379de0f7f->enter($__internal_af16e4b766e26416a95fb5227f2fe84dc6ed804905d1ca0e3298005379de0f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_af16e4b766e26416a95fb5227f2fe84dc6ed804905d1ca0e3298005379de0f7f->leave($__internal_af16e4b766e26416a95fb5227f2fe84dc6ed804905d1ca0e3298005379de0f7f_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:add.html.twig";
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
