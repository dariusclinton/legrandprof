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
        $__internal_99578cba778f08bfdbbe53a745809753ac4012ab8bfc45c9986656d71bd00221 = $this->env->getExtension("native_profiler");
        $__internal_99578cba778f08bfdbbe53a745809753ac4012ab8bfc45c9986656d71bd00221->enter($__internal_99578cba778f08bfdbbe53a745809753ac4012ab8bfc45c9986656d71bd00221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_99578cba778f08bfdbbe53a745809753ac4012ab8bfc45c9986656d71bd00221->leave($__internal_99578cba778f08bfdbbe53a745809753ac4012ab8bfc45c9986656d71bd00221_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3752a45815550dd23c8f41398a8ef6bc36c430d53d93b08d88837cb5183b17bd = $this->env->getExtension("native_profiler");
        $__internal_3752a45815550dd23c8f41398a8ef6bc36c430d53d93b08d88837cb5183b17bd->enter($__internal_3752a45815550dd23c8f41398a8ef6bc36c430d53d93b08d88837cb5183b17bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3752a45815550dd23c8f41398a8ef6bc36c430d53d93b08d88837cb5183b17bd->leave($__internal_3752a45815550dd23c8f41398a8ef6bc36c430d53d93b08d88837cb5183b17bd_prof);

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
