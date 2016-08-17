<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3d2574fcb41d093ffb89a54df4fe379566191610c21ee683b823d8d3c8f96f9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53e798a77a9d225c45dff20ce4fac3c1c3d8ffa0709ac3efec5ebaf0c79fd8b2 = $this->env->getExtension("native_profiler");
        $__internal_53e798a77a9d225c45dff20ce4fac3c1c3d8ffa0709ac3efec5ebaf0c79fd8b2->enter($__internal_53e798a77a9d225c45dff20ce4fac3c1c3d8ffa0709ac3efec5ebaf0c79fd8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53e798a77a9d225c45dff20ce4fac3c1c3d8ffa0709ac3efec5ebaf0c79fd8b2->leave($__internal_53e798a77a9d225c45dff20ce4fac3c1c3d8ffa0709ac3efec5ebaf0c79fd8b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc55b96df4a18b5de31a77de22a749d9af12cacf684ca8abace15232a8a6e4fc = $this->env->getExtension("native_profiler");
        $__internal_bc55b96df4a18b5de31a77de22a749d9af12cacf684ca8abace15232a8a6e4fc->enter($__internal_bc55b96df4a18b5de31a77de22a749d9af12cacf684ca8abace15232a8a6e4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_bc55b96df4a18b5de31a77de22a749d9af12cacf684ca8abace15232a8a6e4fc->leave($__internal_bc55b96df4a18b5de31a77de22a749d9af12cacf684ca8abace15232a8a6e4fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
