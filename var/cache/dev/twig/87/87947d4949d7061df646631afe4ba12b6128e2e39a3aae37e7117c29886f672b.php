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
        $__internal_8268bb28f9efd31ca2bb51ac1c19d41e50f29f2289a4e640585c48dd663b1328 = $this->env->getExtension("native_profiler");
        $__internal_8268bb28f9efd31ca2bb51ac1c19d41e50f29f2289a4e640585c48dd663b1328->enter($__internal_8268bb28f9efd31ca2bb51ac1c19d41e50f29f2289a4e640585c48dd663b1328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8268bb28f9efd31ca2bb51ac1c19d41e50f29f2289a4e640585c48dd663b1328->leave($__internal_8268bb28f9efd31ca2bb51ac1c19d41e50f29f2289a4e640585c48dd663b1328_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49776d74bc9d2f4795147bd285923cf4b96cd8636f1b91f0904ef96d6a122797 = $this->env->getExtension("native_profiler");
        $__internal_49776d74bc9d2f4795147bd285923cf4b96cd8636f1b91f0904ef96d6a122797->enter($__internal_49776d74bc9d2f4795147bd285923cf4b96cd8636f1b91f0904ef96d6a122797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_49776d74bc9d2f4795147bd285923cf4b96cd8636f1b91f0904ef96d6a122797->leave($__internal_49776d74bc9d2f4795147bd285923cf4b96cd8636f1b91f0904ef96d6a122797_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_93971bdbd0fb0fc743537832625d903fd5335d77570029020f7a88749e32394a = $this->env->getExtension("native_profiler");
        $__internal_93971bdbd0fb0fc743537832625d903fd5335d77570029020f7a88749e32394a->enter($__internal_93971bdbd0fb0fc743537832625d903fd5335d77570029020f7a88749e32394a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_93971bdbd0fb0fc743537832625d903fd5335d77570029020f7a88749e32394a->leave($__internal_93971bdbd0fb0fc743537832625d903fd5335d77570029020f7a88749e32394a_prof);

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
