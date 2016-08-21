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
        $__internal_3bbb4ff576f324272678fbfda948cccdd80b2b171af57132f8979348e0fca76c = $this->env->getExtension("native_profiler");
        $__internal_3bbb4ff576f324272678fbfda948cccdd80b2b171af57132f8979348e0fca76c->enter($__internal_3bbb4ff576f324272678fbfda948cccdd80b2b171af57132f8979348e0fca76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bbb4ff576f324272678fbfda948cccdd80b2b171af57132f8979348e0fca76c->leave($__internal_3bbb4ff576f324272678fbfda948cccdd80b2b171af57132f8979348e0fca76c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3ba77357a7388452b00636a2a7d313c3b3c39575f67d753f4c273d0d6a0ecc2 = $this->env->getExtension("native_profiler");
        $__internal_b3ba77357a7388452b00636a2a7d313c3b3c39575f67d753f4c273d0d6a0ecc2->enter($__internal_b3ba77357a7388452b00636a2a7d313c3b3c39575f67d753f4c273d0d6a0ecc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_b3ba77357a7388452b00636a2a7d313c3b3c39575f67d753f4c273d0d6a0ecc2->leave($__internal_b3ba77357a7388452b00636a2a7d313c3b3c39575f67d753f4c273d0d6a0ecc2_prof);

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
