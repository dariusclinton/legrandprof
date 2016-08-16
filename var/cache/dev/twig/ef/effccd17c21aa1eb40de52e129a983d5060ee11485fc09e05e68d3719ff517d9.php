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
        $__internal_92885e5cd792ee65ac0d2ed2558a0d513db592911bdb3fe7831d60dbeae91c16 = $this->env->getExtension("native_profiler");
        $__internal_92885e5cd792ee65ac0d2ed2558a0d513db592911bdb3fe7831d60dbeae91c16->enter($__internal_92885e5cd792ee65ac0d2ed2558a0d513db592911bdb3fe7831d60dbeae91c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92885e5cd792ee65ac0d2ed2558a0d513db592911bdb3fe7831d60dbeae91c16->leave($__internal_92885e5cd792ee65ac0d2ed2558a0d513db592911bdb3fe7831d60dbeae91c16_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a2718a42bee00ccb602bc1dce8bed9e53d0f694222b22009c31f89c20a8cd16 = $this->env->getExtension("native_profiler");
        $__internal_0a2718a42bee00ccb602bc1dce8bed9e53d0f694222b22009c31f89c20a8cd16->enter($__internal_0a2718a42bee00ccb602bc1dce8bed9e53d0f694222b22009c31f89c20a8cd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_0a2718a42bee00ccb602bc1dce8bed9e53d0f694222b22009c31f89c20a8cd16->leave($__internal_0a2718a42bee00ccb602bc1dce8bed9e53d0f694222b22009c31f89c20a8cd16_prof);

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
