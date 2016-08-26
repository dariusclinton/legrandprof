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
        $__internal_5d95cfb3f5003792deaa695724f0845bfb746c7da80ed24ad5a4c0c512563024 = $this->env->getExtension("native_profiler");
        $__internal_5d95cfb3f5003792deaa695724f0845bfb746c7da80ed24ad5a4c0c512563024->enter($__internal_5d95cfb3f5003792deaa695724f0845bfb746c7da80ed24ad5a4c0c512563024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d95cfb3f5003792deaa695724f0845bfb746c7da80ed24ad5a4c0c512563024->leave($__internal_5d95cfb3f5003792deaa695724f0845bfb746c7da80ed24ad5a4c0c512563024_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_14785c454eb6fc66641c6428e72ec7e667208c60b8d2d7b1e02dd2b87838a8e7 = $this->env->getExtension("native_profiler");
        $__internal_14785c454eb6fc66641c6428e72ec7e667208c60b8d2d7b1e02dd2b87838a8e7->enter($__internal_14785c454eb6fc66641c6428e72ec7e667208c60b8d2d7b1e02dd2b87838a8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_14785c454eb6fc66641c6428e72ec7e667208c60b8d2d7b1e02dd2b87838a8e7->leave($__internal_14785c454eb6fc66641c6428e72ec7e667208c60b8d2d7b1e02dd2b87838a8e7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5d8fe3dd83afe2f27a565cb4d8f7ae391227a4123d51a7d01af9ed92a656069 = $this->env->getExtension("native_profiler");
        $__internal_d5d8fe3dd83afe2f27a565cb4d8f7ae391227a4123d51a7d01af9ed92a656069->enter($__internal_d5d8fe3dd83afe2f27a565cb4d8f7ae391227a4123d51a7d01af9ed92a656069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_d5d8fe3dd83afe2f27a565cb4d8f7ae391227a4123d51a7d01af9ed92a656069->leave($__internal_d5d8fe3dd83afe2f27a565cb4d8f7ae391227a4123d51a7d01af9ed92a656069_prof);

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
