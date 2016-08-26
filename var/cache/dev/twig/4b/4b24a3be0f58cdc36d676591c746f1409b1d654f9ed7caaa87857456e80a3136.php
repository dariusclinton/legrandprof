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
        $__internal_f324086c1d7d58216b63989449c62fa0eb1be23278efc928b32bfd17bf10363e = $this->env->getExtension("native_profiler");
        $__internal_f324086c1d7d58216b63989449c62fa0eb1be23278efc928b32bfd17bf10363e->enter($__internal_f324086c1d7d58216b63989449c62fa0eb1be23278efc928b32bfd17bf10363e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f324086c1d7d58216b63989449c62fa0eb1be23278efc928b32bfd17bf10363e->leave($__internal_f324086c1d7d58216b63989449c62fa0eb1be23278efc928b32bfd17bf10363e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e93a4e5150652846d7bd7376aaac0ebd6707810140a75c0a75102a766bbc0453 = $this->env->getExtension("native_profiler");
        $__internal_e93a4e5150652846d7bd7376aaac0ebd6707810140a75c0a75102a766bbc0453->enter($__internal_e93a4e5150652846d7bd7376aaac0ebd6707810140a75c0a75102a766bbc0453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e93a4e5150652846d7bd7376aaac0ebd6707810140a75c0a75102a766bbc0453->leave($__internal_e93a4e5150652846d7bd7376aaac0ebd6707810140a75c0a75102a766bbc0453_prof);

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
