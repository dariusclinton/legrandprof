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
        $__internal_a36c56be659a663a98f9f8238db4cc868d3554ae9e1be7716c6cde43a13d0291 = $this->env->getExtension("native_profiler");
        $__internal_a36c56be659a663a98f9f8238db4cc868d3554ae9e1be7716c6cde43a13d0291->enter($__internal_a36c56be659a663a98f9f8238db4cc868d3554ae9e1be7716c6cde43a13d0291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a36c56be659a663a98f9f8238db4cc868d3554ae9e1be7716c6cde43a13d0291->leave($__internal_a36c56be659a663a98f9f8238db4cc868d3554ae9e1be7716c6cde43a13d0291_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f557084f64051af72f6a30d17d664556a8156bd1a40f242a4fb237d069907fac = $this->env->getExtension("native_profiler");
        $__internal_f557084f64051af72f6a30d17d664556a8156bd1a40f242a4fb237d069907fac->enter($__internal_f557084f64051af72f6a30d17d664556a8156bd1a40f242a4fb237d069907fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f557084f64051af72f6a30d17d664556a8156bd1a40f242a4fb237d069907fac->leave($__internal_f557084f64051af72f6a30d17d664556a8156bd1a40f242a4fb237d069907fac_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_71e4943bcd80ceb89509c221281b1196ac35b459fa4d5a4c03abfca29a42cf86 = $this->env->getExtension("native_profiler");
        $__internal_71e4943bcd80ceb89509c221281b1196ac35b459fa4d5a4c03abfca29a42cf86->enter($__internal_71e4943bcd80ceb89509c221281b1196ac35b459fa4d5a4c03abfca29a42cf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_71e4943bcd80ceb89509c221281b1196ac35b459fa4d5a4c03abfca29a42cf86->leave($__internal_71e4943bcd80ceb89509c221281b1196ac35b459fa4d5a4c03abfca29a42cf86_prof);

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
