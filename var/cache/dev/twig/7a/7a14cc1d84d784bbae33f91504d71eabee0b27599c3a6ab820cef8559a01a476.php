<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ea1010ea581a864e9fe1aa0bc32435a0fdaa2da2559efa6e1c104ca220be309e extends Twig_Template
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
        $__internal_2e3c04cefb9fe648a90c1153f375ab4da5442dce4ca1f3f325437d5970f97b11 = $this->env->getExtension("native_profiler");
        $__internal_2e3c04cefb9fe648a90c1153f375ab4da5442dce4ca1f3f325437d5970f97b11->enter($__internal_2e3c04cefb9fe648a90c1153f375ab4da5442dce4ca1f3f325437d5970f97b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2e3c04cefb9fe648a90c1153f375ab4da5442dce4ca1f3f325437d5970f97b11->leave($__internal_2e3c04cefb9fe648a90c1153f375ab4da5442dce4ca1f3f325437d5970f97b11_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8695b6a64a8f7ff770cef3ad65c6595929113d0cfe80a7a6433409d74450ee09 = $this->env->getExtension("native_profiler");
        $__internal_8695b6a64a8f7ff770cef3ad65c6595929113d0cfe80a7a6433409d74450ee09->enter($__internal_8695b6a64a8f7ff770cef3ad65c6595929113d0cfe80a7a6433409d74450ee09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8695b6a64a8f7ff770cef3ad65c6595929113d0cfe80a7a6433409d74450ee09->leave($__internal_8695b6a64a8f7ff770cef3ad65c6595929113d0cfe80a7a6433409d74450ee09_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
