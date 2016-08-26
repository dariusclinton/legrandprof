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
        $__internal_cac9876741cb3ff7633444afef1cc7d5ce9f3c9dcd854f307bcfca11d754d598 = $this->env->getExtension("native_profiler");
        $__internal_cac9876741cb3ff7633444afef1cc7d5ce9f3c9dcd854f307bcfca11d754d598->enter($__internal_cac9876741cb3ff7633444afef1cc7d5ce9f3c9dcd854f307bcfca11d754d598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cac9876741cb3ff7633444afef1cc7d5ce9f3c9dcd854f307bcfca11d754d598->leave($__internal_cac9876741cb3ff7633444afef1cc7d5ce9f3c9dcd854f307bcfca11d754d598_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fe40fc0589de60b5a84330dae27bb37be2434be133ba59185a048e76d68459e = $this->env->getExtension("native_profiler");
        $__internal_6fe40fc0589de60b5a84330dae27bb37be2434be133ba59185a048e76d68459e->enter($__internal_6fe40fc0589de60b5a84330dae27bb37be2434be133ba59185a048e76d68459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_6fe40fc0589de60b5a84330dae27bb37be2434be133ba59185a048e76d68459e->leave($__internal_6fe40fc0589de60b5a84330dae27bb37be2434be133ba59185a048e76d68459e_prof);

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
