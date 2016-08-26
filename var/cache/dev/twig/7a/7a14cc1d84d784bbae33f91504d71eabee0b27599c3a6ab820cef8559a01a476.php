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
        $__internal_ca5a6f59151ba904d6fa29cda861880095585c42c34f0ecdb4e2f9f9fa7002d3 = $this->env->getExtension("native_profiler");
        $__internal_ca5a6f59151ba904d6fa29cda861880095585c42c34f0ecdb4e2f9f9fa7002d3->enter($__internal_ca5a6f59151ba904d6fa29cda861880095585c42c34f0ecdb4e2f9f9fa7002d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ca5a6f59151ba904d6fa29cda861880095585c42c34f0ecdb4e2f9f9fa7002d3->leave($__internal_ca5a6f59151ba904d6fa29cda861880095585c42c34f0ecdb4e2f9f9fa7002d3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_12b394306bebc90cccca7dfe099144b858fea1dea7356953b760c1fa75d81aac = $this->env->getExtension("native_profiler");
        $__internal_12b394306bebc90cccca7dfe099144b858fea1dea7356953b760c1fa75d81aac->enter($__internal_12b394306bebc90cccca7dfe099144b858fea1dea7356953b760c1fa75d81aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_12b394306bebc90cccca7dfe099144b858fea1dea7356953b760c1fa75d81aac->leave($__internal_12b394306bebc90cccca7dfe099144b858fea1dea7356953b760c1fa75d81aac_prof);

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
