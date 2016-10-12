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
        $__internal_c0e0a97fe5cbf2fdcbd59784dc4b2720247e914db8a63631511035e077c987d9 = $this->env->getExtension("native_profiler");
        $__internal_c0e0a97fe5cbf2fdcbd59784dc4b2720247e914db8a63631511035e077c987d9->enter($__internal_c0e0a97fe5cbf2fdcbd59784dc4b2720247e914db8a63631511035e077c987d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c0e0a97fe5cbf2fdcbd59784dc4b2720247e914db8a63631511035e077c987d9->leave($__internal_c0e0a97fe5cbf2fdcbd59784dc4b2720247e914db8a63631511035e077c987d9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea11c3e2891df17f1d194666e05abfa3825b2275c3533626788bdb29112b4a73 = $this->env->getExtension("native_profiler");
        $__internal_ea11c3e2891df17f1d194666e05abfa3825b2275c3533626788bdb29112b4a73->enter($__internal_ea11c3e2891df17f1d194666e05abfa3825b2275c3533626788bdb29112b4a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ea11c3e2891df17f1d194666e05abfa3825b2275c3533626788bdb29112b4a73->leave($__internal_ea11c3e2891df17f1d194666e05abfa3825b2275c3533626788bdb29112b4a73_prof);

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
