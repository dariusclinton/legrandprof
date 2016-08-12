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
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03c1b77dddfdc63e2eb7d0d5e217f622ba5a26e1891e1e884c888187057968e3 = $this->env->getExtension("native_profiler");
        $__internal_03c1b77dddfdc63e2eb7d0d5e217f622ba5a26e1891e1e884c888187057968e3->enter($__internal_03c1b77dddfdc63e2eb7d0d5e217f622ba5a26e1891e1e884c888187057968e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03c1b77dddfdc63e2eb7d0d5e217f622ba5a26e1891e1e884c888187057968e3->leave($__internal_03c1b77dddfdc63e2eb7d0d5e217f622ba5a26e1891e1e884c888187057968e3_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba39ca911009f73cc6bac0b12f7599ed4ef5849dd496532a96277d436a478b8a = $this->env->getExtension("native_profiler");
        $__internal_ba39ca911009f73cc6bac0b12f7599ed4ef5849dd496532a96277d436a478b8a->enter($__internal_ba39ca911009f73cc6bac0b12f7599ed4ef5849dd496532a96277d436a478b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ba39ca911009f73cc6bac0b12f7599ed4ef5849dd496532a96277d436a478b8a->leave($__internal_ba39ca911009f73cc6bac0b12f7599ed4ef5849dd496532a96277d436a478b8a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f55297e5f1dc26b52d8a92bc3d991aea876e1351339963bbac680bd574fe808 = $this->env->getExtension("native_profiler");
        $__internal_9f55297e5f1dc26b52d8a92bc3d991aea876e1351339963bbac680bd574fe808->enter($__internal_9f55297e5f1dc26b52d8a92bc3d991aea876e1351339963bbac680bd574fe808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_9f55297e5f1dc26b52d8a92bc3d991aea876e1351339963bbac680bd574fe808->leave($__internal_9f55297e5f1dc26b52d8a92bc3d991aea876e1351339963bbac680bd574fe808_prof);

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
        return array (  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     */
/*  */
/* {% endblock %}*/
