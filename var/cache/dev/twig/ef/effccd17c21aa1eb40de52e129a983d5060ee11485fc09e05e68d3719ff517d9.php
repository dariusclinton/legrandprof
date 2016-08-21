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
        $__internal_e6f3ca9b5f83aa043247fe243c9c21ea5c3b6b01d5e883886cef04332ba182f9 = $this->env->getExtension("native_profiler");
        $__internal_e6f3ca9b5f83aa043247fe243c9c21ea5c3b6b01d5e883886cef04332ba182f9->enter($__internal_e6f3ca9b5f83aa043247fe243c9c21ea5c3b6b01d5e883886cef04332ba182f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f3ca9b5f83aa043247fe243c9c21ea5c3b6b01d5e883886cef04332ba182f9->leave($__internal_e6f3ca9b5f83aa043247fe243c9c21ea5c3b6b01d5e883886cef04332ba182f9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bf5f7cb33ffa4dfd6fba33fad1f2855c5cac3be1b38d86bd04e6130c02f5235 = $this->env->getExtension("native_profiler");
        $__internal_5bf5f7cb33ffa4dfd6fba33fad1f2855c5cac3be1b38d86bd04e6130c02f5235->enter($__internal_5bf5f7cb33ffa4dfd6fba33fad1f2855c5cac3be1b38d86bd04e6130c02f5235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_5bf5f7cb33ffa4dfd6fba33fad1f2855c5cac3be1b38d86bd04e6130c02f5235->leave($__internal_5bf5f7cb33ffa4dfd6fba33fad1f2855c5cac3be1b38d86bd04e6130c02f5235_prof);

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
