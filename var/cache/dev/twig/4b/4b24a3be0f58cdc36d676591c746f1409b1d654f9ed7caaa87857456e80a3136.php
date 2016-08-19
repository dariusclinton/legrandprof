<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_ee785a962a6416587d11b8ba40dc3a889c38db4830819c0a2ec689e7b66e3165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8816db12b21b190cd43f563042e66a88ec073ea281d2f56b9a536113fd3d22a = $this->env->getExtension("native_profiler");
        $__internal_e8816db12b21b190cd43f563042e66a88ec073ea281d2f56b9a536113fd3d22a->enter($__internal_e8816db12b21b190cd43f563042e66a88ec073ea281d2f56b9a536113fd3d22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e8816db12b21b190cd43f563042e66a88ec073ea281d2f56b9a536113fd3d22a->leave($__internal_e8816db12b21b190cd43f563042e66a88ec073ea281d2f56b9a536113fd3d22a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d12779ae6611ecbd94c4b4bb83e1e40b3b11f11f18159c9a40e7b49d1a74317d = $this->env->getExtension("native_profiler");
        $__internal_d12779ae6611ecbd94c4b4bb83e1e40b3b11f11f18159c9a40e7b49d1a74317d->enter($__internal_d12779ae6611ecbd94c4b4bb83e1e40b3b11f11f18159c9a40e7b49d1a74317d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d12779ae6611ecbd94c4b4bb83e1e40b3b11f11f18159c9a40e7b49d1a74317d->leave($__internal_d12779ae6611ecbd94c4b4bb83e1e40b3b11f11f18159c9a40e7b49d1a74317d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
