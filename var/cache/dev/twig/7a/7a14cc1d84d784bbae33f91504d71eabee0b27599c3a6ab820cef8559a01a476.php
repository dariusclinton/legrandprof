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
        $__internal_21b85cd83f76db424922ca44776ad1b717ea8012a862ca8c60e434a6e1546231 = $this->env->getExtension("native_profiler");
        $__internal_21b85cd83f76db424922ca44776ad1b717ea8012a862ca8c60e434a6e1546231->enter($__internal_21b85cd83f76db424922ca44776ad1b717ea8012a862ca8c60e434a6e1546231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_21b85cd83f76db424922ca44776ad1b717ea8012a862ca8c60e434a6e1546231->leave($__internal_21b85cd83f76db424922ca44776ad1b717ea8012a862ca8c60e434a6e1546231_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc409d28fbe2e506b95ca979fc104de73516c0311d35a061b558e35752754813 = $this->env->getExtension("native_profiler");
        $__internal_dc409d28fbe2e506b95ca979fc104de73516c0311d35a061b558e35752754813->enter($__internal_dc409d28fbe2e506b95ca979fc104de73516c0311d35a061b558e35752754813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dc409d28fbe2e506b95ca979fc104de73516c0311d35a061b558e35752754813->leave($__internal_dc409d28fbe2e506b95ca979fc104de73516c0311d35a061b558e35752754813_prof);

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
