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
        $__internal_71b9110e88ffd356ec416edadfa36d2e504dd7a4e9b6eba865ca0b1ed87612bb = $this->env->getExtension("native_profiler");
        $__internal_71b9110e88ffd356ec416edadfa36d2e504dd7a4e9b6eba865ca0b1ed87612bb->enter($__internal_71b9110e88ffd356ec416edadfa36d2e504dd7a4e9b6eba865ca0b1ed87612bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_71b9110e88ffd356ec416edadfa36d2e504dd7a4e9b6eba865ca0b1ed87612bb->leave($__internal_71b9110e88ffd356ec416edadfa36d2e504dd7a4e9b6eba865ca0b1ed87612bb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1dc11c0f833402837dbbae6fa43bb2f694916067b14ad168ec118d67a59d25a9 = $this->env->getExtension("native_profiler");
        $__internal_1dc11c0f833402837dbbae6fa43bb2f694916067b14ad168ec118d67a59d25a9->enter($__internal_1dc11c0f833402837dbbae6fa43bb2f694916067b14ad168ec118d67a59d25a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1dc11c0f833402837dbbae6fa43bb2f694916067b14ad168ec118d67a59d25a9->leave($__internal_1dc11c0f833402837dbbae6fa43bb2f694916067b14ad168ec118d67a59d25a9_prof);

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
