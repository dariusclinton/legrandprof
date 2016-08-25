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
        $__internal_a316bd4120840cebaef181c96d43cd6530636964e080575c89d730996f5252f7 = $this->env->getExtension("native_profiler");
        $__internal_a316bd4120840cebaef181c96d43cd6530636964e080575c89d730996f5252f7->enter($__internal_a316bd4120840cebaef181c96d43cd6530636964e080575c89d730996f5252f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a316bd4120840cebaef181c96d43cd6530636964e080575c89d730996f5252f7->leave($__internal_a316bd4120840cebaef181c96d43cd6530636964e080575c89d730996f5252f7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9df1ef055d08991fd054209fa71da71ed886c467e654d7fb55fefe9850fb4d0f = $this->env->getExtension("native_profiler");
        $__internal_9df1ef055d08991fd054209fa71da71ed886c467e654d7fb55fefe9850fb4d0f->enter($__internal_9df1ef055d08991fd054209fa71da71ed886c467e654d7fb55fefe9850fb4d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_9df1ef055d08991fd054209fa71da71ed886c467e654d7fb55fefe9850fb4d0f->leave($__internal_9df1ef055d08991fd054209fa71da71ed886c467e654d7fb55fefe9850fb4d0f_prof);

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
