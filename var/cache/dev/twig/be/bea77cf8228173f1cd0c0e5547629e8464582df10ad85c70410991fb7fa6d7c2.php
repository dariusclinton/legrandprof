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
        $__internal_2ea6432a2ffc8c5119795530103815c23c29a377bf16c3d1b3a5092b6ec3fe2a = $this->env->getExtension("native_profiler");
        $__internal_2ea6432a2ffc8c5119795530103815c23c29a377bf16c3d1b3a5092b6ec3fe2a->enter($__internal_2ea6432a2ffc8c5119795530103815c23c29a377bf16c3d1b3a5092b6ec3fe2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2ea6432a2ffc8c5119795530103815c23c29a377bf16c3d1b3a5092b6ec3fe2a->leave($__internal_2ea6432a2ffc8c5119795530103815c23c29a377bf16c3d1b3a5092b6ec3fe2a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d0223716cbe0eec6aae2773a9387922c19b58718c4450ab97a4f12c04b1d126 = $this->env->getExtension("native_profiler");
        $__internal_3d0223716cbe0eec6aae2773a9387922c19b58718c4450ab97a4f12c04b1d126->enter($__internal_3d0223716cbe0eec6aae2773a9387922c19b58718c4450ab97a4f12c04b1d126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3d0223716cbe0eec6aae2773a9387922c19b58718c4450ab97a4f12c04b1d126->leave($__internal_3d0223716cbe0eec6aae2773a9387922c19b58718c4450ab97a4f12c04b1d126_prof);

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
