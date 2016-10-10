<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4b70311a881a43fbf2685565253f1f833de0330b12124d0e62c2246e2c92f104 extends Twig_Template
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
        $__internal_8d78f1939afcb42663b5e3d9f01dc13aa1b33cf939d505ef9bedffffe1281f8d = $this->env->getExtension("native_profiler");
        $__internal_8d78f1939afcb42663b5e3d9f01dc13aa1b33cf939d505ef9bedffffe1281f8d->enter($__internal_8d78f1939afcb42663b5e3d9f01dc13aa1b33cf939d505ef9bedffffe1281f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8d78f1939afcb42663b5e3d9f01dc13aa1b33cf939d505ef9bedffffe1281f8d->leave($__internal_8d78f1939afcb42663b5e3d9f01dc13aa1b33cf939d505ef9bedffffe1281f8d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f970b5899f2557d98ecde2ec33f3ce7498c26e4939063d519287c83e3baa56ce = $this->env->getExtension("native_profiler");
        $__internal_f970b5899f2557d98ecde2ec33f3ce7498c26e4939063d519287c83e3baa56ce->enter($__internal_f970b5899f2557d98ecde2ec33f3ce7498c26e4939063d519287c83e3baa56ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f970b5899f2557d98ecde2ec33f3ce7498c26e4939063d519287c83e3baa56ce->leave($__internal_f970b5899f2557d98ecde2ec33f3ce7498c26e4939063d519287c83e3baa56ce_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
