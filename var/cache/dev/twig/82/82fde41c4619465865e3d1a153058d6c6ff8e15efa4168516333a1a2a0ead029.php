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
        $__internal_f913159b1d6f46370d571c7326cd7f467a9ee9f5d7c40d3e0749956e9cf15e3e = $this->env->getExtension("native_profiler");
        $__internal_f913159b1d6f46370d571c7326cd7f467a9ee9f5d7c40d3e0749956e9cf15e3e->enter($__internal_f913159b1d6f46370d571c7326cd7f467a9ee9f5d7c40d3e0749956e9cf15e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f913159b1d6f46370d571c7326cd7f467a9ee9f5d7c40d3e0749956e9cf15e3e->leave($__internal_f913159b1d6f46370d571c7326cd7f467a9ee9f5d7c40d3e0749956e9cf15e3e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dcc1352d4440dd404e32ea156887ef2393a6bcbb1441fe271e586627eec2dbc = $this->env->getExtension("native_profiler");
        $__internal_9dcc1352d4440dd404e32ea156887ef2393a6bcbb1441fe271e586627eec2dbc->enter($__internal_9dcc1352d4440dd404e32ea156887ef2393a6bcbb1441fe271e586627eec2dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9dcc1352d4440dd404e32ea156887ef2393a6bcbb1441fe271e586627eec2dbc->leave($__internal_9dcc1352d4440dd404e32ea156887ef2393a6bcbb1441fe271e586627eec2dbc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7678af8f972c3730f47128cae6b4d38ca0b092ec7bc149bc89631ef6d16b758 = $this->env->getExtension("native_profiler");
        $__internal_b7678af8f972c3730f47128cae6b4d38ca0b092ec7bc149bc89631ef6d16b758->enter($__internal_b7678af8f972c3730f47128cae6b4d38ca0b092ec7bc149bc89631ef6d16b758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_b7678af8f972c3730f47128cae6b4d38ca0b092ec7bc149bc89631ef6d16b758->leave($__internal_b7678af8f972c3730f47128cae6b4d38ca0b092ec7bc149bc89631ef6d16b758_prof);

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
