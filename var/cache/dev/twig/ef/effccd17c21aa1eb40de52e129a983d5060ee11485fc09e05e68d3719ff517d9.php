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
        $__internal_bfb5d85560e5a2860021698ca1bff642cbd52a482c7c478e0afbaef6984b6e99 = $this->env->getExtension("native_profiler");
        $__internal_bfb5d85560e5a2860021698ca1bff642cbd52a482c7c478e0afbaef6984b6e99->enter($__internal_bfb5d85560e5a2860021698ca1bff642cbd52a482c7c478e0afbaef6984b6e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfb5d85560e5a2860021698ca1bff642cbd52a482c7c478e0afbaef6984b6e99->leave($__internal_bfb5d85560e5a2860021698ca1bff642cbd52a482c7c478e0afbaef6984b6e99_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8900af0994cd10b3f31c385be8d802fcf862d6806d63a841b329f1c486593320 = $this->env->getExtension("native_profiler");
        $__internal_8900af0994cd10b3f31c385be8d802fcf862d6806d63a841b329f1c486593320->enter($__internal_8900af0994cd10b3f31c385be8d802fcf862d6806d63a841b329f1c486593320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_8900af0994cd10b3f31c385be8d802fcf862d6806d63a841b329f1c486593320->leave($__internal_8900af0994cd10b3f31c385be8d802fcf862d6806d63a841b329f1c486593320_prof);

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
