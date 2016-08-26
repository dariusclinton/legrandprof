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
        $__internal_1ca456df99706bc1457229d72f88e76a0633247e8ad18001e4c3df75a2bcd544 = $this->env->getExtension("native_profiler");
        $__internal_1ca456df99706bc1457229d72f88e76a0633247e8ad18001e4c3df75a2bcd544->enter($__internal_1ca456df99706bc1457229d72f88e76a0633247e8ad18001e4c3df75a2bcd544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ca456df99706bc1457229d72f88e76a0633247e8ad18001e4c3df75a2bcd544->leave($__internal_1ca456df99706bc1457229d72f88e76a0633247e8ad18001e4c3df75a2bcd544_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b51fde7cdbb260530870de788fab0fd590a5f14de79c130052732560b278d8f5 = $this->env->getExtension("native_profiler");
        $__internal_b51fde7cdbb260530870de788fab0fd590a5f14de79c130052732560b278d8f5->enter($__internal_b51fde7cdbb260530870de788fab0fd590a5f14de79c130052732560b278d8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b51fde7cdbb260530870de788fab0fd590a5f14de79c130052732560b278d8f5->leave($__internal_b51fde7cdbb260530870de788fab0fd590a5f14de79c130052732560b278d8f5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f478b3272fcb83711f412152bde8f8cfc1c155e9f50881fd4f170cebe813165 = $this->env->getExtension("native_profiler");
        $__internal_1f478b3272fcb83711f412152bde8f8cfc1c155e9f50881fd4f170cebe813165->enter($__internal_1f478b3272fcb83711f412152bde8f8cfc1c155e9f50881fd4f170cebe813165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_1f478b3272fcb83711f412152bde8f8cfc1c155e9f50881fd4f170cebe813165->leave($__internal_1f478b3272fcb83711f412152bde8f8cfc1c155e9f50881fd4f170cebe813165_prof);

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
