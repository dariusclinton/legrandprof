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
        $__internal_a798b02d200cca55fc3269e8ce18f420276d48918af7d026fecc7d3f30941d46 = $this->env->getExtension("native_profiler");
        $__internal_a798b02d200cca55fc3269e8ce18f420276d48918af7d026fecc7d3f30941d46->enter($__internal_a798b02d200cca55fc3269e8ce18f420276d48918af7d026fecc7d3f30941d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a798b02d200cca55fc3269e8ce18f420276d48918af7d026fecc7d3f30941d46->leave($__internal_a798b02d200cca55fc3269e8ce18f420276d48918af7d026fecc7d3f30941d46_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b454e922d92d91dfb1cd7fa7b445095ed28fd7abb1bbc599b8aaa631b6491c05 = $this->env->getExtension("native_profiler");
        $__internal_b454e922d92d91dfb1cd7fa7b445095ed28fd7abb1bbc599b8aaa631b6491c05->enter($__internal_b454e922d92d91dfb1cd7fa7b445095ed28fd7abb1bbc599b8aaa631b6491c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b454e922d92d91dfb1cd7fa7b445095ed28fd7abb1bbc599b8aaa631b6491c05->leave($__internal_b454e922d92d91dfb1cd7fa7b445095ed28fd7abb1bbc599b8aaa631b6491c05_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4865d36213a5f13e7af5dcfd7f4c2515fab79b4ab65b4475b0383462098ba57d = $this->env->getExtension("native_profiler");
        $__internal_4865d36213a5f13e7af5dcfd7f4c2515fab79b4ab65b4475b0383462098ba57d->enter($__internal_4865d36213a5f13e7af5dcfd7f4c2515fab79b4ab65b4475b0383462098ba57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_4865d36213a5f13e7af5dcfd7f4c2515fab79b4ab65b4475b0383462098ba57d->leave($__internal_4865d36213a5f13e7af5dcfd7f4c2515fab79b4ab65b4475b0383462098ba57d_prof);

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
