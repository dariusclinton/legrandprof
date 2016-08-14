<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_76424bd045e9bf1a54203252e1f6641525ea7cb92f51655ae854943cac288d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e7051d2282ae6a1ee5436e7e20766291a782146a3fd6c67648474d0856dc934 = $this->env->getExtension("native_profiler");
        $__internal_8e7051d2282ae6a1ee5436e7e20766291a782146a3fd6c67648474d0856dc934->enter($__internal_8e7051d2282ae6a1ee5436e7e20766291a782146a3fd6c67648474d0856dc934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e7051d2282ae6a1ee5436e7e20766291a782146a3fd6c67648474d0856dc934->leave($__internal_8e7051d2282ae6a1ee5436e7e20766291a782146a3fd6c67648474d0856dc934_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc0d7167a18d49b369dc3f1e759089aea880f02f4f4309f9b0703cff21c56b15 = $this->env->getExtension("native_profiler");
        $__internal_fc0d7167a18d49b369dc3f1e759089aea880f02f4f4309f9b0703cff21c56b15->enter($__internal_fc0d7167a18d49b369dc3f1e759089aea880f02f4f4309f9b0703cff21c56b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_fc0d7167a18d49b369dc3f1e759089aea880f02f4f4309f9b0703cff21c56b15->leave($__internal_fc0d7167a18d49b369dc3f1e759089aea880f02f4f4309f9b0703cff21c56b15_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
