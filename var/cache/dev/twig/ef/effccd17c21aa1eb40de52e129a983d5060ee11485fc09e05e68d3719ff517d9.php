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
        $__internal_94066d1154e7cbce8ad6e313c98c2cdfec77a1fa38f5506b6f5bd500110b69b5 = $this->env->getExtension("native_profiler");
        $__internal_94066d1154e7cbce8ad6e313c98c2cdfec77a1fa38f5506b6f5bd500110b69b5->enter($__internal_94066d1154e7cbce8ad6e313c98c2cdfec77a1fa38f5506b6f5bd500110b69b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94066d1154e7cbce8ad6e313c98c2cdfec77a1fa38f5506b6f5bd500110b69b5->leave($__internal_94066d1154e7cbce8ad6e313c98c2cdfec77a1fa38f5506b6f5bd500110b69b5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bcf42409697e00b9b9936593bc253d59fb5742e6b54f5f93b8e4b87a92769ac = $this->env->getExtension("native_profiler");
        $__internal_1bcf42409697e00b9b9936593bc253d59fb5742e6b54f5f93b8e4b87a92769ac->enter($__internal_1bcf42409697e00b9b9936593bc253d59fb5742e6b54f5f93b8e4b87a92769ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_1bcf42409697e00b9b9936593bc253d59fb5742e6b54f5f93b8e4b87a92769ac->leave($__internal_1bcf42409697e00b9b9936593bc253d59fb5742e6b54f5f93b8e4b87a92769ac_prof);

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
