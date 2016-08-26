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
        $__internal_fb0c1e8e251e5bbdc04955c5a0e82fffd0cf0ab67eb3648f35e50ae765f97d90 = $this->env->getExtension("native_profiler");
        $__internal_fb0c1e8e251e5bbdc04955c5a0e82fffd0cf0ab67eb3648f35e50ae765f97d90->enter($__internal_fb0c1e8e251e5bbdc04955c5a0e82fffd0cf0ab67eb3648f35e50ae765f97d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb0c1e8e251e5bbdc04955c5a0e82fffd0cf0ab67eb3648f35e50ae765f97d90->leave($__internal_fb0c1e8e251e5bbdc04955c5a0e82fffd0cf0ab67eb3648f35e50ae765f97d90_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21dd713cae3eaf3ced1d4b6b6e7e9bed2193dd418496c596031c8762c820a066 = $this->env->getExtension("native_profiler");
        $__internal_21dd713cae3eaf3ced1d4b6b6e7e9bed2193dd418496c596031c8762c820a066->enter($__internal_21dd713cae3eaf3ced1d4b6b6e7e9bed2193dd418496c596031c8762c820a066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_21dd713cae3eaf3ced1d4b6b6e7e9bed2193dd418496c596031c8762c820a066->leave($__internal_21dd713cae3eaf3ced1d4b6b6e7e9bed2193dd418496c596031c8762c820a066_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa3eb0295ebfad396218a8b5423809f024601e908d23debdc700cd5bba954f20 = $this->env->getExtension("native_profiler");
        $__internal_aa3eb0295ebfad396218a8b5423809f024601e908d23debdc700cd5bba954f20->enter($__internal_aa3eb0295ebfad396218a8b5423809f024601e908d23debdc700cd5bba954f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_aa3eb0295ebfad396218a8b5423809f024601e908d23debdc700cd5bba954f20->leave($__internal_aa3eb0295ebfad396218a8b5423809f024601e908d23debdc700cd5bba954f20_prof);

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
