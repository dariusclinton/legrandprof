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
        $__internal_39c688caace7f6fff24cdb0d61775dfbfece181aff43c2a1d98744bb4666d2e5 = $this->env->getExtension("native_profiler");
        $__internal_39c688caace7f6fff24cdb0d61775dfbfece181aff43c2a1d98744bb4666d2e5->enter($__internal_39c688caace7f6fff24cdb0d61775dfbfece181aff43c2a1d98744bb4666d2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39c688caace7f6fff24cdb0d61775dfbfece181aff43c2a1d98744bb4666d2e5->leave($__internal_39c688caace7f6fff24cdb0d61775dfbfece181aff43c2a1d98744bb4666d2e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0788a67c2c2ed397c27637ffeada9841abc5162f928673376d57f0ed57ef15b0 = $this->env->getExtension("native_profiler");
        $__internal_0788a67c2c2ed397c27637ffeada9841abc5162f928673376d57f0ed57ef15b0->enter($__internal_0788a67c2c2ed397c27637ffeada9841abc5162f928673376d57f0ed57ef15b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0788a67c2c2ed397c27637ffeada9841abc5162f928673376d57f0ed57ef15b0->leave($__internal_0788a67c2c2ed397c27637ffeada9841abc5162f928673376d57f0ed57ef15b0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe57752583f6ba30b48c347304b59732576aa5cba3bed96653b0eea43f4bbf42 = $this->env->getExtension("native_profiler");
        $__internal_fe57752583f6ba30b48c347304b59732576aa5cba3bed96653b0eea43f4bbf42->enter($__internal_fe57752583f6ba30b48c347304b59732576aa5cba3bed96653b0eea43f4bbf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_fe57752583f6ba30b48c347304b59732576aa5cba3bed96653b0eea43f4bbf42->leave($__internal_fe57752583f6ba30b48c347304b59732576aa5cba3bed96653b0eea43f4bbf42_prof);

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
