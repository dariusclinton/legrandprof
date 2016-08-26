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
        $__internal_713f8e3987a8ff56b429faae077802d213312470b18a70cc1dacc3ebbb9808ba = $this->env->getExtension("native_profiler");
        $__internal_713f8e3987a8ff56b429faae077802d213312470b18a70cc1dacc3ebbb9808ba->enter($__internal_713f8e3987a8ff56b429faae077802d213312470b18a70cc1dacc3ebbb9808ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_713f8e3987a8ff56b429faae077802d213312470b18a70cc1dacc3ebbb9808ba->leave($__internal_713f8e3987a8ff56b429faae077802d213312470b18a70cc1dacc3ebbb9808ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ffde3bf01e0191758ff3e5aa4ea171351e57f0f834af7a01909537c15c61b44 = $this->env->getExtension("native_profiler");
        $__internal_2ffde3bf01e0191758ff3e5aa4ea171351e57f0f834af7a01909537c15c61b44->enter($__internal_2ffde3bf01e0191758ff3e5aa4ea171351e57f0f834af7a01909537c15c61b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2ffde3bf01e0191758ff3e5aa4ea171351e57f0f834af7a01909537c15c61b44->leave($__internal_2ffde3bf01e0191758ff3e5aa4ea171351e57f0f834af7a01909537c15c61b44_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e7356fd0ec074d4fc15063166d04dbd8f2cf51d10fe136d0e1b1cfefad2a0a5 = $this->env->getExtension("native_profiler");
        $__internal_5e7356fd0ec074d4fc15063166d04dbd8f2cf51d10fe136d0e1b1cfefad2a0a5->enter($__internal_5e7356fd0ec074d4fc15063166d04dbd8f2cf51d10fe136d0e1b1cfefad2a0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_5e7356fd0ec074d4fc15063166d04dbd8f2cf51d10fe136d0e1b1cfefad2a0a5->leave($__internal_5e7356fd0ec074d4fc15063166d04dbd8f2cf51d10fe136d0e1b1cfefad2a0a5_prof);

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
