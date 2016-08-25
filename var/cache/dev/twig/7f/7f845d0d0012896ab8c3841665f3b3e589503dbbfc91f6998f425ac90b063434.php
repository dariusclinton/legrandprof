<?php

/* LGPUserBundle:Avis:update.html.twig */
class __TwigTemplate_2303bedee1405958bdd42ca428e217f10184f30a557f102cd4575bf6a4224aab extends Twig_Template
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
        $__internal_458d20c931bf42797661e4b289fa7d301b518f8414b7592a5b246c2673210e06 = $this->env->getExtension("native_profiler");
        $__internal_458d20c931bf42797661e4b289fa7d301b518f8414b7592a5b246c2673210e06->enter($__internal_458d20c931bf42797661e4b289fa7d301b518f8414b7592a5b246c2673210e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_458d20c931bf42797661e4b289fa7d301b518f8414b7592a5b246c2673210e06->leave($__internal_458d20c931bf42797661e4b289fa7d301b518f8414b7592a5b246c2673210e06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1a508c3bf03dcc200bfb8b7f73dd4f3f4134c0ceeda0c4d63484e845f4d7366 = $this->env->getExtension("native_profiler");
        $__internal_e1a508c3bf03dcc200bfb8b7f73dd4f3f4134c0ceeda0c4d63484e845f4d7366->enter($__internal_e1a508c3bf03dcc200bfb8b7f73dd4f3f4134c0ceeda0c4d63484e845f4d7366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e1a508c3bf03dcc200bfb8b7f73dd4f3f4134c0ceeda0c4d63484e845f4d7366->leave($__internal_e1a508c3bf03dcc200bfb8b7f73dd4f3f4134c0ceeda0c4d63484e845f4d7366_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_47a9b50367880d66929307bd74ff8d717231c24b163d92e1e5ff2d80cf10fd08 = $this->env->getExtension("native_profiler");
        $__internal_47a9b50367880d66929307bd74ff8d717231c24b163d92e1e5ff2d80cf10fd08->enter($__internal_47a9b50367880d66929307bd74ff8d717231c24b163d92e1e5ff2d80cf10fd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_47a9b50367880d66929307bd74ff8d717231c24b163d92e1e5ff2d80cf10fd08->leave($__internal_47a9b50367880d66929307bd74ff8d717231c24b163d92e1e5ff2d80cf10fd08_prof);

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
