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
        $__internal_56838f24c5f1bcba563e197f90fcc1aba46613890196e916fd0de38a64c250c3 = $this->env->getExtension("native_profiler");
        $__internal_56838f24c5f1bcba563e197f90fcc1aba46613890196e916fd0de38a64c250c3->enter($__internal_56838f24c5f1bcba563e197f90fcc1aba46613890196e916fd0de38a64c250c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_56838f24c5f1bcba563e197f90fcc1aba46613890196e916fd0de38a64c250c3->leave($__internal_56838f24c5f1bcba563e197f90fcc1aba46613890196e916fd0de38a64c250c3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3c7746b46f9564ec022c9da3c9a4bb194036605575d33e99005c8c634fb30da = $this->env->getExtension("native_profiler");
        $__internal_b3c7746b46f9564ec022c9da3c9a4bb194036605575d33e99005c8c634fb30da->enter($__internal_b3c7746b46f9564ec022c9da3c9a4bb194036605575d33e99005c8c634fb30da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b3c7746b46f9564ec022c9da3c9a4bb194036605575d33e99005c8c634fb30da->leave($__internal_b3c7746b46f9564ec022c9da3c9a4bb194036605575d33e99005c8c634fb30da_prof);

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
