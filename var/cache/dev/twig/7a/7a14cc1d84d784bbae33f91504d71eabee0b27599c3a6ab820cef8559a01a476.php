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
        $__internal_49936ceb1ade4bcef186b17124b4856caae80d131fb127056fff878ebc72e1bf = $this->env->getExtension("native_profiler");
        $__internal_49936ceb1ade4bcef186b17124b4856caae80d131fb127056fff878ebc72e1bf->enter($__internal_49936ceb1ade4bcef186b17124b4856caae80d131fb127056fff878ebc72e1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_49936ceb1ade4bcef186b17124b4856caae80d131fb127056fff878ebc72e1bf->leave($__internal_49936ceb1ade4bcef186b17124b4856caae80d131fb127056fff878ebc72e1bf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf5572c7d62edd507c6a415170505ecea3f059dc7979eae0b0d534cfebf2e33f = $this->env->getExtension("native_profiler");
        $__internal_cf5572c7d62edd507c6a415170505ecea3f059dc7979eae0b0d534cfebf2e33f->enter($__internal_cf5572c7d62edd507c6a415170505ecea3f059dc7979eae0b0d534cfebf2e33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cf5572c7d62edd507c6a415170505ecea3f059dc7979eae0b0d534cfebf2e33f->leave($__internal_cf5572c7d62edd507c6a415170505ecea3f059dc7979eae0b0d534cfebf2e33f_prof);

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
