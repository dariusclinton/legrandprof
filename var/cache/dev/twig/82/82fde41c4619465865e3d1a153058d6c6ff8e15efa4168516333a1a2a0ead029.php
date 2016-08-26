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
        $__internal_fd3427bce537ac1fdc9433c23cebe03688e35513c80a0ff6148f2bf246c4067a = $this->env->getExtension("native_profiler");
        $__internal_fd3427bce537ac1fdc9433c23cebe03688e35513c80a0ff6148f2bf246c4067a->enter($__internal_fd3427bce537ac1fdc9433c23cebe03688e35513c80a0ff6148f2bf246c4067a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd3427bce537ac1fdc9433c23cebe03688e35513c80a0ff6148f2bf246c4067a->leave($__internal_fd3427bce537ac1fdc9433c23cebe03688e35513c80a0ff6148f2bf246c4067a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1001247c4108fe6f3a3046722777223be0d9998d1b91fc91a009929b91c0d88c = $this->env->getExtension("native_profiler");
        $__internal_1001247c4108fe6f3a3046722777223be0d9998d1b91fc91a009929b91c0d88c->enter($__internal_1001247c4108fe6f3a3046722777223be0d9998d1b91fc91a009929b91c0d88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1001247c4108fe6f3a3046722777223be0d9998d1b91fc91a009929b91c0d88c->leave($__internal_1001247c4108fe6f3a3046722777223be0d9998d1b91fc91a009929b91c0d88c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_358d600f04c99f0dd4cc6495cdf41552461c5463359fa1fd79654675cd3c838e = $this->env->getExtension("native_profiler");
        $__internal_358d600f04c99f0dd4cc6495cdf41552461c5463359fa1fd79654675cd3c838e->enter($__internal_358d600f04c99f0dd4cc6495cdf41552461c5463359fa1fd79654675cd3c838e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_358d600f04c99f0dd4cc6495cdf41552461c5463359fa1fd79654675cd3c838e->leave($__internal_358d600f04c99f0dd4cc6495cdf41552461c5463359fa1fd79654675cd3c838e_prof);

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
