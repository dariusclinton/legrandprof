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
        $__internal_26e1658fcd17c1e7f6033f6a6608b76659b1a946b5d4f7a10d23584484ba3644 = $this->env->getExtension("native_profiler");
        $__internal_26e1658fcd17c1e7f6033f6a6608b76659b1a946b5d4f7a10d23584484ba3644->enter($__internal_26e1658fcd17c1e7f6033f6a6608b76659b1a946b5d4f7a10d23584484ba3644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_26e1658fcd17c1e7f6033f6a6608b76659b1a946b5d4f7a10d23584484ba3644->leave($__internal_26e1658fcd17c1e7f6033f6a6608b76659b1a946b5d4f7a10d23584484ba3644_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e501d0f7ea9543aa9416f48d56c62219743ddb86681621dbfcc8d60942971b9d = $this->env->getExtension("native_profiler");
        $__internal_e501d0f7ea9543aa9416f48d56c62219743ddb86681621dbfcc8d60942971b9d->enter($__internal_e501d0f7ea9543aa9416f48d56c62219743ddb86681621dbfcc8d60942971b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e501d0f7ea9543aa9416f48d56c62219743ddb86681621dbfcc8d60942971b9d->leave($__internal_e501d0f7ea9543aa9416f48d56c62219743ddb86681621dbfcc8d60942971b9d_prof);

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
