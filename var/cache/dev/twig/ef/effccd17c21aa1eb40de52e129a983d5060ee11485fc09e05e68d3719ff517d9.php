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
        $__internal_9b3cbbc2713962d28508213bd9d5d852b139c11c3107756b90e02bed57f1ecb8 = $this->env->getExtension("native_profiler");
        $__internal_9b3cbbc2713962d28508213bd9d5d852b139c11c3107756b90e02bed57f1ecb8->enter($__internal_9b3cbbc2713962d28508213bd9d5d852b139c11c3107756b90e02bed57f1ecb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b3cbbc2713962d28508213bd9d5d852b139c11c3107756b90e02bed57f1ecb8->leave($__internal_9b3cbbc2713962d28508213bd9d5d852b139c11c3107756b90e02bed57f1ecb8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7fdb1cfe3fbcd06d5ad400018c871f7caa79810ad2103f267d35bf1ee234add = $this->env->getExtension("native_profiler");
        $__internal_b7fdb1cfe3fbcd06d5ad400018c871f7caa79810ad2103f267d35bf1ee234add->enter($__internal_b7fdb1cfe3fbcd06d5ad400018c871f7caa79810ad2103f267d35bf1ee234add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_b7fdb1cfe3fbcd06d5ad400018c871f7caa79810ad2103f267d35bf1ee234add->leave($__internal_b7fdb1cfe3fbcd06d5ad400018c871f7caa79810ad2103f267d35bf1ee234add_prof);

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
