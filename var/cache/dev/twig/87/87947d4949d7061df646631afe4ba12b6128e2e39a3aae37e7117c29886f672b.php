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
        $__internal_fbf8629049d3e117ace9623f0164ccf27c6338bcd60cdfa954551e07e0567b1c = $this->env->getExtension("native_profiler");
        $__internal_fbf8629049d3e117ace9623f0164ccf27c6338bcd60cdfa954551e07e0567b1c->enter($__internal_fbf8629049d3e117ace9623f0164ccf27c6338bcd60cdfa954551e07e0567b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf8629049d3e117ace9623f0164ccf27c6338bcd60cdfa954551e07e0567b1c->leave($__internal_fbf8629049d3e117ace9623f0164ccf27c6338bcd60cdfa954551e07e0567b1c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e94972a96828c6a4e8aacb9cb6967de63bc1e04fbd80aa4e265a4383368e05d = $this->env->getExtension("native_profiler");
        $__internal_8e94972a96828c6a4e8aacb9cb6967de63bc1e04fbd80aa4e265a4383368e05d->enter($__internal_8e94972a96828c6a4e8aacb9cb6967de63bc1e04fbd80aa4e265a4383368e05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8e94972a96828c6a4e8aacb9cb6967de63bc1e04fbd80aa4e265a4383368e05d->leave($__internal_8e94972a96828c6a4e8aacb9cb6967de63bc1e04fbd80aa4e265a4383368e05d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5ea79e7a67513077426dc939093629c0b9d7b4d5d8b38b88a7554ca0649c80a = $this->env->getExtension("native_profiler");
        $__internal_b5ea79e7a67513077426dc939093629c0b9d7b4d5d8b38b88a7554ca0649c80a->enter($__internal_b5ea79e7a67513077426dc939093629c0b9d7b4d5d8b38b88a7554ca0649c80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_b5ea79e7a67513077426dc939093629c0b9d7b4d5d8b38b88a7554ca0649c80a->leave($__internal_b5ea79e7a67513077426dc939093629c0b9d7b4d5d8b38b88a7554ca0649c80a_prof);

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
