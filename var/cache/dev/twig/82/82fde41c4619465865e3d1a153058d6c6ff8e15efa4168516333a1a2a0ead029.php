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
        $__internal_03003a1400ee1c87759554c273909c6196ab595ddfa216a9656d055948c7e864 = $this->env->getExtension("native_profiler");
        $__internal_03003a1400ee1c87759554c273909c6196ab595ddfa216a9656d055948c7e864->enter($__internal_03003a1400ee1c87759554c273909c6196ab595ddfa216a9656d055948c7e864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03003a1400ee1c87759554c273909c6196ab595ddfa216a9656d055948c7e864->leave($__internal_03003a1400ee1c87759554c273909c6196ab595ddfa216a9656d055948c7e864_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4301d1347a8ff4c96274b7b0764c2e9d1744ba8769f947c9bea47ff1000de265 = $this->env->getExtension("native_profiler");
        $__internal_4301d1347a8ff4c96274b7b0764c2e9d1744ba8769f947c9bea47ff1000de265->enter($__internal_4301d1347a8ff4c96274b7b0764c2e9d1744ba8769f947c9bea47ff1000de265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4301d1347a8ff4c96274b7b0764c2e9d1744ba8769f947c9bea47ff1000de265->leave($__internal_4301d1347a8ff4c96274b7b0764c2e9d1744ba8769f947c9bea47ff1000de265_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_04ed6ca2109bd6f0f53b611dd9ae40346040f5672205ab93decb3dfac2f35b31 = $this->env->getExtension("native_profiler");
        $__internal_04ed6ca2109bd6f0f53b611dd9ae40346040f5672205ab93decb3dfac2f35b31->enter($__internal_04ed6ca2109bd6f0f53b611dd9ae40346040f5672205ab93decb3dfac2f35b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_04ed6ca2109bd6f0f53b611dd9ae40346040f5672205ab93decb3dfac2f35b31->leave($__internal_04ed6ca2109bd6f0f53b611dd9ae40346040f5672205ab93decb3dfac2f35b31_prof);

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
