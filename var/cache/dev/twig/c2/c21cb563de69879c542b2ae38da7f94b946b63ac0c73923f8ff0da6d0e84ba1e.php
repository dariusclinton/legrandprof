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
        $__internal_854b71e9a4727590ffc75bca67908c97ae74dad7883028525de74e2467e35808 = $this->env->getExtension("native_profiler");
        $__internal_854b71e9a4727590ffc75bca67908c97ae74dad7883028525de74e2467e35808->enter($__internal_854b71e9a4727590ffc75bca67908c97ae74dad7883028525de74e2467e35808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_854b71e9a4727590ffc75bca67908c97ae74dad7883028525de74e2467e35808->leave($__internal_854b71e9a4727590ffc75bca67908c97ae74dad7883028525de74e2467e35808_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_61089f30a6f0a816cb1527b9e811e695de39c5ae12d865bdc71f3aba23af48c6 = $this->env->getExtension("native_profiler");
        $__internal_61089f30a6f0a816cb1527b9e811e695de39c5ae12d865bdc71f3aba23af48c6->enter($__internal_61089f30a6f0a816cb1527b9e811e695de39c5ae12d865bdc71f3aba23af48c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_61089f30a6f0a816cb1527b9e811e695de39c5ae12d865bdc71f3aba23af48c6->leave($__internal_61089f30a6f0a816cb1527b9e811e695de39c5ae12d865bdc71f3aba23af48c6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_79d53959ac40ae4554e1191aec224660c1a6683c83ca7d791a93b15168f5e59c = $this->env->getExtension("native_profiler");
        $__internal_79d53959ac40ae4554e1191aec224660c1a6683c83ca7d791a93b15168f5e59c->enter($__internal_79d53959ac40ae4554e1191aec224660c1a6683c83ca7d791a93b15168f5e59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_79d53959ac40ae4554e1191aec224660c1a6683c83ca7d791a93b15168f5e59c->leave($__internal_79d53959ac40ae4554e1191aec224660c1a6683c83ca7d791a93b15168f5e59c_prof);

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
