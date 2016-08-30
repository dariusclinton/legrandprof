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
        $__internal_3c66970c99dd14b31b3aaf295b341da0db0c9144e55b12b6cb8938a665c35c26 = $this->env->getExtension("native_profiler");
        $__internal_3c66970c99dd14b31b3aaf295b341da0db0c9144e55b12b6cb8938a665c35c26->enter($__internal_3c66970c99dd14b31b3aaf295b341da0db0c9144e55b12b6cb8938a665c35c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c66970c99dd14b31b3aaf295b341da0db0c9144e55b12b6cb8938a665c35c26->leave($__internal_3c66970c99dd14b31b3aaf295b341da0db0c9144e55b12b6cb8938a665c35c26_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d21892ea4035ad558f5135ce4e97b8a3d1db2c73d359e1ee08a2b909c0cfa3c2 = $this->env->getExtension("native_profiler");
        $__internal_d21892ea4035ad558f5135ce4e97b8a3d1db2c73d359e1ee08a2b909c0cfa3c2->enter($__internal_d21892ea4035ad558f5135ce4e97b8a3d1db2c73d359e1ee08a2b909c0cfa3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_d21892ea4035ad558f5135ce4e97b8a3d1db2c73d359e1ee08a2b909c0cfa3c2->leave($__internal_d21892ea4035ad558f5135ce4e97b8a3d1db2c73d359e1ee08a2b909c0cfa3c2_prof);

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
