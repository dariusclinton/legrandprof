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
        $__internal_2f05ffac9368702ade22131b334f4d4754ae98bf2c701a95171121a2634cccc9 = $this->env->getExtension("native_profiler");
        $__internal_2f05ffac9368702ade22131b334f4d4754ae98bf2c701a95171121a2634cccc9->enter($__internal_2f05ffac9368702ade22131b334f4d4754ae98bf2c701a95171121a2634cccc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f05ffac9368702ade22131b334f4d4754ae98bf2c701a95171121a2634cccc9->leave($__internal_2f05ffac9368702ade22131b334f4d4754ae98bf2c701a95171121a2634cccc9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_97309698ff2e28f1ad18c8e62b6371de1726a3de85c67a55488523855a1960f6 = $this->env->getExtension("native_profiler");
        $__internal_97309698ff2e28f1ad18c8e62b6371de1726a3de85c67a55488523855a1960f6->enter($__internal_97309698ff2e28f1ad18c8e62b6371de1726a3de85c67a55488523855a1960f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_97309698ff2e28f1ad18c8e62b6371de1726a3de85c67a55488523855a1960f6->leave($__internal_97309698ff2e28f1ad18c8e62b6371de1726a3de85c67a55488523855a1960f6_prof);

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
