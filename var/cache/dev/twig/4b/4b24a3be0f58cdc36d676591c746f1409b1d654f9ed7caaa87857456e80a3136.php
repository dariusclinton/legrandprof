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
        $__internal_d603e04d69663aaf0f26c2bf69b91a0e77493baf8485f9a617cdf620a9ee9790 = $this->env->getExtension("native_profiler");
        $__internal_d603e04d69663aaf0f26c2bf69b91a0e77493baf8485f9a617cdf620a9ee9790->enter($__internal_d603e04d69663aaf0f26c2bf69b91a0e77493baf8485f9a617cdf620a9ee9790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d603e04d69663aaf0f26c2bf69b91a0e77493baf8485f9a617cdf620a9ee9790->leave($__internal_d603e04d69663aaf0f26c2bf69b91a0e77493baf8485f9a617cdf620a9ee9790_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c47e31f962556e949809ccb40a3b69f884562dbea724296cc321f244b92349b = $this->env->getExtension("native_profiler");
        $__internal_6c47e31f962556e949809ccb40a3b69f884562dbea724296cc321f244b92349b->enter($__internal_6c47e31f962556e949809ccb40a3b69f884562dbea724296cc321f244b92349b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6c47e31f962556e949809ccb40a3b69f884562dbea724296cc321f244b92349b->leave($__internal_6c47e31f962556e949809ccb40a3b69f884562dbea724296cc321f244b92349b_prof);

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
