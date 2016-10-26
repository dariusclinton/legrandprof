<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4a12d206b7dd89a860dd4ad62cd21f0787f674e52d98ce7eed504d9028261e06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fadebc4d45930460e293a0def9de190fdf9fe5113d8444d0d8849966b4aeba2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fadebc4d45930460e293a0def9de190fdf9fe5113d8444d0d8849966b4aeba2e->enter($__internal_fadebc4d45930460e293a0def9de190fdf9fe5113d8444d0d8849966b4aeba2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fadebc4d45930460e293a0def9de190fdf9fe5113d8444d0d8849966b4aeba2e->leave($__internal_fadebc4d45930460e293a0def9de190fdf9fe5113d8444d0d8849966b4aeba2e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_81118988272566511dbcba5b95ec4e07ed3c1739d4b90ad80e12208ca408f270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81118988272566511dbcba5b95ec4e07ed3c1739d4b90ad80e12208ca408f270->enter($__internal_81118988272566511dbcba5b95ec4e07ed3c1739d4b90ad80e12208ca408f270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_81118988272566511dbcba5b95ec4e07ed3c1739d4b90ad80e12208ca408f270->leave($__internal_81118988272566511dbcba5b95ec4e07ed3c1739d4b90ad80e12208ca408f270_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
