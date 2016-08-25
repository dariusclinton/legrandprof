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
        $__internal_05708eb373eb1e48f1ede55e90ae4974effaba8c7a0bed4bde07eb3bdddecbdd = $this->env->getExtension("native_profiler");
        $__internal_05708eb373eb1e48f1ede55e90ae4974effaba8c7a0bed4bde07eb3bdddecbdd->enter($__internal_05708eb373eb1e48f1ede55e90ae4974effaba8c7a0bed4bde07eb3bdddecbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05708eb373eb1e48f1ede55e90ae4974effaba8c7a0bed4bde07eb3bdddecbdd->leave($__internal_05708eb373eb1e48f1ede55e90ae4974effaba8c7a0bed4bde07eb3bdddecbdd_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e7c0d142a83b475560aab4af3f27168daa4bf53d347201c1d208b94e74733be = $this->env->getExtension("native_profiler");
        $__internal_1e7c0d142a83b475560aab4af3f27168daa4bf53d347201c1d208b94e74733be->enter($__internal_1e7c0d142a83b475560aab4af3f27168daa4bf53d347201c1d208b94e74733be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_1e7c0d142a83b475560aab4af3f27168daa4bf53d347201c1d208b94e74733be->leave($__internal_1e7c0d142a83b475560aab4af3f27168daa4bf53d347201c1d208b94e74733be_prof);

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
