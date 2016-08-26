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
        $__internal_eef3c9b0e13b071f77993da3de50d4b7091503a45a3c48d433a570179bc7be6f = $this->env->getExtension("native_profiler");
        $__internal_eef3c9b0e13b071f77993da3de50d4b7091503a45a3c48d433a570179bc7be6f->enter($__internal_eef3c9b0e13b071f77993da3de50d4b7091503a45a3c48d433a570179bc7be6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eef3c9b0e13b071f77993da3de50d4b7091503a45a3c48d433a570179bc7be6f->leave($__internal_eef3c9b0e13b071f77993da3de50d4b7091503a45a3c48d433a570179bc7be6f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c617c4b56b2052f13420822ba04503ff5a0ca0ecc3d17021b0542725d200ce8d = $this->env->getExtension("native_profiler");
        $__internal_c617c4b56b2052f13420822ba04503ff5a0ca0ecc3d17021b0542725d200ce8d->enter($__internal_c617c4b56b2052f13420822ba04503ff5a0ca0ecc3d17021b0542725d200ce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_c617c4b56b2052f13420822ba04503ff5a0ca0ecc3d17021b0542725d200ce8d->leave($__internal_c617c4b56b2052f13420822ba04503ff5a0ca0ecc3d17021b0542725d200ce8d_prof);

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
