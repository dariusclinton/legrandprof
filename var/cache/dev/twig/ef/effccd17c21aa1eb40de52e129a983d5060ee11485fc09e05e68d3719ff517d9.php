<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
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
        $__internal_4cc6ffe1342ffb0fa28f99a7064ca1eadd94f508be1392d7d5996cce9c2083d6 = $this->env->getExtension("native_profiler");
        $__internal_4cc6ffe1342ffb0fa28f99a7064ca1eadd94f508be1392d7d5996cce9c2083d6->enter($__internal_4cc6ffe1342ffb0fa28f99a7064ca1eadd94f508be1392d7d5996cce9c2083d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cc6ffe1342ffb0fa28f99a7064ca1eadd94f508be1392d7d5996cce9c2083d6->leave($__internal_4cc6ffe1342ffb0fa28f99a7064ca1eadd94f508be1392d7d5996cce9c2083d6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a20a070a17fda871f2139aef909e4f81e3b0f5994d0523af052123b6c5e2d1f = $this->env->getExtension("native_profiler");
        $__internal_4a20a070a17fda871f2139aef909e4f81e3b0f5994d0523af052123b6c5e2d1f->enter($__internal_4a20a070a17fda871f2139aef909e4f81e3b0f5994d0523af052123b6c5e2d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_4a20a070a17fda871f2139aef909e4f81e3b0f5994d0523af052123b6c5e2d1f->leave($__internal_4a20a070a17fda871f2139aef909e4f81e3b0f5994d0523af052123b6c5e2d1f_prof);

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
