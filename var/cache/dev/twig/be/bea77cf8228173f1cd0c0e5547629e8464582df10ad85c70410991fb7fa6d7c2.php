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
        $__internal_9b2a144dea4b5dd55dc858dad50de3c0208b6c80b5d97924c8155c6154b2c36d = $this->env->getExtension("native_profiler");
        $__internal_9b2a144dea4b5dd55dc858dad50de3c0208b6c80b5d97924c8155c6154b2c36d->enter($__internal_9b2a144dea4b5dd55dc858dad50de3c0208b6c80b5d97924c8155c6154b2c36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9b2a144dea4b5dd55dc858dad50de3c0208b6c80b5d97924c8155c6154b2c36d->leave($__internal_9b2a144dea4b5dd55dc858dad50de3c0208b6c80b5d97924c8155c6154b2c36d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d73d9c8b2207935bc6a0c1817a02fc59b980581a94fc20c00c13452f62567204 = $this->env->getExtension("native_profiler");
        $__internal_d73d9c8b2207935bc6a0c1817a02fc59b980581a94fc20c00c13452f62567204->enter($__internal_d73d9c8b2207935bc6a0c1817a02fc59b980581a94fc20c00c13452f62567204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d73d9c8b2207935bc6a0c1817a02fc59b980581a94fc20c00c13452f62567204->leave($__internal_d73d9c8b2207935bc6a0c1817a02fc59b980581a94fc20c00c13452f62567204_prof);

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
