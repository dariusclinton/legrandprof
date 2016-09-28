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
        $__internal_179d0d0754f74cfe2f71a8912e81820729ccee1dcd45781e25409f140631b7e4 = $this->env->getExtension("native_profiler");
        $__internal_179d0d0754f74cfe2f71a8912e81820729ccee1dcd45781e25409f140631b7e4->enter($__internal_179d0d0754f74cfe2f71a8912e81820729ccee1dcd45781e25409f140631b7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_179d0d0754f74cfe2f71a8912e81820729ccee1dcd45781e25409f140631b7e4->leave($__internal_179d0d0754f74cfe2f71a8912e81820729ccee1dcd45781e25409f140631b7e4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d622d1ee053636528792329e188c9438ec7478488491a9c4fc1d10e10fe2339f = $this->env->getExtension("native_profiler");
        $__internal_d622d1ee053636528792329e188c9438ec7478488491a9c4fc1d10e10fe2339f->enter($__internal_d622d1ee053636528792329e188c9438ec7478488491a9c4fc1d10e10fe2339f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d622d1ee053636528792329e188c9438ec7478488491a9c4fc1d10e10fe2339f->leave($__internal_d622d1ee053636528792329e188c9438ec7478488491a9c4fc1d10e10fe2339f_prof);

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
