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
        $__internal_87e919619974fcc2a8d5f1c49e86bad4338aabcc653dc24c440ea3a9deaaca03 = $this->env->getExtension("native_profiler");
        $__internal_87e919619974fcc2a8d5f1c49e86bad4338aabcc653dc24c440ea3a9deaaca03->enter($__internal_87e919619974fcc2a8d5f1c49e86bad4338aabcc653dc24c440ea3a9deaaca03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87e919619974fcc2a8d5f1c49e86bad4338aabcc653dc24c440ea3a9deaaca03->leave($__internal_87e919619974fcc2a8d5f1c49e86bad4338aabcc653dc24c440ea3a9deaaca03_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_366eb9d9188a77c7989d5d336137f67216628b00c937f9d81a650c8ce760e4ab = $this->env->getExtension("native_profiler");
        $__internal_366eb9d9188a77c7989d5d336137f67216628b00c937f9d81a650c8ce760e4ab->enter($__internal_366eb9d9188a77c7989d5d336137f67216628b00c937f9d81a650c8ce760e4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_366eb9d9188a77c7989d5d336137f67216628b00c937f9d81a650c8ce760e4ab->leave($__internal_366eb9d9188a77c7989d5d336137f67216628b00c937f9d81a650c8ce760e4ab_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b5e8704ff9d94ded3521bfe42d00345ebeca36b2b1cbb21f43e7205fb732886 = $this->env->getExtension("native_profiler");
        $__internal_1b5e8704ff9d94ded3521bfe42d00345ebeca36b2b1cbb21f43e7205fb732886->enter($__internal_1b5e8704ff9d94ded3521bfe42d00345ebeca36b2b1cbb21f43e7205fb732886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_1b5e8704ff9d94ded3521bfe42d00345ebeca36b2b1cbb21f43e7205fb732886->leave($__internal_1b5e8704ff9d94ded3521bfe42d00345ebeca36b2b1cbb21f43e7205fb732886_prof);

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
